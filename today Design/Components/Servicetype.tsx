/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useState } from 'react';
import {Container, Row, Col, Tabs, Tab } from 'react-bootstrap';
import Image from 'next/image';

export default function Servicetype() 
{
    const [activeTab, setActiveTab] = useState<string>('agency');

    const tabImages: { [key: string]: string } = 
    {
      agency: '/assets/images/servicetype1.png',
      ecommerce: '/assets/images/servicetype2.png',
      marketplaces: '/assets/images/servicetype3.png',
      socialservices: '/assets/images/servicetype4.png'
    };
  
    const handleTabSelect = (selectedTab: string | null) => {
      if (selectedTab) {
        setActiveTab(selectedTab);
      }
    };

  return (
    <>
          <section className='servicetype-section'>
            <Container fluid className='p-0'>
                <Row className='row m-0'>
                    <Col lg={4} md={4} xs={12} className='my-auto p-0'>
                    <div className='servicetype-left'>
                        <img src={tabImages[activeTab]} alt='Tab Image' className='img-fluid' width={400} height={300} />
                    </div>
                    </Col>
                    <Col lg={8} md={8} xs={12} className='my-auto'>
                    <div className='servicetype-right'>
                        <div className='pinkbanner-content m20'>
                        <h2 className='title'>Creative Web Development Agency</h2>
                        <p>We help a diverse clientele build result-driven web development agency products for different industries.</p>
                        </div>
                        <Tabs
                        defaultActiveKey='agency'
                        id='uncontrolled-tab-example'
                        className='servicetype-tabs mb-3'
                        activeKey={activeTab}
                        onSelect={handleTabSelect}
                        >
                            <Tab eventKey="agency" title='agency'>
                                <Row>
                                    <Col lg={9}>
                                        <h2 className='title'>Agency</h2>
                                        <p>Our e-commerce web products are packed with modern features and latest technologies, including a wish list, order tracking, user profiles, multiple payment options, and more.</p>
                                    </Col>
                                </Row>
                            </Tab>
                            <Tab eventKey="ecommerce" title='ecommerce'>
                                <Row >
                                    <Col lg={9}>
                                        <h2 className='title'>Ecommerce</h2>
                                        <p>Our e-commerce web products are packed with modern features and latest technologies, including a wish list, order tracking, user profiles, multiple payment options, and more.</p>
                                    </Col>
                                </Row>
                            </Tab>
                            <Tab eventKey="marketplaces" title='marketplaces'>
                                <Row>
                                    <Col lg={9}>
                                        <h2 className='title'>Marketplaces</h2>
                                        <p>Our e-commerce web products are packed with modern features and latest technologies, including a wish list, order tracking, user profiles, multiple payment options, and more.</p>
                                    </Col>
                                </Row>
                            </Tab>
                            <Tab eventKey="socialservices" title='social services'>
                                <Row>
                                    <Col lg={9}>
                                        <h2 className='title'>Social services</h2>
                                        <p>Our e-commerce web products are packed with modern features and latest technologies, including a wish list, order tracking, user profiles, multiple payment options, and more.</p>
                                    </Col>
                                </Row>
                            </Tab>
                        </Tabs>
                    </div>
                    </Col>
                </Row>
            </Container>
        </section>

    </>
  )
}
