/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Companyprofile() 
{

    type Companyprofile = {
        company_profile_heading: string;
        company_profile: string;
        our_company_image: string;
        path: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Companyprofile | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");

        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getAboutUs`)
              .then(async (res) => {
                // set the data if the response is successful
                const todo: Companyprofile = await res.json();
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
        <section className='company-profile'>
            <Container>
                <Row>
                    <Col lg={6} md={6} className="order1">
                        <img src={`${data?.path}${data?.our_company_image}`} className='company aboutallimg' alt=''/>
                    </Col>
                    <Col lg={6} md={6} className='my-auto order2'>
                        {/* <h2 className='title'>Company Profile</h2>
                        <p>Asteriks Digital is driven by the DEEDS ideology; Digital Experts Empowering Digital Solutions. 
                        We meet the digital requirements of both people and companies, through our pool of talented resources and innovative technologies. We have broadened our horizons in the digital solutions sector. </p>
                        <p>Asteriks Digital is on-track to establish itself as a global leader in the digital services industry, which is achievable through the mutual consent of the stakeholder community.</p> */}

                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h2 className='title'>{data?.company_profile_heading}</h2>
                            )}
                                    <p>{data?.company_profile}</p>


                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
