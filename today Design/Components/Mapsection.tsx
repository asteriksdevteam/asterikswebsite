'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Mapsection() 
{

  type Mission = {
    iframe_link: string;

  };
    // set the states for data,loading, and error
    const [data, setData] = useState<Mission | null>(null);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState("");

    useEffect(() => {
        // set loading to true before calling fetch
        setLoading(true);
    
        fetch(`https://asteriksdigital.com/admin/api/getContactUs`)
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
        <section className='map-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                  <Col lg={9}>
                      <h2 className='title'>Find Us on Google Map</h2>
                      <p className='desc'>Your web presence is pivotal for your brand, aside from it serving as a point of service. Get started with an experienced website creation team </p>                  
                  </Col>
                </Row>
                <Row>
                  {/* <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14487.761133514341!2d67.0413872655571!3d24.797498276807175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33d730694a36f%3A0x5f5916bf16dd90d7!2sAsteriks%20Digital!5e0!3m2!1sen!2s!4v1691992924778!5m2!1sen!2s" width="600" height="450" style={{border:0}} className='mapimage' loading="lazy"></iframe> */}

                  <iframe src={data?.iframe_link} width="600" height="450" style={{border:0}} className='mapimage' loading="lazy"></iframe>

                </Row>
            </Container>
        </section> 
    </>
  )
}
