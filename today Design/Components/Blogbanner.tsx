'use client'
import React from 'react'
import {Container,Row, Col} from 'react-bootstrap'

export default function Blogbanner() 
{
  return (
    <>
        <section className='blogbanner'>
            <Container className='containercenter'>
                <Row>
                    <Col lg={12}>
                        <div className='blogcontent'>
                            <h1 className='bannerheading'>Build you careers with us</h1>
                            <p className='bannertext'>You’ll be part of an inclusive and diverse team, and you’ll receive the training you need to help keep you and us greater than.</p>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
