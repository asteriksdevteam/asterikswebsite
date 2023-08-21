'use client'

import { useState } from 'react';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { Container, Row, Col, Modal } from 'react-bootstrap'
import Link from 'next/link'
import { faArrowRight } from '@fortawesome/free-solid-svg-icons'

export default function Blogsection() {

    const [show, setShow] = useState(false);

  const handleClose = () => setShow(false);
  const handleShow = () => setShow(true);

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
                                                    <Link href='#' onClick={handleShow}>Let’s Talk <FontAwesomeIcon icon={faArrowRight} className='arrowright' /></Link>
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
                                        <Link href='#' onClick={handleShow}>Let’s Talk <FontAwesomeIcon icon={faArrowRight} className='arrowright'/></Link>
                                    </div>
                                </div>
                            </Col>
                        </Row>
                    </Col>
                </Row>
            </Container>
        </section>

        <Modal show={show} onHide={handleClose} centered>
        <Modal.Header closeButton className='cmodal-header'>
          <Modal.Title>Lets start a project together</Modal.Title>
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
                          <input type="text" placeholder='Phone*' className='form-control' required/>
                      </Col>
                      <Col lg={6}>
                          <select className='form-select form-control'>
                              <option disabled>Select Service</option>
                              <option>SEO</option>
                              <option>PPC</option>
                              <option>Social Media Marketing</option>
                              <option>Search Engine Marketing</option>
                              <option>Video Marketing</option>
                              <option>E-Commerce Marketing</option>
                              <option>Content Marketing</option>
                              <option>Email Marketing</option>
                              <option>Small Business SEO</option>
                              <option>Local SEO</option>
                              <option>Google ADS</option>
                              <option>Articles Writing</option>
                              <option>Blog Management</option>
                              <option>Premium Web Copywriting</option>
                              <option>Web Content Services</option>
                              <option>E-Book Writing</option>
                              <option>Book Writing</option>
                              <option>Guest Blog Writing & Publishing</option>
                              <option>Business Plan Writing Packages</option>
                              <option>Custom Online Press Release Writing</option>
                              <option>Online Presentation</option>
                              <option>Business Proposal Writing</option>
                              <option>Newsletter</option>
                              <option>Speech Writing</option>
                              <option>SOP & LOR & Biography</option>
                              <option>Hosting</option>
                              <option>Consultation & Implementation</option>
                              <option>Website Development</option>
                              <option>Mobile App Development</option>
                              <option>Creative Logo Design</option>
                              <option>Website Template Design</option>
                              <option>Mobile App UI UX</option>
                              <option>Branding</option>

                          </select>
                      </Col>
                  </Row>
                  <Col lg={12}>
                      <textarea  rows={7} className='form-control' placeholder='Summary'></textarea>
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
