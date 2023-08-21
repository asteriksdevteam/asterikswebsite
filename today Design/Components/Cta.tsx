'use client'
import { useState } from 'react';
import { Container,Row, Col, Modal, Button } from 'react-bootstrap'
import Link from 'next/link'

export default function Cta() 
{
    const [show, setShow] = useState(false);

    const handleClose = () => setShow(false);
    const handleShow = () => setShow(true);

  return (
    <>
        <section className='calltoaction-section calltoaction-section2'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={8} xs={12}>
                        <h2 className='title'>Try Us For Your New Project</h2>
                        <div className='mt-5'><Link className="orangebtn" href="#" onClick={handleShow}>Start a Project</Link></div>
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
