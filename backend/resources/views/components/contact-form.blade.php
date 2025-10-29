<form action="/sendEmail" method="post" novalidate>
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Nome</label>
        <input type="text" class="form-control bg-dark text-info" name="name" value="{{ old('name') }}" required>
        {{-- show error --}}
        @error('name')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="text" class="form-control bg-dark text-info" name="email" value="{{ old('email') }}" required>
        {{-- show error --}}
        @error('email')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="phone" class="form-label">Telefone ou celular</label>
        <input type="text" class="form-control bg-dark text-info" name="phone" value="{{ old('phone') }}" required>
        {{-- show error --}}
        @error('phone')
        <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label for="message" class="form-label">Mensagem</label>
        <textarea class="form-control bg-dark text-info" name="message" required>{{ old('message') }}</textarea>        {{-- show error --}}
        @error('message')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    @if(session('emailSended'))
      <p>{{session('emailSended')}}</p>
    @endif
   
    <div class="mb-3">
        <button type="submit" class="btn btn-secondary w-100">Enviar contato</button>
    </div>
</form>