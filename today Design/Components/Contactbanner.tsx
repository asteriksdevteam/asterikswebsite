/* eslint-disable @next/next/no-img-element */
'use client'
import Link from "next/link";
import React, { useEffect, useState } from "react";
import {Container, Row, Col} from 'react-bootstrap'

export default function Contactbanner() 
{

    type Mission = {
        slider_heading: string;
        slider_heading_content: string;
        contactno: number;
        email: string;
        address: string;

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
        <section className='contactbanner'>
            <Container className='containercenter'>
                <Row>
                    <Col lg={6}>
                        <div className='contactbanner-content'>
                            {/* <h1 className="bannerheading">Let’s get in touch</h1>
                            <p className="bannertext">Great! Were excited to hear from you and lets start something special together. call us for any inquiry.</p> */}

                            {loading ? (
                                    loadingComponent
                                ) : error ? (
                                    errorComponent
                                ) : (
                                    <h1 className="bannerheading">{data?.slider_heading}</h1>
                            )}
                                    <p>{data?.slider_heading_content}</p>

                        </div>
                    </Col>
                </Row>
                <Row className='gx-0 cd'>
                    <Col lg={8} md={6} xs={12}>
                        <div className='form'>
                            <h3 className='subtitle'>Dont be afraid man! say hello</h3>
                            <form action="#">
                                            <Row className='gx-3'>
                                                <Col lg={6}>
                                                    <input type="text" placeholder='Name*' className='form-control' required/>
                                                </Col>
                                                <Col lg={6}>
                                                    <input type="text" placeholder='Email*' className='form-control' required/>
                                                </Col>
                                            </Row>
                                            <Row className='gx-3'>
                                                <Col lg={6}>
                                                    <input type="text" placeholder='Phone*' className='form-control' required/>
                                                </Col>
                                                <Col lg={6}>
                                                    <select className='form-select form-control'>
                                                        <option>frontend</option>
                                                        <option>backtend</option>
                                                        <option>html</option>
                                                    </select>
                                                </Col>
                                            </Row>
                                            <Col lg={12} className='mt-3'>
                                                <textarea  rows={7} className='form-control' placeholder='Summary'></textarea>
                                            </Col>
                                            <Col lg={12} className='mt-3'>
                                                <button type='submit' className='orangebtn contactbtn'>submit</button>
                                            </Col>
                            </form>
                        </div>
                    </Col>
                    <Col lg={4} md={6} xs={12}>
                        <div className='contactbanner-rightcontent'>
                            <ul>
                                <li><img src="/assets/images/callicon.png"  alt="" /> 
                                
                                
                                {/* +92-345-2702202 */}
                                
                               <Link className="tel" href={`tel:${data?.contactno}`}> {data?.contactno}</Link>

                                </li>
                                
                                <li><img src="/assets/images/emailicon.png"  alt="" /> 
                                
                                {/* info@asteriksdigital.com */}

                                <Link className="tel" href={`emailto:${data?.email}`}> {data?.email}</Link>
                                
                                </li>
                                
                                <li><img src="/assets/images/pointericon.png"  alt="" /> 
                                
                                {/* Office #:302, Building #:32C - Lane 8 Bukhari Commercial, DHA Phase 6, Karachi. */}
                                
                                {data?.address}
                                
                                </li>
                            </ul>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section>
    </>
  )
}
