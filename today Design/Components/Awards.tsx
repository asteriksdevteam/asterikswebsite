/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'
import OwlCarousel from 'react-owl-carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import dynamic from 'next/dynamic';

export default function Awards() 
{

    const OwlCarousel = dynamic(() => import('react-owl-carousel'), {
        ssr: false, // Disable server-side rendering
      });

    const awardsbanner = 
  {
    loop: true,
    autoplay: true,
    autoplayTimeout: 5000,
    margin:20,
    responsive: {
      0: {
        items: 1, 
      },
      600: {
        items: 2, 
      },
      1000: {
        items: 4,
      },
    },
  };

  return (
    <>
        <section className='awards-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={8}>
                        <h2 className='title'>Awards & Recognitions</h2>
                        <p className='desc'>Recipient of prestigious awards and widespread recognition for excellence in innovation, design, and customer satisfaction, showcasing our commitment to industry leadership.</p>
                    </Col>
                </Row>  
                <Row>
                    <OwlCarousel className='awards-carousel owl-theme' {...awardsbanner}>
                        <div className='item'>
                            <div className='award-item'>
                                <img src="/assets/images/award1.png" className='awardsimg' alt="" />
                                <h3 className='subtitle'>Award No 1</h3>
                                <p>Communication protocols apart from engagement models</p>
                            </div>
                        </div>
                        <div className='item'>
                            <div className='award-item'>
                                <img src="/assets/images/award2.png" className='awardsimg' alt="" />
                                <h3 className='subtitle'>Award No 2</h3>
                                <p>Communication protocols apart from engagement models</p>
                            </div>
                        </div>
                        <div className='item'>
                            <div className='award-item'>
                                <img src="/assets/images/award3.png" className='awardsimg' alt="" />
                                <h3 className='subtitle'>Award No 3</h3>
                                <p>Communication protocols apart from engagement models</p>
                            </div>
                        </div>
                        <div className='item'>
                            <div className='award-item'>
                                <img src="/assets/images/award4.png" className='awardsimg' alt="" />
                                <h3 className='subtitle'>Award No 4</h3>
                                <p>Communication protocols apart from engagement models</p>
                            </div>
                        </div>
                    </OwlCarousel>
                </Row>              
            </Container>
        </section>
    </>
  )
}
