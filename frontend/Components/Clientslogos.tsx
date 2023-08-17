'use client'
/* eslint-disable @next/next/no-img-element */
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'
import OwlCarousel from 'react-owl-carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import dynamic from 'next/dynamic';

export default function Clientslogos() 
{

  const OwlCarousel = dynamic(() => import('react-owl-carousel'), {
    ssr: false, // Disable server-side rendering
  });


     const clientlogos = 
  {
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
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
    
    <section className='clientlogos-section'>
          <Container>
            <Row className='align-items-center'>
                  <Col lg={6} md={6} xs={6}>
                    <div className='clientlogos-leftcontent'>
                      <p>Trusted by</p>
                    </div>
                  </Col>
                  <Col lg={6} md={6} xs={6}>
                    <OwlCarousel className='' {...clientlogos}>
                          <div className='item'>
                              <img src='/assets/images/icon/brands/amazon.svg' className='cw' alt=''/>
                          </div>
                          <div className='item'>
                              <img src='/assets/images/icon/brands/boston-pizzas.svg' className='cw' alt=''/>
                          </div>
                          <div className='item'>
                              <img src='/assets/images/icon/brands/brock-university.svg' className='cw' alt=''/>
                          </div>
                          <div className='item'>
                              <img src='/assets/images/icon/brands/google.svg' className='cw' alt=''/>
                          </div>
                          <div className='item'>
                              <img src='/assets/images/icon/brands/Rogers_Communications.svg' className='cw' alt=''/>
                          </div>
                          <div className='item'>
                              <img src='/assets/images/icon/brands/walmart.svg' className='cw' alt=''/>
                          </div>
                    </OwlCarousel>
                  </Col>
                </Row>
          </Container>
        </section>

    </>
  )
}
