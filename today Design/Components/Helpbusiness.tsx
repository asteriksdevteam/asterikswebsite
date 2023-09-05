/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import Image from 'next/image'
import {Container, Row, Col} from 'react-bootstrap'

export default function Helpbusiness() 
{
    type Homebanner = {
        Heading: string;
        Description: string;
        business_idea_heading: string;
        business_idea_image: string
        business_idea_desc: string;
        finance_planning_heading: string;
        finance_planning_image: string;
        finance_planning_desc: string;
        market_analysis_heading: string;
        market_analysis_desc: string;
        market_analysis_image: string;
        develop_web_heading: string;
        develop_web_desc: string;
        develop_web_image: string;
        path: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Homebanner | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");
    
        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getWhatWeDo`)
            
              .then(async (res) => {
                // set the data if the response is successful
                const todo: Homebanner = await res.json();
                console.log(todo);
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
    <section className='hekpbusiness-section'>
        <Container>
            <Row className='justify-content-center text-center'>
                <Col lg={8} xs={12}>
                    {/* <h2 className='title'>How can we help your Business ?</h2>
                    <p className='desc'>We provide a wide range of services that are tailored to your unique business needs. You’ve come to the right place. Sit lectus tincidunt mi quis nunc. Ut libero morbi fermentum nulla tincidunt </p> */}

                    {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h2 className='title'>{data?.Heading}</h2>
                            )}
                                <p className='desc'>{data?.Description}</p>

                </Col>
            </Row>
            <Row>
                <Col lg={3} md={6} xs={12}>
                    <div className='cardbox'>
                        <div>
                           <img src={`${data?.path}${data?.business_idea_image}`} className='smallicon'  alt=''/>
                        </div>
                        {/* <h3 className='subtitle'>Business Idea Planning</h3>
                        <p>Asteriks Digital can assist you in creating your dream from the ground up and guiding you towards the full potential of your business concept.</p> */}

                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h3 className='subtitle'>{data?.business_idea_heading}</h3>
                            )}
                                <p>{data?.business_idea_desc}</p>

                    </div>
                </Col>
                <Col lg={3} md={6} xs={12}>
                    <div className='cardbox'>
                       <img src={`${data?.path}${data?.finance_planning_image}`} className='smallicon'  alt=''/>
                        {/* <h3 className='subtitle'>Financial Planning System</h3>
                        <p>Asteriks Digital can assist you in creating your dream from the ground up and guiding you towards the full potential of your business concept.</p> */}


                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h3 className='subtitle'>{data?.finance_planning_heading}</h3>
                            )}
                                <p>{data?.finance_planning_desc}</p>


                    </div>
                </Col>
                <Col lg={3} md={6} xs={12}>
                    <div className='cardbox'>
                       <img src={`${data?.path}${data?.market_analysis_image}`} className='smallicon' alt=''/>
                        {/* <h3 className='subtitle'>Market Analysis Project</h3>
                        <p>Asteriks Digital can assist you in creating your dream from the ground up and guiding you towards the full potential of your business concept.</p> */}
                    
                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h3 className='subtitle'>{data?.market_analysis_heading}</h3>
                            )}
                                <p>{data?.market_analysis_desc}</p>
                    
                    </div>
                </Col>
                <Col lg={3} md={6} xs={12}>
                    <div className='cardbox'>
                       <img src={`${data?.path}${data?.develop_web_image}`} className='smallicon' alt=''/>
                        {/* <h3 className='subtitle'>Development Website and App</h3>
                        <p>Asteriks Digital can assist you in creating your dream from the ground up and guiding you towards the full potential of your business concept.</p> */}

                                    
                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h3 className='subtitle'>{data?.develop_web_heading}</h3>
                            )}
                                <p>{data?.develop_web_desc}</p>


                    </div>
                </Col>
            </Row>
        </Container>
    </section>
  )
}
