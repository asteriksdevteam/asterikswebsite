/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import {Container,Row, Col} from 'react-bootstrap'

export default function Recruitment() 
{

    type Mission = {
        apply: string;
        review: string;
        interviews: string;
        onboarding: string
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Mission | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");
    
        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getCareer`)
              .then(async (res) => {
                // set the data if the response is successful
                const todo: Mission = await res.json();
                setData(todo);
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
        <section className='recruiter-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9}>
                        <h2 className='title'> Our Recruitment Process</h2>
                        <p className='desc'>Asteriks aims to build high-quality software while also fostering an enjoyable work environment that allows everyone the opportunity to reach their highest potential.</p>
                    </Col>
                </Row>
                <Row className='mt-4'>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/recruiter1.png" alt="" />
                            <h3 className='subtitle'>apply</h3>
                            {/* <p>Scroll through the open vacancies below and apply for positions that align with your particular skill set.</p> */}

                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                    <p>{data?.apply}</p>
                            )}

                        </div>
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/recruiter2.png" alt="" />
                            <h3 className='subtitle'>Review</h3>
                            {/* <p>Our expert recruiters review your application. They will screen your résumé and find the best fit for you.</p> */}

                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                    <p>{data?.review}</p>
                            )}


                        </div>
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/recruiter3.png" alt="" />
                            <h3 className='subtitle'>Interviews</h3>
                            {/* <p>To find people who will succeed in our environment, we use a competency-based interviewing method.</p> */}


                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                    <p>{data?.interviews}</p>
                            )}

                        </div>
                    </Col>
                    <Col lg={3} md={6}>
                        <div className='card'>
                            <img src="/assets/images/recruiter4.png" alt="" />
                            <h3 className='subtitle'>Onboarding</h3>
                            {/* <p>Once you’ve received the “Welcome Aboard” message, our onboarding experience will polish and set </p> */}


                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                    <p>{data?.onboarding}</p>
                            )}

                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
