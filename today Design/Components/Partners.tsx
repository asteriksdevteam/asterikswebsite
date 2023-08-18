/* eslint-disable @next/next/no-img-element */
'use client'
import React from 'react'
import { Container, Row, Col } from 'react-bootstrap'
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import dynamic from 'next/dynamic';

export default function Partners() 
{
    const OwlCarousel = dynamic(() => import('react-owl-carousel'), {
        ssr: false, // Disable server-side rendering
      });

    const partners = 
    {
      loop: true,
      autoplay: true,
      autoplayTimeout: 5000,
      margin:0,
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
    <section className='partners-section'>
        <Container>
            <Row className='justify-content-center text-center'>
                <Col lg={8} xs={12}>
                    <h2 className='title'>Partnering With Tech Leaders Worldwide</h2>
                </Col>
            </Row>
            <Row className='mt-2'>
                <OwlCarousel className='awards-carousel owl-theme' {...partners}>
                   <div className='item'>
                        <img src='/assets/images/partnerlogo1.png' className='partner' alt=''/>
                   </div>
                    <div className='item'>
                        <img src='/assets/images/partnerlogo2.png' className='partner' alt=''/>
                    </div>
                    <div className='item'>
                        <img src='/assets/images/partnerlogo3.png' className='partner' alt=''/>
                    </div>
                    <div className='item'>
                        <img src='/assets/images/partnerlogo4.png' className='partner' alt=''/>
                    </div>
                </OwlCarousel>
            </Row>
        </Container>
    </section>
    </>
  )
}
