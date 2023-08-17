/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'
import Image from 'next/image'

export default function Whychoose() 
{
  return (
    <>
        <section className='whychoose-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9}>
                        <h2 className='title'>Why Choose Our Blockchain App Development Services?</h2>                    
                        <p>Along with designing and developing your web presence, we propose business-oriented web development solutions that fit your needs and speak volumes of your values as a brand. With experienced web developers and digital artisans, you get a state-of-the-art solution with a cutting-edge appeal that engages more people online. Leverage powerful technologies and robust architecture to build a web solution that fulfils your needs under packaged web development services</p>
                    </Col>
                </Row>
                <Row>
                    <img src="/assets/images/whychoose.png" alt=""/>
                </Row>
            </Container>
        </section>
    </>
  )
}
