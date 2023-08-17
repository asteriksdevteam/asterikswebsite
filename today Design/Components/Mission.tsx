/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Mission() 
{

  type Mission = {
    mission_statment_heading: string;
    mission_statment: string;
    mission_image: string;
  };
    // set the states for data,loading, and error
    const [data, setData] = useState<Mission | null>(null);
    const [loading, setLoading] = useState(false);
    const [error, setError] = useState("");

    useEffect(() => {
        // set loading to true before calling fetch
        setLoading(true);
    
        fetch(`https://asteriksdigital.com/admin/api/getAboutUs`)
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
          <section className='mission-section'>
            <Container>
                <Row>
                    <Col lg={6} md={6} className='my-auto'>

                        {/* <h2 className='title'>Mission Statement </h2>
                        <p>We are missioned to constantly improve our work procedures and invest actively in cutting-edge technological software, in order to ensure premium-quality services. Asteriks Digital prioritizes client satisfaction above all. </p> */}

                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h2 className='title'>{data?.mission_statment_heading}</h2>
                            )}
                                    <p>{data?.mission_statment}</p>


                    </Col>
                    <Col lg={6} md={6}>
                        <img src='/assets/images/mission.png' className='company' alt=''/>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
