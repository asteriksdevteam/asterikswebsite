/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import { Container, Row, Col } from 'react-bootstrap'

export default function Partners() 
{
  return (
    <>
    <section className='partners-section'>
        <Container>
            <Row className='justify-content-center text-center'>
                <Col lg={8} xs={12}>
                    <h2 className='title'>We partner with the world’s technology leaders.</h2>
                </Col>
            </Row>
            <Row className='mt-2'>
                <Col lg={3} md={6}>
                    <img src='/assets/images/partnerlogo1.png' className='partner' alt=''/>
                </Col>
                <Col lg={3} md={6}>
                    <img src='/assets/images/partnerlogo2.png' className='partner' alt=''/>
                </Col>
                <Col lg={3} md={6}>
                    <img src='/assets/images/partnerlogo3.png' className='partner' alt=''/>
                </Col>
                <Col lg={3} md={6}>
                    <img src='/assets/images/partnerlogo4.png' className='partner' alt=''/>
                </Col>
            </Row>
        </Container>
    </section>
    </>
  )
}
