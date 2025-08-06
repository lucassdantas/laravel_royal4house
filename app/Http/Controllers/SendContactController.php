<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\ContactModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendContactController extends Controller
{

  public function sendEmail($to, $msg, $subject){
    Mail::to($to)->send(new ContactMail($msg, $subject));
  }
  public function sendContact(Request $request)
  {
    $request->validate(
      [
        'name' => 'required|min:3|max:255',
        'email' => 'required|min:3|max:255|email',
        'phone' => 'required|min:3|max:255',
        'message' => 'required|min:3|max:3000'
      ],
      [
        'name.required' => 'O nome é obrigatório',
        'name.min' => 'Mínimo de :min caractéres',
        'name.max' => 'Máx de :max caractéres',
        'email.required' => 'O texto é obrigatório',
        'email.min' => 'Mínimo de :min caractéres',
        'email.max' => 'Máx de :max caractéres',
        'email.email' => 'Não é um e-mail válido',
        'phone.required' => 'O telefone/celular é obrigatório',
        'phone.min' => 'Mínimo de :min caractéres',
        'phone.max' => 'Máx de :max caractéres',
        'message.required' => 'A mensagem é obrigatória',
        'message.min' => 'Mínimo de :min caractéres',
        'message.max' => 'Máx de :max caractéres',
      ]
    );

    $name = $request->input('name');
    $email = $request->input('email');
    $phone = $request->input('phone');
    $message = $request->input('message');

    $completeMessageToEmail = "
    Novo lead do site: 
    Nome: $name 
    E-mail: $email 
    Celular/telefone: $phone 
    Mensagem: $message 
    "; 

    $this->sendEmail(env('DESTINATARY_OF_EMAILS'), $completeMessageToEmail, "Lead do site");
    return redirect()->route('contato')->with('emailSended', 'E-mail enviado com sucesso!');
  }
}
