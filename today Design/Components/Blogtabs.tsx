/* eslint-disable @next/next/no-img-element */
'use client'
import Link from 'next/link'
import React from 'react'
import { Container, Row, Col, Tabs, Tab } from 'react-bootstrap'

export default function Blogtabs() {
  return (
    <>
        <section className='blogtabs-section'>
            <Container>
                <Row>
                    <Tabs className='blogtabs' defaultActiveKey='all'>
                        <Tab eventKey='all' title='all'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog05.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog06.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='blog' title='blog'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog05.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                               
                            </Row>
                        </Tab>
                        <Tab eventKey='business' title='business'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab> 
                        <Tab eventKey='mobile' title='mobile'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab> 
                        <Tab eventKey='product' title='product'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab> 
                        <Tab eventKey='machine' title='machine'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='learning' title='learning'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>

                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog04.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab> 
                        <Tab eventKey='management' title='management'>
                            <Row>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog001.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog02.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                                <Col lg={4} md={6}>
                                    <div className='card blogcard'>
                                        <img src='/assets/images/blog03.png'  alt='' />
                                        <div className='blogcard-body'>
                                            <p>UI Design. 15-March-2023</p>
                                            <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                            <Link href='/blogdetails'>read more</Link>
                                        </div>
                                    </div>
                                </Col>
                            </Row>
                        </Tab>                     
                    </Tabs>
                </Row>
                <Row className='mt-4 justify-content-center text-center'>
                    <div className='dlink'><Link className="orangebtn blogbtn" href="#">submit</Link></div>
                </Row>
            </Container>
        </section>
    </>
  )
}
