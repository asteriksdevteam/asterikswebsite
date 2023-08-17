'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Process() 
{
  return (
    <>
        <section className='ourprocess-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9}>
                        <h2 className='title'>Our Process</h2>
                        <h3 className='subtitle2 mb-4'> Web Development</h3>
                        <p>Build a web presence thriving with programming tools like Python, Angular, React Native, and renowned cloud website creation services in the USA with creative experts who formulate customized solutions.</p>
                    </Col>
                </Row>
                <Row className='pt-4 mt-5'>
                    <Col lg={4} md={4}>
                        <div className='processbox'>
                            <div className='numberbox'>
                                <h1>01</h1>
                            </div>
                            <ul className='processlist'>
                            <h3 className='subtitle'> Project Planning</h3>
                            <li> Business analysis</li>
                                <li>Documenting specifications</li>
                                <li>Preparing wireframes</li>
                                <li>Getting client approval</li>
                            </ul>
                        </div>
                    </Col>
                    <Col lg={4} md={4}>
                        <div className='processbox'>
                            <div className='numberbox'>
                                <h1>02</h1>
                            </div>
                            <ul className='processlist'>
                            <h3 className='subtitle'>UI/UX Design</h3>
                                    <li>Crafting app prototype</li>
                                    <li>Making changes</li>
                                    <li>Getting client approval</li>
                                    <li>Implementing feedback</li>
                            </ul>
                        </div>
                    </Col>
                    <Col lg={4} md={4}>
                        <div className='processbox processboxlast'>
                            <div className='numberbox'>
                                <h1>03</h1>
                            </div>
                            <ul className='processlist'>
                            <h3 className='subtitle'> Development</h3>
                                <li>Development strategy</li>
                                <li>Testing strategy</li>
                                <li>Product development</li>
                                <li>Product release</li>
                            </ul>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>    
    </>
  )
}
