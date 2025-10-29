import { Section } from '@/app/components/Section'
import React from 'react'

export const Footer = () => {
  return (
  <Section className="bg-black text-white py-10 px-6">
  <div className="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">

    <div>
      <h3 className="text-lg font-semibold mb-2">ATENDIMENTO</h3>
      <p>WhatsApp:<br/>(21) 97267-1912</p>
      <p className="mt-2">administrativo@royal4house.com.br</p>
    </div>

    <div>
      <h3 className="text-lg font-semibold mb-2">LOCALIZAÇÃO</h3>
      <p>Av. das Américas, 10.410, Loja A.</p>
      <p>Barra da Tijuca, RJ – CEP: 22793-082</p>
    </div>

    <div>
      <h3 className="text-lg font-semibold mb-2">CRECI</h3>
      <p>11.908</p>

      <h3 className="text-lg font-semibold mt-4 mb-2">TERMOS</h3>
      <ul>
        <li><a href="/termos" className="hover:underline">Termos e condições</a></li>
        <li><a href="/privacidade" className="hover:underline">Política de Privacidade</a></li>
      </ul>
    </div>

    <div>
      <h3 className="text-lg font-semibold mb-2">SOCIAL</h3>
      <ul className="space-y-1">
        <li><a href="#" className="hover:underline">Facebook</a></li>
        <li><a href="#" className="hover:underline">Instagram</a></li>
        <li><a href="#" className="hover:underline">YouTube</a></li>
        <li><a href="#" className="hover:underline">TikTok</a></li>
      </ul>
    </div>
  </div>

  <div className="mt-10 text-center text-sm text-gray-400">
    <span>© 2025 Royal4House – Todos os direitos reservados.</span>
  </div>
  </Section>
  )
}
