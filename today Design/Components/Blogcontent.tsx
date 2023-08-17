/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'
import Link from 'next/link'

export default function Blogcontent() 
{

  return (
    <>
        <section>
            <Container>
                <Row>
                    <Col lg={12}>
                        <h6>UI Design. 25-March-2023</h6>
                        <h2 className='title'>Ways of lying to yourself about your new relationship.</h2>
                        <p>Crafting new bright brands, unique visual systems and digital experience focused on a wide range of original collabs.</p>
                        <img src='/assets/images/blogcontent1.png' className='blogcontent' alt=''/>
                        <p>We love to bring designs to life as a developer, and I aim to do this using whatever front end tools are necessary. My preferred tools are more modern JavaScript libraries like React.js but I like to use whatever is best for the websites needs. There are several reasons why a business would consider a rebrand and it doesn’t necessarily mean the business has been unsuccessful.</p>
                        <p>But in order that you may see whence all this born error of those who accuse pleasure and praise pain, I will open the whole matter, and explain the very things which were said by that discoverer of truth and, as it were, the architect of a happy life.</p>
                   
                   
                    </Col>
                </Row>
                <Row className='mt-3'>
                <img src='/assets/images/blogcontent2.png' className='blogcontent' alt=''/>
                </Row>
                <Row>
                    <h3 className='subtitle'>JavaScript</h3>
                    <p>We love to bring designs to life as a developer, and I aim to do this using whatever front end tools are necessary. My preferred tools are more modern javascript libraries like React.js but I like to use whatever is best for the websites needs. There are several reasons why a business would consider a rebrand and it doesn’t necessarily mean the business has been unsuccessful.</p>

                    <h3 className='subtitle'>Fremework</h3>
                    <p>Always ready to push the boundaries, especially when it comes to our own platform, Our analytical eye to create a site that was visually engaging and also optimised for maximum performance. It also perfectly reflects the journey to help it tell a story to increase its understanding and drive action. To create a site that was visually engaging for maximum performance.</p>
                    <ul className='blogdetail-list'>
                        <li>Brand Development</li>
                        <li>UX/UI Design</li>
                        <li>Front-end Development</li>
                        <li>Copywriting</li>
                        <li>Shopify Development</li>
                    </ul>
                </Row>
                <Row>
                    <h3 className='subtitle'>Visual Studio</h3>
                    <p>Just like other pseudo-elements and pseudo-class selectors, :not() can be chained with other pseudo-classes and pseudo-elements. For example, the following will add a “New!” word to list items that do not have a .old class name, using the ::after pseudo-element:</p>
                    <img src='/assets/images/blogcontent3.png' className='blogcontent' alt=''/>
                </Row>
            </Container>
        </section>

        <section className='blogarticle'>
            <Container>
                <Row className='mt-3'>

                    <h2 className='title'>Related Articles</h2>

                    <Col lg={4} md={6}>
                        <div className='card blogcard'>
                            <img src='/assets/images/blog04.png'  alt='' />
                            <div className='blogcard-body'>
                                <p>UI Design. 15-March-2023</p>
                                <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                <Link href='/blogdetails'>read more</Link>
                            </div>
                        </div>
                    </Col>
                    <Col lg={4} md={6}>
                        <div className='card blogcard'>
                            <img src='/assets/images/blog08.png'  alt='' />
                            <div className='blogcard-body'>
                                <p>UI Design. 15-March-2023</p>
                                <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                <Link href='/blogdetails'>read more</Link>
                            </div>
                        </div>
                    </Col>
                    <Col lg={4} md={6}>
                        <div className='card blogcard'>
                            <img src='/assets/images/blog06.png'  alt='' />
                            <div className='blogcard-body'>
                                <p>UI Design. 15-March-2023</p>
                                <h3 className='subtitle'>Ways of lying to yourself about your new relationship.</h3>
                                <Link href='/blogdetails'>read more</Link>
                            </div>
                        </div>
                    </Col>

                </Row>
            </Container>
        </section>
    </>
  )
}
