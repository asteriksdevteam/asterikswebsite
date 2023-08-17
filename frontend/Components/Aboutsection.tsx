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
                                <h2 className='title'>Innovative Digital and IT Firm </h2>
                                <p>Welcome to Asteriks Digital, where our unwavering commitment is to deliver top-notch digital and IT services to our esteemed clients. Experience the power of our highly trained team and cutting-edge technologies as we go above and beyond to surpass your every expectation. Prepare to be amazed as we deliver nothing short of pure excellence and goodness.</p>
                            </div>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
