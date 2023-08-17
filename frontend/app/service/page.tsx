import Contactsection from '@/Components/Contactsection'
import Cta from '@/Components/Cta'
import Development from '@/Components/Development'
import Ourwork from '@/Components/Ourwork'
import Process from '@/Components/Process'
import Servicebanner from '@/Components/Servicebanner'
import Servicetype from '@/Components/Servicetype'
import Whychoose from '@/Components/Whychoose'
import React from 'react'

export default function page() 
{
  return (
   <>
        <Servicebanner/>
        <Development/>
        <Servicetype/>
        <Ourwork/>
        <Whychoose/>
        <Process/>
        <Contactsection/>
        <Cta/>
   </>
  )
}
