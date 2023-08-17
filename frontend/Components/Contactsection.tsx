'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Contactsection() 
{
  return (
    <>
        <section className='contactsection'> 
            <Container>
                <Row>
                    <Col lg={{ span: 6, offset: 4}} md={{ span: 8, offset: 4}}>
                        <div className='form'>
                            <h3 className="subtitle">Lets start a project together</h3>
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
