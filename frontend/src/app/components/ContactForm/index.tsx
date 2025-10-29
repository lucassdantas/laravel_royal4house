import React from 'react'

export const ContactForm = () => {
  return (
    
    <form action="/sendEmail" method="post" >
    <div className="mb-3">
        <label htmlFor="name" className="form-label">Nome</label>
        <input type="text" className="form-control bg-dark text-info" name="name"  required/>
    </div>
  
   
    <div className="mb-3">
        <button type="submit" className="btn btn-secondary w-100">Enviar contato</button>
    </div>
</form>
  )
}
