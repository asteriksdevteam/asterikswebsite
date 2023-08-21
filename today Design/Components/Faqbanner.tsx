import React from 'react'
import {Container, Row, Col} from 'react-bootstrap'

export default function Faqbanner() 
{
  return (
    <>
        <section className='privacybanner'>
            <Container className='containercenter'>
                <Row>
                    <Col lg={12}>
                        <h1 className='bannerheading'>Faq banner</h1>
                        <p className='bannertext'>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi ratione provident nesciunt? Tenetur voluptate vitae quibusdam illum explicabo dolorum, impedit harum soluta quis a repellat similique minima molestias, quaerat architecto.</p>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
