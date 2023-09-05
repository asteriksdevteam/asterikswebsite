/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import { Container, Row, Col, Tabs, Tab } from 'react-bootstrap'

export default function Technologies() 
{
  return (
    <>
        <section className='technologies-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={8} xs={12}>
                        <h2 className='title'>Discover The Power Of Cutting-Edge Technologies!</h2>
                        <p className='desc'>Unleash innovation with our seamless fusion of IT expertise and pioneering marketing strategies. Elevate your business to new heights, harnessing the potential of tomorrow tech today.</p>
                    </Col>
                </Row>
                <Row mt={4} className='justify-content-center text-center'>
                    <Tabs className='technologies-tabs' defaultActiveKey='mobile'>
                        <Tab eventKey='mobile' title='mobile'>
                            <Row>
                                <Col>
                                    <img src='/assets/images/tec1.png' className='tw'   alt='' />
                                    <p className='mt-3 tectext'>Ionic</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec2.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Html5</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec3.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Gradle</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec4.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Digital Ocean</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec5.png'  className='tw' alt='' />
                                    <p className='mt-3 tectext'>Python</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec6.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Fluter</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec7.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Appium</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec8.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Fire Base</p>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='frontend' title='frontend'>
                            <Row>
                                <Col>
                                    <img src='/assets/images/tec1.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Ionic</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec2.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Html5</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec3.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Gradle</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec4.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Digital Ocean</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec5.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Python</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec6.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Fluter</p>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='database' title='database'>
                            <Row>
                                <Col>
                                    <img src='/assets/images/tec1.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Ionic</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec2.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Html5</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec3.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Gradle</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec4.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Digital Ocean</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec5.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Python</p>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='backend' title='backend'>
                            <Row>
                                <Col>
                                    <img src='/assets/images/tec1.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Ionic</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec2.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Html5</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec3.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Gradle</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec4.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Digital Ocean</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec5.png'  className='tw' alt='' />
                                    <p className='mt-3 tectext'>Python</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec6.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Fluter</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec7.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Appium</p>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='cms' title='cms'>
                            <Row>
                                <Col>
                                    <img src='/assets/images/tec1.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Ionic</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec2.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Html5</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec3.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Gradle</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec4.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Digital Ocean</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec5.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Python</p>
                                </Col>
                            </Row>
                        </Tab>
                        <Tab eventKey='infra and devops' title='infra and devops'>
                            <Row>
                                <Col>
                                    <img src='/assets/images/tec1.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Ionic</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec2.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Html5</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec3.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Gradle</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec4.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Digital Ocean</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec5.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Python</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec6.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Fluter</p>
                                </Col>
                                <Col>
                                    <img src='/assets/images/tec7.png' className='tw'  alt='' />
                                    <p className='mt-3 tectext'>Appium</p>
                                </Col>
                            </Row>
                        </Tab>
                    </Tabs>
                </Row>
            </Container>
        </section>
    </>
  )
}
