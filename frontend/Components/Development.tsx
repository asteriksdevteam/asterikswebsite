/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Development() 
{
  return (
    <>
        <section className='development-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={8}>
                        <h2 className='title'>Web Development Services</h2>
                        <p className='desc'>Your web presence is pivotal for your brand, aside from it serving as a point of service. Get started with an experienced website creation team in the USA that knows just what you need to take you forward.</p>
                    </Col>
                </Row>
                <Row className='mt-4'>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/dev1.png" className='dev1' alt="" />
                            <h3 className='subtitle'>Web Development</h3>
                            <p>Leverage powerful platforms and tools to build a vibrant and robust web presence.</p>
                        </div>
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/dev1.png" className='dev1' alt="" />
                            <h3 className='subtitle'>E-commerce Development</h3>
                            <p>Leverage powerful platforms and tools to build a vibrant and robust web presence.</p>
                        </div>
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/dev1.png" className='dev1' alt="" />
                            <h3 className='subtitle'>Content Management</h3>
                            <p>Leverage powerful platforms and tools to build a vibrant and robust web presence.</p>
                        </div>
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/dev1.png" className='dev1' alt="" />
                            <h3 className='subtitle'>Custom Development</h3>
                            <p>Leverage powerful platforms and tools to build a vibrant and robust web presence.</p>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
