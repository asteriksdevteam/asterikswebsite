/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Ourwork() 
{
  return (

    <>
        <section className='ourwork-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9} md={9}>
                        <h2 className='title'>Our Work</h2>
                        <h3 className='subtitle3'>Web Development Solutions Portfolio</h3>
                        <p className='desc'>Spanning multiple industries, our skilled and experienced web developers build solutions to take their business forward and thrive among the best of their industries competitors.</p>
                    </Col>
                </Row>
                <Row className='mt-4 align-items-center'>
                    <Col lg={{ span: 6, offset: 6 }} md={{ span: 6, offset: 6 }} className='ourwork-description align-items-center my-auto'>
                    <img src="/assets/images/smalllogo.png" className='smalllogo' alt="" />
                    <p className='smalltitle'>Asteriks Digital</p>
                    <h2 className='title'>Asteriks Digital</h2>
                    <p>Spanning multiple industries, our skilled and experienced web developers build solutions to take their business forward and thrive among the best of their industries competitors.</p>
                    </Col>
                </Row>
            </Container>
        </section>
    </>

   )
}
