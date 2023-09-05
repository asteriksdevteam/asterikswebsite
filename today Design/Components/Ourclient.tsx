/* eslint-disable @next/next/no-img-element */
'use client'
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'
import dynamic from 'next/dynamic';

export default function Ourclient() 
{

  const OwlCarousel = dynamic(() => import('react-owl-carousel'), {
    ssr: false, // Disable server-side rendering
  });

    type Ourstory = {
        our_story_heading: string;
        our_story: string;
        our_story_image: string;
        path: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Ourstory | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");

        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getAboutUs`)
              .then(async (res) => {
                // set the data if the response is successful
                const todo: Ourstory = await res.json();
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
                    <Col lg={6} md={6} className='my-auto'>
    
                        {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h2 className='title'>{data?.our_story_heading}</h2>
                            )}
                                    <p>{data?.our_story}</p>


  
                    </Col>
                    <Col lg={6} md={6}>
                        <img src={`${data?.path}${data?.our_story_image}`} className='company aboutallimg' alt=''/>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
