/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useState, useEffect } from 'react';
import Button from 'react-bootstrap/Button';
import {Container, Row} from 'react-bootstrap';
import Link from 'next/link';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import Offcanvas from 'react-bootstrap/Offcanvas';

function OffcanvasExample() {
  
  const targetExpand = 'lg'; 

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
      const header = document.querySelector('.desktopmenu');
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
       <header className='desktopmenu'>
            <Navbar expand={targetExpand}>
                <Container>
                <Navbar.Brand href="/" className='whitelogo'> <img src='/assets/images/whitelogo.svg' width={140} height={50} alt='' /> </Navbar.Brand>
                <Navbar.Brand href="/" className='logo'><img src='/assets/images/logo.svg' width={140} height={50} alt='' /></Navbar.Brand>
                <Navbar.Toggle aria-controls={`offcanvasNavbar-expand-${targetExpand}`} />
                <Navbar.Offcanvas
                    id={`offcanvasNavbar-expand-${targetExpand}`}
                    aria-labelledby={`offcanvasNavbarLabel-expand-${targetExpand}`}
                    placement="end"
                >
                    <Offcanvas.Header closeButton>
                    <Offcanvas.Title id={`offcanvasNavbarLabel-expand-${targetExpand}`}>
                    <Navbar.Brand href="/" className='whitelogo'><img src='/assets/images/logo.svg' width={140} height={50} alt='' /></Navbar.Brand>
                    </Offcanvas.Title>
                    </Offcanvas.Header>
                    <Offcanvas.Body>
                    <Nav className="justify-content-end align-items-center flex-grow-1 pe-3">
                        <Link href="/">Home</Link>
                        <Link href="/about">About</Link>
                        <NavDropdown
                        title="Service" 
                        id={`offcanvasNavbarDropdown-expand-${targetExpand}`}
                        >

                            <div className="mega-content px-4">
                                <Container >
                                    <Row className='justify-content-between'>
                                        <div className="col-12 col-sm-4 col-md-2 py-4">
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
                                        </div>
                                        <div className="col-12 col-sm-4 col-md-2 py-4">
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
                                        </div>
                                       
                                        <div className="col-12 col-sm-4 col-md-2 py-4">
                                        <div className='menu-widget'>
                                              <h5>IT Services</h5>
                                          </div>
                                          <div className='menu-content mt-3'>
                                            <ul>
                                              <li><Link className="dropdown-item" href="#">Hosting</Link></li>
                                              <li><Link className="dropdown-item" href="#">IT Consultation and <br/>  Implementation</Link></li>
                                            </ul>
                                          </div>
                                        </div>
                                        <div className="col-12 col-sm-4 col-md-2 py-4">
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
                                        </div>
                                        <div className="jumbotron col-12 col-sm-4 col-md-2 py-4">
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
                                        </div>
                                    </Row>
                                </Container>
                            </div>

                        </NavDropdown>
                        <Link href="/career">Careers</Link>
                        {/* <Link href="/blog">Blog</Link> */}
                        <Link href="/contact">contact</Link>
                        <Link href="#">+92 320-095-0682</Link>
                        <Link href="#" className='estimate'>Estimate Project</Link>
                    </Nav>
                    
                    </Offcanvas.Body>
                </Navbar.Offcanvas>
                </Container>
            </Navbar>
       </header>

       {
        <style>
          {`
            .estimate
            {
                padding: 16px 40px;
                background:#F2735B;
                border-radius: 100px;
                color:#fff;
               
            }
            .desktopmenu .nav-link:last-child
            {
              margin-right:0px;
            }
            .dropdown-toggle::after
            {
              display:none;
            }
          `}
        </style>
       }
    </>
  );
}

export default OffcanvasExample;
