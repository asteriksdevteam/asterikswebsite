'use client'

import React from 'react'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { Container, Row, Col } from 'react-bootstrap'
import Link from 'next/link'
import { faArrowRight } from '@fortawesome/free-solid-svg-icons'

export default function Blogsection() {
  return (
    <>
        <section className='blogsection'>
            <Container>
                <Row>
                    <Col lg={12} >
                        <Row className='gx-0'>
                            <Col lg={8} md={8}>
                                <div className='blog1'>
                                    <Row className='gx-0'>
                                        <Col lg={6} md={6}>
                                                <div className='blog3-content'>
                                                    {/* <h3>Sit lectus tincidunt mi quis nunc</h3> 
                                                    <p>Sit lectus tincidunt mi quis nunc. Ut libero morbi fermentum.</p>
                                                    <Link href='#'>Let’s Talk <FontAwesomeIcon icon={faArrowRight} className='arrowright'/></Link> */}
                                                </div>
                                        </Col>
                                        <Col lg={6} md={6}>
                                            <div className='blog4-content'>
                                                <div className='blog4-innercontent'>
                                                    <p>Build your online presence as it develops like many others have, and let expert technicians and digital producers to create functions that captivate your target audience.</p>
                                                    <Link href='#'>Let’s Talk <FontAwesomeIcon icon={faArrowRight} className='arrowright'/></Link>
                                                </div>
                                            </div>
                                        </Col>
                                    </Row>
                                </div>
                            </Col>
                            <Col lg={4} md={4}>
                                <div className='blog2'>
                                    <div className='blog1-content'>
                                        <p>Asteriks digital turns your ideas into attractive designs, amazing experiences, and tempting brands that capture and amaze your audience.</p>
                                        <Link href='#'>Let’s Talk <FontAwesomeIcon icon={faArrowRight} className='arrowright'/></Link>
                                    </div>
                                </div>
                            </Col>
                        </Row>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
