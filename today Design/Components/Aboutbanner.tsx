'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Aboutbanner() 
{

    type Aboutbanner = {
        slider_heading: string;
        slider_heading_content: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Aboutbanner | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");

        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getAboutUs`)
              .then(async (res) => {
                // set the data if the response is successful
                const todo: Aboutbanner = await res.json();
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
        <section className='aboutbanner-section'>
            <Container className='containercenter'>
                <Row className='justify-content-center'>
                    <Col lg={12} xs={12}>
                        <div className='aboutbanner-content'>
                            {/* <h2 className='bannerheading'>We're a full service creative and digital agency, working globally with largest brands.</h2>
                            <p>Asteriks Digital provides a wide range of digital solutions. We are experts at providing the highest-quality digital solutions that target business growth and aid in its scalability. Digital experts and state-of-the-art technologies provide diverse solutions. Asteriks Digital is dedicated to contributing to business development and enabling them to acquire a competitive market edge.</p> */}

                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h2 className='bannerheading'>{data?.slider_heading}</h2>
                            )}
                                <p className='bannertext'>{data?.slider_heading_content}</p>

                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
