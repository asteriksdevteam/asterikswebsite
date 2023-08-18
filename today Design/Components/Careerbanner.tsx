'use client'
import React, { useEffect, useState } from "react";
import {Container,Row, Col} from 'react-bootstrap'

export default function Careerbanner() 
{

    type Careerbanner = 
    {
        slider_heading: string;
        slider_heading_content: string;
      };
        // set the states for data,loading, and error
        const [data, setData] = useState<Careerbanner | null>(null);
        const [loading, setLoading] = useState(false);
        const [error, setError] = useState("");
    
        useEffect(() => {
            // set loading to true before calling fetch
            setLoading(true);
        
            fetch(`https://asteriksdigital.com/admin/api/getCareer`)
            
              .then(async (res) => {
                // set the data if the response is successful
                const todo1: Careerbanner = await res.json();
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
        <section className='careerbanner'>
            <Container className='containercenter'>
                <Row>
                    <Col lg={12}>
                        <div className='careercontent'>
                            {/* <h1 className='bannerheading'>Build you careers with us</h1>
                            <p className='bannertext'>You’ll be part of an inclusive and diverse team, and you’ll receive the training you need to help keep you and us greater than.</p> */}


                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                  <h1 className='bannerheading'>{data?.slider_heading}</h1>
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
