/* eslint-disable @next/next/no-img-element */
'use client'
import Link from 'next/link'
import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Footer() {
  return (
    <>
       <section className="footer-section">
          <Container>
            <Row className="align-items-center upperfooter">
              <Col lg={3} md={3}>
                <div className="footer-content">
                  <a className="footer-logo" href="#"><img src="/assets/images/logo.png" width={190} height={70} alt="" /></a>
                  <p>We are an agency that embraces change and delivers above expectations. We provide a wide range of services that are tailored to your unique needs.</p>
                  <ul>
                    <li>
                      <a target="_blank" href="https://www.facebook.com/asteriksdigital"><img src="/assets/images/facebook.png" width={70} height={70} alt="" /></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://twitter.com/AsteriksDigital"><img src="/assets/images/twitter.png" width={70} height={70} alt="" /></a>
                    </li>
                    <li>
                      <a target="_blank" href="https://www.linkedin.com/company/asteriks-digital-experts"><img src="/assets/images/linkedin.png" width={70} height={70} alt="" /></a>
                    </li>
                  </ul>
                </div>
              </Col>
              <Col lg={9} md={9}>
                <div className="row">
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>What We Do</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><a href="#">Web Design</a></li>
                        <li><a href="#">App Design</a></li>
                        <li><a href="#">Social Media Manage</a></li>
                        <li><a href="#">Market Analysis Project</a></li>
                      </ul>
                    </div>
                  </div>
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>Company</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><Link href="/about">About Us</Link></li>
                        <li><Link href="/career">Career</Link></li>
                        <li><Link href="#">Become Investor</Link></li>
                      </ul>
                    </div>
                  </div>
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>Support</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Policy</a></li>
                        <li><a href="#">Business</a></li>
                      </ul>
                    </div>
                  </div>
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>Contact</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><a href="#">WhatsApp</a></li>
                        <li><a href="#">Support 24</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </Col>
            </Row>
            <Row className="justify-content-center text-center lowerfooter"><p className="credit">Copyright © 2023 Asteriks Digital</p></Row>
          </Container>
      </section>
    </>
  )
}
