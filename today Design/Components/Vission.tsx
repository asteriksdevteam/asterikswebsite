/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Vission() 
{

    type Vission = {
        Vision_statment_heading: string;
        Vision_statment: string;
        vision_image: string;
        path: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Vission | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");
    
        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getAboutUs`)
              .then(async (res) => {
                // set the data if the response is successful
                const todo: Vission = await res.json();
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
         <section className='vission-section'>
            <Container>
                <Row>
                    <Col lg={6} md={6} className="order1">
                        <img src={`${data?.path}${data?.vision_image}`} className='company aboutallimg' alt=''/>
                    </Col>
                    <Col lg={6} md={6} className='my-auto order2'>
                        {/* <h2 className='title'>Vision Statement </h2>
                        <p>Asteriks Digital is visioned to help businesses achieve their strategic goals. Our vision is to establish ourselves as a global leader in digital services, achievable through digital experts and innovative technologies. In the future, we tend to actively invest in Corporate Social Responsibility (CSR) for giving back to society.</p> */}

                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h2 className='title'>{data?.Vision_statment_heading}</h2>
                            )}
                                    <p>{data?.Vision_statment}</p>

                    </Col>                
                </Row>
            </Container>
        </section>
    </>
  )
}
