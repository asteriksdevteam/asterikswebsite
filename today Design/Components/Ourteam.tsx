/* eslint-disable @next/next/no-img-element */
/* eslint-disable jsx-a11y/alt-text */
'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'
import Image from 'next/image'
export default function Ourteam() 
{

  return (
    <>
        <section className='ourteam-section pb-0'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <h2 className='title'>The Heartbeat of Exceptional Leadership</h2>
                    <p className='desc'>Talent may win you games, but intelligence and teamwork can win you the title of champion.</p>
                </Row>
                <Row>
                    <Col lg={3} md={6}>
                        <div className='ourteamdiv1'>
                            <div className='ourteamdiv-content1'>
                               <img src='/assets/images/leaders/l1.png' className='team1' alt=''/>
                                <h3 className='subtitle mt-4 mb-0'>muhammad junaid</h3>
                                <p>CEO</p>
                            </div>
                        </div>                    
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='ourteamdiv2'>
                            <div className='ourteamdiv-content2'>
                               <img src='/assets/images/leaders/l2.png' className='team1' alt=''/>
                                <h3 className='subtitle mt-4 mb-0'>Abdul Sami Khan</h3>
                                <p>Development Manager</p>
                            </div>
                        </div>                    
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='ourteamdiv3'>
                            <div className='ourteamdiv-content3'>
                               <img src='/assets/images/leaders/l3.png' className='team1' alt=''/>
                                <h3 className='subtitle mt-4 mb-0'>Ashar Ali</h3>
                                <p>Marketing Managner</p>
                            </div>
                        </div>                    
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='ourteamdiv4'>
                            <div className='ourteamdiv-content4'>
                               <img src='/assets/images/leaders/l4.png' className='team1'  alt=''/>
                                <h3 className='subtitle mt-4 mb-0'>Fatima Zia</h3>
                                <p>HR Manager</p>
                            </div>
                        </div>                    
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
