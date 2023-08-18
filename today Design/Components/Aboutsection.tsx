'use client'
import { Container, Row, Col } from 'react-bootstrap'
import React, { useEffect, useState } from "react";

export default function Aboutsection() 
{

    type Aboutsection = {
        Heading: string;
        Description: string;
        slider_images: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Aboutsection | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");
    
        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getCareer`)
            
              .then(async (res) => {
                // set the data if the response is successful
                const todo1: Aboutsection = await res.json();
                console.log(todo1);
                setData(todo1);
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
        <section className='aboutsection'>
            <Container>
                <Row>
                    <Col lg={12} md={12} className='my-auto'>
                        <div className='aboutsection-content'>
                            <h6 className='subtitle2'>Company about</h6>
                            <div className='aboutsection-inntercontent'>
                                <h2 className='title'>Next-Gen Marketing and Tech Company </h2>
                                <p>Welcome to Asteriks Digital, a company dedicated to providing exceptional digital and IT services to our valued clients. We prioritize delivering high-quality solutions and ensuring customer satisfaction is our utmost priority. Come and witness the incredible capabilities of our highly qualified team and state-of-the-art technologies. We are dedicated to exceeding your expectations by delivering exceptional results that go beyond what you could ever imagine. Get ready to witness an awe-inspiring experience as we bring forth an extraordinary display of unparalleled brilliance and absolute perfection that is bound to leave you in a state of complete awe and sheer delight.
</p>
                            </div>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
