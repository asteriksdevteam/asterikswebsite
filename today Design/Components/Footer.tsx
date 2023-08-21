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
                  <Link className="footer-logo" href="#"><img src="/assets/images/logo.png" width={190} height={70} alt="" /></Link>
                  <p>We are an agency that embraces change and delivers above expectations. We provide a wide range of services that are tailored to your unique needs.</p>
                  <ul>
                    <li>
                      <Link target="_blank" href="https://www.facebook.com/asteriksdigital"><img src="/assets/images/facebook.png" width={70} height={70} alt="" /></Link>
                    </li>
                    <li>
                      <Link target="_blank" href="https://twitter.com/AsteriksDigital"><img src="/assets/images/twitter.png" width={70} height={70} alt="" /></Link>
                    </li>
                    <li>
                      <Link target="_blank" href="https://www.linkedin.com/company/asteriks-digital-experts"><img src="/assets/images/linkedin.png" width={70} height={70} alt="" /></Link>
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
                        <li><Link href="/service/seo">Digital Marketing</Link></li>
                        <li><Link href="/service/articles-writing">Content Services</Link></li>
                        <li><Link href="/service/hosting">IT Services</Link></li>
                        <li><Link href="/service/website-development">Design & Development</Link></li>
                      </ul>
                    </div>
                  </div>
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>Company</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><Link href="/about">About Us</Link></li>
                        <li><Link href="/career">Career</Link></li>
                        {/* <li><Link href="#">Become Investor</Link></li> */}
                      </ul>
                    </div>
                  </div>
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>Support</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><Link href="/contact">FAQ</Link></li>
                        <li><Link href="/about">Policy</Link></li>
                        <li><Link href="/about">terms & condition</Link></li>
                        {/* <li><Link href="#">Business</Link></li> */}
                      </ul>
                    </div>
                  </div>
                  <div className="col-lg-3 col-md-3">
                    <div className="widget"><h5>Contact</h5></div>
                    <div className="footer-lst">
                      <ul>
                        <li><Link target='_blank' href="https://wa.me/923200950682">WhatsApp</Link></li>
                        <li><Link href="#">Support 24/5</Link></li>
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
