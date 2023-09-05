'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Faqsection() 
{

return (
    <>
        <section className='faqsection'>
            <Container >
                <Row>
                    <Col lg={12}>
                        <h2 className='title'>Faq content</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ratione provident nesciunt? Tenetur voluptate vitae quibusdam illum explicabo dolorum, impedit harum soluta quis a repellat similique minima molestias, quaerat architecto.</p>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
)

}