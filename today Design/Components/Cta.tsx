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
