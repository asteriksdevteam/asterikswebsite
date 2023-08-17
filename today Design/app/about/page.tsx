import React from 'react'
import Aboutbanner from '@/Components/Aboutbanner'
import Companyprofile from '@/Components/Companyprofile'
import Mission from '@/Components/Mission'
import Vission from '@/Components/Vission'
import Partners from '@/Components/Partners'
import Cta from '@/Components/Cta'
import Ourteam from '@/Components/Ourteam'
import Countupsection from '@/Components/Countupsection'
import Ourclient from '@/Components/Ourclient'

export default function page() 
{
  return (
    <>
        <Aboutbanner/>
        <Ourclient/>
        <Companyprofile/>
        <Mission/> 
        <Vission/>
        <Countupsection/>
        <Ourteam/>
        <Partners/> 
        <Cta/>
    </>
  )
}
