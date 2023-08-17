'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Countupsection() 
{

    type Vission = {
        Vision_statment_heading: string;
        Vision_statment: string;
        vision_image: string;
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
        <section className='countupsection'>
            <Container>
                <Row>
                    <div className='countupwrapper'>
                            <Row>
                        {loading ? (
                        loadingComponent
                        ) : error ? (
                        errorComponent
                        ) : (
                        <>
                            {/* Replace the content below with your desired JSX */}
                            <Col lg={3} md={6}>
                            <div className="countup-item">
                                <h1>25k</h1>
                                <p>=Year in Business</p>
                            </div>
                            </Col>
                            <Col lg={3} md={6}>
                            <div className="countup-item">
                                <h1>8k</h1>
                                <p>Happy Customer</p>
                            </div>
                            </Col>
                            <Col lg={3} md={6}>
                            <div className="countup-item">
                                <h1>15k</h1>
                                <p>Service Users</p>
                            </div>
                            </Col>
                            <Col lg={3} md={6}>
                            <div className="countup-item">
                                <h1>98k</h1>
                                <p>Team Members</p>
                            </div>
                            </Col>
                        </>
                        )}
                    </Row>
                    </div>
                </Row>
            </Container>
        </section>
    </>
  )
}
