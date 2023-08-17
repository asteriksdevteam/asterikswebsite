'use client'
import React from 'react'
import { Container,Row, Col } from 'react-bootstrap'

export default function Cta() 
{
  return (
    <>
        <section className='calltoaction-section calltoaction-section2'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={8} xs={12}>
                        <h2 className='title'>Building digital products and we are just getting started!</h2>
                        <div className='mt-5'><a className="orangebtn" href="#">Start a Project</a></div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
