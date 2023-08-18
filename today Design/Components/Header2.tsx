/* eslint-disable @next/next/no-img-element */
"use client"
"use strict";
import React, { useState, useEffect } from "react";
import { Container, Row, Nav } from "react-bootstrap";
import Link from "next/link";
import Navbar from "react-bootstrap/Navbar";
import NavDropdown from "react-bootstrap/NavDropdown";
import Offcanvas from "react-bootstrap/Offcanvas";

interface Category {
id: number;
name: string;
sub_category?: SubCategory[];
}

interface SubCategory {
id: number;
category_id: number;
name: string;
}

function OffcanvasExample() {
const targetExpand = "lg";

const [data, setData] = useState<Category[]>([]);
const [loading, setLoading] = useState(true);

useEffect(() => {
    setLoading(true);

    fetch(`https://asteriksdigital.com/admin/api/getServices/1/1`)
     .then(async (res) => {
        if (!res.ok) {
         throw new Error("Network response was not ok");
        }
        const todo1 = await res.json();
        setData(todo1);
     })
     .catch((e) => {
        console.error(e.message);
     })
     .finally(() => {
        setLoading(false);
     });
}, []);

return (
    <>
     <header className="desktopmenu">
        <Navbar expand={targetExpand}>
         <Container>
                <Navbar.Brand href="/" className='whitelogo'> <img src='/assets/images/whitelogo.svg' width={140} height={50} alt='' /> </Navbar.Brand>
                <Navbar.Brand href="/" className='logo'><img src='/assets/images/logo.svg' width={140} height={50} alt='' /></Navbar.Brand>
            <Navbar.Toggle
             aria-controls={`offcanvasNavbar-expand-${targetExpand}`}
            />
            <Navbar.Offcanvas
             id={`offcanvasNavbar-expand-${targetExpand}`}
             aria-labelledby={`offcanvasNavbarLabel-expand-${targetExpand}`}
             placement="end"
            >
             <Offcanvas.Header closeButton>
                <Offcanvas.Title
                 id={`offcanvasNavbarLabel-expand-${targetExpand}`}
                >
                 <Navbar.Brand href="/" className="whitelogo">
                    <img
                     src="/assets/images/logo.svg"
                     width={140}
                     height={50}
                     alt=""
                    />
                 </Navbar.Brand>
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
                     <Container>
                        <Row className="justify-content-between">
                         {data.map((categoryData) => (
                            <div
                             key={categoryData.id}
                             className="col-12 col-sm-4 col-md-2 py-4"
                            >
                             <div className="menu-widget">
                                {categoryData.name}
                             </div>
                             <div className="menu-content mt-3">
                                <ul>
                                 {categoryData.sub_category &&
                                    categoryData.sub_category.map((item) =>
                                     item.category_id === categoryData.id ? (
                                        <li key={item.id}>
                                         <Link
                                            className="dropdown-item"
                                            href="{`/service/${item.id}`}"
                                         >
                                            {item.name}
                                         </Link>
                                        </li>
                                     ) : null
                                    )}
                                </ul>
                             </div>
                            </div>
                         ))}
                        </Row>
                     </Container>
                    </div>
                 </NavDropdown>
                 <Link href="/career">Careers</Link>
                 <Link href="/contact">Contact</Link>
                 {/* <Link href="#">+92 320-095-0682</Link> */}
                 <Link href="#" className="estimate">
                    Estimate Project
                 </Link>
                </Nav>
             </Offcanvas.Body>
            </Navbar.Offcanvas>
         </Container>
        </Navbar>
     </header>

     <style>
        {`
         .estimate {
            padding: 16px 40px;
            background: #F2735B;
            border-radius: 100px;
            color: #fff;
         }
         .desktopmenu .nav-link:last-child {
            margin-right: 0px;
         }
         .dropdown-toggle::after {
            display: none;
         }
         .offcanvas-body a {
            color: #000 !important;
            margin-bottom: 10px !important;
            margin-right: 0px !important;
         }
         .servicelink a {
            color: #000 !important;
            margin-bottom: 0px !important;
            margin-right: 0px !important;
         }
         .desktopmenu a {
            color: #fff !important;
            margin-bottom: 0px !important;
            margin-right: 20px !important;
         }
        `}
     </style>
    </>
);
}

export default OffcanvasExample;