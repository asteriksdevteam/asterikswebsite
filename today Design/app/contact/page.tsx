import Contactbanner from '@/Components/Contactbanner'
import Cta from '@/Components/Cta'
import Header2 from '@/Components/Header2'
import Mapsection from '@/Components/Mapsection'
import React from 'react'

export default function page() 
{
  return (
    <>
        <Contactbanner/>
        <Mapsection/>
        <Cta/>
    </>
  )
}
