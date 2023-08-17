/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useState, useEffect } from 'react';
import Image from 'next/image'
import Link from 'next/link'
import { Container, Row, Col } from 'react-bootstrap'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faAngleDown, faBars, faTimes } from '@fortawesome/free-solid-svg-icons';

export default function Header() 
{

  const [isToggled, setIsToggled] = useState(false);

  const handleToggleClick = () => {
    setIsToggled(!isToggled);
  };

  const handleMobileMenuItemClick = (e: React.MouseEvent) => {
    e.stopPropagation();
  };

  const [isMenuOpen, setMenuOpen] = useState(false);

  useEffect(() => {
    const handleScroll = () => {
      const header = document.querySelector('.desktop-menu');
      if (header) {
        if (typeof window !== 'undefined' && window.scrollY > 0) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      }
    };

    if (typeof window !== 'undefined') {
      window.addEventListener('scroll', handleScroll);

      return () => {
        window.removeEventListener('scroll', handleScroll);
      };
    }
  }, []);

  return (
    <>
         <header className={`desktop-menu ${isToggled ? 'mobile-menu-open' : ''}`}>
        <Container>
          <nav>
            
            <Link href='#' className='whitelogo'><img src='/assets/images/whitelogo.png' width={140} height={73} alt='' /></Link>
            <Link href='#' className='logo'><img src='/assets/images/logo.png' width={140} height={73} alt='' /></Link>
            
            <div className='toggle' onClick={handleToggleClick}>
              {isToggled ? (
                <div className='mobile-menu' onClick={handleMobileMenuItemClick}>
                  <Container>
                    <nav>
                      <img src='/assets/images/logo.png' className='logo' width={140} height={70} alt='' />
                      <div className='toggle'>
                        <FontAwesomeIcon icon={faTimes} onClick={handleToggleClick} />
                      </div>
                      <div className='collapse-menu'>
                        <ul>
                          <li><Link href='/'>home </Link></li>
                          <li><Link href='/about'>about </Link></li>
                          <li className="custom-dropdown"><Link href='/service'>service </Link> 
                          <div className="customdropdown-menu">
                                <Container>
                                  <Row>
                                  <Col lg={9} md={9}>
                                      <Row>
                                        <Col lg={3} md={3}>
                                          <div className='menu-widget'>
                                              <h5> Digital Marketing</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="/service">SEO</Link></li>
                                              <li><Link className="dropdown-item" href="/service">PPC</Link></li>
                                              <li><Link className="dropdown-item" href="/service">Social Media Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="/service">Search Engine Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="/service">Video Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">E-Commerce Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Content Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Email Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Small Business SEO</Link></li>
                                              <li><Link className="dropdown-item" href="#">Local SEO</Link></li>
                                              <li><Link className="dropdown-item" href="#">Google ADS</Link></li>
                                            </ul>
                                          </div>
                                        </Col>
                                        <Col lg={3} md={3}>
                                          <div className='menu-widget'>
                                              <h5>Content Services</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                            <li><Link className="dropdown-item" href="#">Articles Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Blog Management</Link></li>
                                              <li><Link className="dropdown-item" href="#">Premium Web Copywriting</Link></li>
                                              <li><Link className="dropdown-item" href="#">Web Content Services</Link></li>
                                              <li><Link className="dropdown-item" href="#">E-book Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Book Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Guest Blog Writing & Publishing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Business Plan Writing Packages</Link></li>
                                              <li><Link className="dropdown-item" href="#">Custom Online Press Release Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Online Presentation</Link></li>
                                              <li><Link className="dropdown-item" href="#">Business Proposal Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Newsletter</Link></li>
                                              <li><Link className="dropdown-item" href="#">Recommendation Letter & Biography</Link></li>
                                              <li><Link className="dropdown-item" href="#">Speech Writing</Link></li>
                                            </ul>
                                          </div>
                                        </Col>
                                        <Col lg={3} md={3}>
                                        <div className='menu-widget'>
                                              <h5>IT Services</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="#">Hosting</Link></li>
                                              <li><Link className="dropdown-item" href="#">IT Consultation and <br/>  Implementation</Link></li>
                                            </ul>
                                          </div>
                                        </Col>
                                        <Col lg={3} md={3}>
                                          <div className='menu-widget'>
                                              <h5>Design & Development</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="#">Website Development</Link></li>
                                              <li><Link className="dropdown-item" href="#">Mobile App Development</Link></li>
                                              <li><Link className="dropdown-item" href="#">Creative Logo Design</Link></li>
                                              <li><Link className="dropdown-item" href="#">Website Template Design</Link></li>
                                              <li><Link className="dropdown-item" href="#">Mobile App UI UX</Link></li>
                                              <li><Link className="dropdown-item" href="#">Branding</Link></li>
                                            </ul>
                                            
                                          </div>
                                        </Col>
                                      </Row>
                                  </Col>
                                    <Col lg={3} md={3} className='jumbotron'>
                                      <div className='jumbotron-content'>
                                      <div className='menu-widget'>
                                          <h5>How we work</h5>
                                      </div>
                                      <div className='menu-content mt-5'>
                                          <ul>
                                              <li><h5>Discovery</h5>
                                              <p>Exploring project requirements</p></li>
                                              
                                              <li><h5>Design</h5>
                                              <p>Intuitive and engaging designs</p></li>
                                              
                                              <li><h5>Development</h5>
                                              <p>Agile development processes</p></li>

                                              <li><h5>Testing</h5>
                                              <p>Incremental testing and QA</p></li>

                                              <li><h5>Deployment</h5>
                                              <p>Full-function product delivery</p></li>
                                          </ul>
                                      </div>
                                      </div>
                                    </Col>
                                  </Row>
                                </Container>
                          </div>
                          </li>
                          <li><Link href='/career'>careers </Link></li>
                          <li><Link href='/blog'>blog </Link></li>
                          <li><Link href='/contact'>contact </Link></li>
                          <li><Link href='#'>+92 320-095-0682 </Link></li>
                          <li><Link href='#'>Estimate Project </Link></li>
                        </ul>
                      </div>
                    </nav>
                  </Container>
                </div>
              ) : (
                <FontAwesomeIcon icon={faBars} className='bars'/>
              )}
            </div>
            <div className='collapse-menu'>
              <ul>
                    <li><Link href='/'>home </Link></li>
                    <li><Link href='/about'>about </Link></li>
                    <li className="custom-dropdown"><Link href='/service'>service </Link>
                        <div className="customdropdown-menu">
                                <Container>
                                  <Row>
                                  <Col lg={9} md={9}>
                                      <Row>
                                        <Col lg={3} md={3}>
                                          <div className='menu-widget'>
                                              <h5>Digital Marketing</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="/service">SEO</Link></li>
                                              <li><Link className="dropdown-item" href="/service">PPC</Link></li>
                                              <li><Link className="dropdown-item" href="/service">Social Media Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="/service">Search Engine Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="/service">Video Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">E-Commerce Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Content Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Email Marketing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Small Business SEO</Link></li>
                                              <li><Link className="dropdown-item" href="#">Local SEO</Link></li>
                                              <li><Link className="dropdown-item" href="#">Google ADS</Link></li>
                                            </ul>
                                          </div>
                                        </Col>
                                        <Col lg={3} md={3}>
                                          <div className='menu-widget'>
                                              <h5>Content Services</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                            <li><Link className="dropdown-item" href="#">Articles Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Blog Management</Link></li>
                                              <li><Link className="dropdown-item" href="#">Premium Web Copywriting</Link></li>
                                              <li><Link className="dropdown-item" href="#">Web Content Services</Link></li>
                                              <li><Link className="dropdown-item" href="#">E-book Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Book Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Guest Blog Writing & Publishing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Business Plan Writing Packages</Link></li>
                                              <li><Link className="dropdown-item" href="#">Custom Online Press Release Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Online Presentation</Link></li>
                                              <li><Link className="dropdown-item" href="#">Business Proposal Writing</Link></li>
                                              <li><Link className="dropdown-item" href="#">Newsletter</Link></li>
                                              <li><Link className="dropdown-item" href="#">Recommendation Letter & Biography</Link></li>
                                              <li><Link className="dropdown-item" href="#">Speech Writing</Link></li>
                                            </ul>
                                          </div>
                                        </Col>
                                        <Col lg={3} md={3}>
                                        <div className='menu-widget'>
                                              <h5>IT Services</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="#">Hosting</Link></li>
                                              <li><Link className="dropdown-item" href="#">IT Consultation and <br/>  Implementation</Link></li>
                                            </ul>
                                          </div>
                                        </Col>
                                        <Col lg={3} md={3}>
                                          <div className='menu-widget'>
                                              <h5>Design & Development</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="#">Website Development</Link></li>
                                              <li><Link className="dropdown-item" href="#">Mobile App Development</Link></li>
                                              <li><Link className="dropdown-item" href="#">Creative Logo Design</Link></li>
                                              <li><Link className="dropdown-item" href="#">Website Template Design</Link></li>
                                              <li><Link className="dropdown-item" href="#">Mobile App UI UX</Link></li>
                                              <li><Link className="dropdown-item" href="#">Branding</Link></li>
                                            </ul>
                                            
                                          </div>
                                        </Col>
                                      </Row>
                                  </Col>
                                    <Col lg={3} md={3} className='jumbotron'>
                                      <div className='jumbotron-content'>
                                      <div className='menu-widget'>
                                          <h5>How we work</h5>
                                      </div>
                                      <div className='menu-content mt-5'>
                                          <ul>
                                              <li><h5>Discovery</h5>
                                              <p>Exploring project requirements</p></li>
                                              
                                              <li><h5>Design</h5>
                                              <p>Intuitive and engaging designs</p></li>
                                              
                                              <li><h5>Development</h5>
                                              <p>Agile development processes</p></li>

                                              <li><h5>Testing</h5>
                                              <p>Incremental testing and QA</p></li>

                                              <li><h5>Deployment</h5>
                                              <p>Full-function product delivery</p></li>
                                          </ul>
                                      </div>
                                      </div>
                                    </Col>
                                  </Row>
                                </Container>
                        </div>
                    </li>
                    <li><Link href='/career'>careers </Link></li>
                    <li><Link href='/blog'>blog </Link></li>
                    <li><Link href='/contact'>contact </Link></li>
                    <li><Link href='#'>+92 320-095-0682 </Link></li>
                    <li><Link href='#'>Estimate Project </Link></li>
              </ul>
            </div>
          </nav>
        </Container>
      </header>  
    </>
  )
}
