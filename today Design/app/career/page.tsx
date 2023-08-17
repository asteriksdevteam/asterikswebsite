import Careerbanner from '@/Components/Careerbanner'
import Contactsection from '@/Components/Contactsection'
import Cta from '@/Components/Cta'
import Recruitment from '@/Components/Recruitment'
import React from 'react'

export default function page() {
  return (
    <>
        <Careerbanner/>
        <Recruitment/>
        <Contactsection/>
        <Cta/>
    </>
  )
}
