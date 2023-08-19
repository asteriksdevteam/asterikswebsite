/* eslint-disable @next/next/no-img-element */
'use client'
import Link from 'next/link';
import { useState } from 'react';
import {Container, Row, Col, Modal, Button} from 'react-bootstrap'
import Carousel from 'react-bootstrap/Carousel';
import OwlCarousel from 'react-owl-carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import dynamic from 'next/dynamic';

export default function Homebanner() 
{

  const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

  const OwlCarousel = dynamic(() => import('react-owl-carousel'), {
    ssr: false, // Disable server-side rendering
  });

  const mainbanner=
  [
    {
      items: 1,
      loop: false,
      autoplay: false,
      nav: false,
      dots: false,
      animateOut: 'fadeOut',
      indicators:false,
      interval: false,
      Responsive:
      {
        0:{
          items:1
        },
        600:{
          items:2
        },
        1000:{
          items:4
        }
      }
    }
  ]

  
  return (
    <>
         <section className='homebanner'>
          <Container fluid className='p-0'>
            <Row className='m-0'>
              <Carousel indicators={false} className='homeslider owl-theme' {...mainbanner}>
                <Carousel.Item className='item'>
                  <div className='item-slider'>
                    <Container className='containercenter'>
                        <Row className='m-0 mobilecenter'>
                          <Col lg={8} xs={12}>
                            <div className='homebanner-cnt homebanner-tabcnt '>
                              <h1 className='bannerheading'>A One-Stop Shop For Your Digital Solutions Requirements</h1>
                                <p className='bannertext'>Asteriks Digital has a suite of digital services that provide solutions to your unique requirements. We have proactive leaders and innovative technologies to help you achieve your strategic digital business goals.</p>
                              <div>
                                <Link href='#' className='orangebtn' onClick={handleShow}>
                                  Let’s Talk
                                </Link>
                              </div>
                            </div>
    
                          </Col>
                        </Row>
                    </Container>
                  </div>
                </Carousel.Item>
                <Carousel.Item className='item'>
                  <div className='item-slider2'>
                    <Container className='containercenter'>
                        <Row className='m-0 mobilecenter'>
                        <Col lg={8} xs={12}>
                              <div className='homebanner-cnt homebanner-tabcnt  '>
                                <h1 className='bannerheading'>Website Design and Development with Expansion in Mind</h1>
                                <p className='bannertext'>If you want your website to stand out from the crowd, hire a professional designer. With Asteriks Digital, your ideas will be transformed into a visually stunning website that attracts the right audience, leading to higher conversion rates, more sales, and explosive expansion.</p>                          
                              <div>
                                <Link href='#' className='orangebtn' onClick={handleShow}>
                                  Let’s Talk
                                </Link>
                              </div>
                              </div>
                          </Col>
                        </Row>
                    </Container>
                  </div>
                </Carousel.Item>
                <Carousel.Item className='item'>
                  <div className='item-slider3'>
                    <Container className='containercenter'>
                        <Row className='m-0 mobilecenter'>
                        <Col lg={8} xs={12}>
                              <div className='homebanner-cnt homebanner-tabcnt '>
                                <h1 className='bannerheading'>We provide premier mobile app development</h1>
                                <p className='bannertext'>We cover every base when it comes to application development and maintenance. Whether its a consumer-facing app or an enterprise-level game-changer, the company handles every step of the mobile app development process, from initial conception to final release and beyond.</p>                          
                                <div>
                                <Link href='#' className='orangebtn' onClick={handleShow}>
                                  Let’s Talk
                                </Link>
                              </div>
                              </div>
                          </Col>
                        </Row>
                    </Container>
                  </div>
                </Carousel.Item>
              </Carousel>
            </Row>
          </Container>
        </section>

        <Modal show={show} onHide={handleClose}>
        <Modal.Header closeButton className='cmodal-header'>
          <Modal.Title>Apply For An Opening Position Now</Modal.Title>
        </Modal.Header>
        <Modal.Body>
            <div className='modal-cform'>
              <form action="#">
                  <Row className='gx-3'>
                      <Col lg={6}>
                          <input type="text" placeholder='Name*' className='form-control' required/>
                      </Col>
                      <Col lg={6}>
                          <input type="text" placeholder='Email*' className='form-control' required/>
                      </Col>
                  </Row>
                  <Row className='gx-3'>
                      <Col lg={6}>
                          <input type="text" placeholder='phone*' className='form-control' required/>
                      </Col>
                      <Col lg={6}>
                          <select className='form-select form-control'>
                              <option disabled>select position</option>
                              <option>frontend</option>
                              <option>backtend</option>
                              <option>html</option>
                          </select>
                      </Col>
                  </Row>
                  <Col lg={12}>
                      <textarea  rows={7} className='form-control' placeholder='summary'></textarea>
                  </Col>
                  <Row className='mt-3 justify-content-center'>
                      <button type='submit' className='orangebtn'>submit</button>
                  </Row>
              </form>
            </div>
        </Modal.Body>
      </Modal>
        
    </>
  )
}
