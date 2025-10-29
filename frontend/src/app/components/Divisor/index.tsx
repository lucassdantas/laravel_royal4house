import React from 'react'

type DivisorProps = {
  className?:string;
}
export const Divisor = ({className = ''}:DivisorProps) => {
  return (
    <div className={`w-[70px] bg-dark-yellow h-[5px] my-12 ${className}`}></div>
  )
}
