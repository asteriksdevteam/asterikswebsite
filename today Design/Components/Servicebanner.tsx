'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Servicebanner() 
{
  return (
    <>
        <section className='servicebanner-section'>
            <Container className='containercenter'>
                <Row className='justify-content-center'>
                    <Col lg={6} md={6} xs={12} className='my-auto'>
                        <div className='servicebanner-content'>
                            <h1 className='bannerheading'>Web Development Company in USA</h1>
                            <p>Ignite your online identity with cornerstone digital assets. Build your presence with superb designs and functionality.</p>
                        </div>
                    </Col>
                    <Col lg={6} md={6} xs={12}>
                        <div className='form'>
                            <h3 className='subtitle'>Lets start a project together</h3>
                            <p>We make all your dreams come true in a successful project.</p>
                            <form action="#">
                                <Row className='gx-3'>
                                    <Col lg={6}>
                                        <input type="text" placeholder='Name*' className='form-control' required/>
                                    </Col>
                                    <Col lg={6}>
                                        <input type="text" placeholder='Email*' className='form-control' required/>
                                    </Col>
                                </Row>
                                <Row className='mt-3 gx-3'>
                                    <Col lg={6}>
                                        <input type="text" placeholder='phone*' className='form-control' required/>
                                    </Col>
                                    <Col lg={6}>
                                        <select className='form-select form-control'>
                                            <option>frontend</option>
                                            <option>backtend</option>
                                            <option>html</option>
                                        </select>
                                    </Col>
                                </Row>
                                <Col lg={12} className='mt-3'>
                                    <textarea  rows={7} className='form-control' placeholder='summary'></textarea>
                                </Col>
                                <Row className='mt-3 justify-content-center'>
                                    <button type='submit' className='orangebtn'>submit</button>
                                </Row>
                            </form>
                        </div>                    
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
