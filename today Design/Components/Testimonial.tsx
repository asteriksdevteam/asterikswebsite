/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import { Container, Row, Col } from 'react-bootstrap'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faStar } from '@fortawesome/free-solid-svg-icons'
import OwlCarousel from 'react-owl-carousel';
import 'owl.carousel/dist/assets/owl.carousel.css';
import 'owl.carousel/dist/assets/owl.theme.default.css';
import dynamic from 'next/dynamic';

export default function Testimonial() 
{
    const OwlCarousel = dynamic(() => import('react-owl-carousel'), {
        ssr: false, // Disable server-side rendering
    });

    const testimonialcarousel = 
    {
        loop: false,
        autoplay: false,
        autoplayTimeout: 5000,
        margin:20,
        nav:true,
        dots:false,
        responsive: {
            0: {
                items: 1, 
            },
            600: {
                items: 1, 
            },
            1000: {
                items: 1,
            },
        },
    };

    type Testimonial = {
        Message: string;
        Name: string;
        Position: string;
        Rating: string;
        Image: string;
        path: string
    };

    const [data, setData] = useState<Testimonial[]>([]); // Change the type to an array
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState("");

    useEffect(() => {
        // set loading to true before calling fetch
        setLoading(true);

        fetch(`https://asteriksdigital.com/admin/api/getTestimonial`)
            .then(async (res) => {
                // set the data if the response is successful
                const testimonials: Testimonial[] = await res.json();
                setData(testimonials);
            })
            .catch((e) => {
                // set the error if there's an error like 404, 400, etc
                if (e instanceof Error) {
                    setError(e.message);
                }
            })
            .finally(() => {
                // set loading to false after everything has completed.
                setLoading(false);
            });
    }, []);

    // display for loading component
    const loadingComponent = <div>Loading...</div>;
    // display for error component
    const errorComponent = <div className="text-red-500">Error: {error}</div>;

    return (
        <>
            <section className='testimonial-section'>
                <Container fluid className="p-0">
                    <Row className="">
                        <OwlCarousel className='testimonial-carousel owl-theme' {...testimonialcarousel}>
                            {data.map((testimonial, index) => (
                                <div className='item' key={index} style={{
                                    backgroundImage: `url(${testimonial.path}${testimonial.Image})`,
                                    backgroundPosition: 'center top'
                                  }}>
                                    <div className="testimonial-inneritens">
                                    <Container>
                                    <Row>
                                        <Col lg={6} md={6} xs={12}>
                                            <div className='testimonial-item'>
                                                <img src='/assets/images/quote.png' className='img-fluid quote' alt=''/>
                                                <p>{testimonial.Message}</p>
                                                <div className='starlist'>
                                                    <ul>
                                                        <li><FontAwesomeIcon icon={faStar} /></li>
                                                        <li><FontAwesomeIcon icon={faStar} /></li>
                                                        <li><FontAwesomeIcon icon={faStar} /></li>
                                                        <li><FontAwesomeIcon icon={faStar} /></li>
                                                        <li><FontAwesomeIcon icon={faStar} /></li>
                                                    </ul>
                                                    <p className='reviews-text'>{testimonial.Rating} reviews</p>
                                                    <h1 className='bigtitle'><span>0{index + 1}</span>/{data.length}</h1>
                                                </div>
                                            </div>
                                        </Col>
                                        <Col lg={6} md={6} xs={12}>
                                            <div className='testimonial-rightdiv'>
                                                <h2 className='title'>{testimonial.Name}</h2>
                                                <p>{testimonial.Position}</p>
                                            </div>
                                        </Col>
                                        <div className='comaquote'><img src='/assets/images/comaquote.png' alt='' /></div>
                                    </Row>
                                    </Container>
                                    </div>
                                </div>
                            ))}
                        </OwlCarousel>
                    </Row>
                </Container>
            </section>
        </>
    )
}