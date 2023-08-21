'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Privacysection() 
{

return (
    <>
        <section className='privacysection'>
            <Container >
                <Row>
                    <Col lg={12}>
                        <h2 className='title'>Personal Data</h2>
                        <p>If you, the user, voluntarily register with Asteriks Digital, we will use your personal data to improve our services, except as otherwise stated in this Privacy Policy and any applicable service-specific agreement, such as the Terms and Conditions for Publishers or the Terms and Conditions for Advertisers. Personal data such as first and last name, address, email address, telephone number, birth date, billing and credit card information may be collected.</p>

                        <h2 className='title'>Use of Personal Data</h2>
                        <p>Asteriks Digital will use Your personal data in accordance with this Privacy Policy and any applicable service-specific agreement. We will only use the personal information You supply for the purpose for which it was submitted. Personal data acquired when You register or get access to the Site is one example. We and our affiliates also use your personal data and other personally non-identifiable information obtained from the Site to improve the content, functionality, and services for a better user experience.</p>

                        <h2 className='title'>Personally Non-identifiable Information</h2>
                        <p>Personally non-identifiable information submitted by You during registration or when You opt to utilize some of our services will not be sufficient to identify or contact You on its own. Such information may include, but is not limited to, demographics, age, education level, career, gender, and so on. This information may be collected not just by Asteriks Digital, but it may also be included in databases owned and maintained by Asteriks Digital affiliates, agents, or service providers. Asteriks Digital may combine this information with other data to track things like the total number of visitors to our Site and the domain names of our visitors Internet service providers. It is vital to emphasize that we do not use any of the available personal data in this procedure.</p>

                       
                    </Col>
                </Row>
            </Container>
        </section>
    </>
)

}