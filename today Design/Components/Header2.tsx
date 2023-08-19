/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useState, useEffect } from 'react';
import { Container,Row, Col, Modal, Button } from 'react-bootstrap'
import Link from 'next/link';
import Form from 'react-bootstrap/Form';
import Nav from 'react-bootstrap/Nav';
import Navbar from 'react-bootstrap/Navbar';
import NavDropdown from 'react-bootstrap/NavDropdown';
import Offcanvas from 'react-bootstrap/Offcanvas';

interface MenuItem {
  menuItem: string;
  sub_category: { name: string }[];
}

const getAllMenu = async (): Promise<MenuItem[]> => {
  const data = await fetch("https://asteriksdigital.com/admin/api/getServices/1/1");
  const menuAll: MenuItem[] = await data.json();
  return menuAll;
};

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

  const [menuData, setMenuData] = useState<MenuItem[]>([]);
  
  useEffect(() => {
    getAllMenu().then(data => {
      setMenuData(data);
    });
  }, []);

  const [show, setShow] = useState(false);
const handleClose = () => setShow(false);
const handleShow = () => setShow(true);

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
{menuData.map((menuItem) => (
  <div className="col-12 col-sm-4 col-md-2 py-4" key={menuItem.menuItem}>
    <div className='menu-widget'>
      <h5>{menuItem.menuItem}</h5>

    </div>
    <div className='menu-content mt-3'>
      <ul>
        {menuItem.sub_category.map((subItem) => (
          <li key={subItem.name}>
            <Link className="dropdown-item" href="/service">{subItem.name}</Link>
          </li>
        ))}
      </ul>
    </div>
  </div>
))}

  
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
{/* <Link href="#">+92 320-095-0682</Link> */}
<Link href="#" className='estimate' onClick={handleShow}>Estimate Project</Link>
</Nav>

</Offcanvas.Body>
</Navbar.Offcanvas>
</Container>
</Navbar>
      </header>
      {/* ... Rest of your JSX code */}


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
  );
}

export default OffcanvasExample;
