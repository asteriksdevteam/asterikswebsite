'use client'
import Contactsection from '@/Components/Contactsection'
import Cta from '@/Components/Cta'
import Development from '@/Components/Development'
import Ourwork from '@/Components/Ourwork'
import Process from '@/Components/Process'
import Servicebanner from '@/Components/Servicebanner'
import Servicetype from '@/Components/Servicetype'
import Whychoose from '@/Components/Whychoose'
import {Container, Row, Col} from 'react-bootstrap'
import React, { useEffect, useState } from "react";
import {useParams, useSearchParams} from 'next/navigation'

 
export default function Page() 
{
  type ServiceData = {
    main_heading: string | undefined;
    main_desc: string | undefined;
    header_image: string | undefined;
    service_heading: string | undefined;
    agency_desc: string | undefined; 
    agency_heading : string | undefined;
    box1_desc: string | undefined;
    box1_heading : string | undefined;
    box1_image : string | undefined;
    box2_desc : string | undefined; 
    box2_heading : string | undefined; 
    box2_image : string | undefined;
    box3_desc : string | undefined;
    box3_heading : string | undefined;
    box3_image : string | undefined;
    box4_desc : string | undefined;
    box4_heading : string | undefined;
    box4_image: string | undefined;
    category_id:  string | undefined;
    choose_desc:  string | undefined;
    choose_heading:  string | undefined;
    choose_image:  string | undefined;
    company_desc:  string | undefined;
    company_heading:  string | undefined;
    created_at:  string | undefined;
    id:  string | undefined;
    p1_desc:  string | undefined;
    p1_heading:  string | undefined;
    p2_desc:  string | undefined;
    p2_heading:  string | undefined;
    p3_desc:  string | undefined;
    p3_heading:  string | undefined;
    path:  string | undefined;
    portfolio_desc:  string | undefined;
    portfolio_heading:  string | undefined;
    portfolio_image:  string | undefined;
    portfolio_logo:  string | undefined;
    process_desc:  string | undefined;
    process_heading:  string | undefined;
    service_desc:  string | undefined;
    sub_category_id:  string | undefined;
    tab1:  string | undefined;
    tab1_desc:  string | undefined;
    tab1_heading:  string | undefined;
    tab1_image:  string | undefined;
    tab2:  string | undefined;
    tab2_desc:  string | undefined;
    tab2_heading:  string | undefined;
    tab2_image:  string | undefined;
    tab3:  string | undefined;
    tab3_desc:  string | undefined;
    tab3_heading:  string | undefined;
    tab3_image:  string | undefined;
    tab4:  string | undefined;
    tab4_desc:  string | undefined; 
    tab4_heading:  string | undefined; 
    tab4_image:  string | undefined;
    tab5:  string | undefined;
    tab5_desc:  string | undefined;
    tab5_heading:  string | undefined;
    tab5_image:  string | undefined;
  };

  const [data, setData] = useState<ServiceData | null>(null);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState("");

  const {slug} = useParams();
  const searchParams = useSearchParams();
  const useSearchParamsddd = searchParams.get('category');

  const fetchData = async () => {
    try 
    {
      setLoading(true);
      const data = await fetch(`https://asteriksdigital.com/admin/api/getServicesbyslug/${useSearchParamsddd}/${slug}`);
      const responseData = await data.json();
      const serviceData = responseData[0]['sub_category'][0]['get_services'];
      setData(serviceData);
      setLoading(false);

    } 
    catch (error) 
    {
      console.error('Error fetching service data:', error);
    }
  };

  useEffect(() => {
    fetchData();
  }, []);
  
  if (loading) {
    return <p>Loading...</p>;
  }

  if (error) {
    return <p>{error}</p>;
  }
  console.log(data);
  
  return (
    <>
      <section className='servicebanner-section'>
          <Container className='containercenter'>
              <Row className='justify-content-center'>
                  <Col lg={6} md={6} xs={12} className='my-auto'>
                      <div className='servicebanner-content'>
                          <h1 className='bannerheading'>{data?.service_heading}</h1>
                          <p>{data?.service_desc}</p>
                      </div>
                  </Col>
                  <Col lg={6} md={6} xs={12}>
                      <div className='form'>
                          <h3 className='subtitle'>Lets start a project together</h3>
                          <p>We make all your dreams come true in a successful project.</p>
                          <form action="#">
                              <Row className='gx-3'>
                                  <Col lg={6}>
                                      <input type="text" placeholder='Name*' className='form-control' required/>
                                  </Col>
                                  <Col lg={6}>
                                      <input type="text" placeholder='Email*' className='form-control' required/>
                                  </Col>
                              </Row>
                              <Row className='mt-3 gx-3'>
                                  <Col lg={6}>
                                      <input type="text" placeholder='phone*' className='form-control' required/>
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
                                  <textarea  rows={7} className='form-control' placeholder='summary'></textarea>
                              </Col>
                              <Row className='mt-3 justify-content-center'>
                                  <button type='submit' className='orangebtn'>submit</button>
                              </Row>
                          </form>
                      </div>                    
                  </Col>
              </Row>
          </Container>
      </section>
      <section className='development-section'>
          <Container>
              <Row className='justify-content-center text-center'>
                  <Col lg={8}>
                      <h2 className='title'>Web Development Services</h2>
                      <p className='desc'>Your web presence is pivotal for your brand, aside from it serving as a point of service. Get started with an experienced website creation team in the USA that knows just what you need to take you forward.</p>
                  </Col>
              </Row>
              <Row className='mt-4'>
                  <Col lg={3} md={6}>
                      <div className='card'>
                          <img src={`${data?.path}${data?.box1_image}`} className='dev1' alt="" />
                          <h3 className='subtitle'>{data?.box1_heading}</h3>
                          <p>{data?.box1_desc}</p>
                      </div>
                  </Col>
                  <Col lg={3} md={6}>
                      <div className='card'>
                          <img src={`${data?.path}${data?.box2_image}`} className='dev1' alt="" />
                          <h3 className='subtitle'>{data?.box2_heading}</h3>
                          <p>{data?.box1_desc}</p>
                      </div>
                  </Col>
                  <Col lg={3} md={6}>
                      <div className='card'>
                          <img src={`${data?.path}${data?.box3_image}`} className='dev1' alt="" />
                          <h3 className='subtitle'>{data?.box3_heading}</h3>
                          <p>{data?.box1_desc}</p>
                      </div>
                  </Col>
                  <Col lg={3} md={6}>
                      <div className='card'>
                          <img src={`${data?.path}${data?.box4_image}`} className='dev1' alt="" />
                          <h3 className='subtitle'>{data?.box4_heading}</h3>
                          <p>{data?.box1_desc}</p>
                      </div>
                  </Col>
              </Row>
          </Container>
      </section>
      <Servicetype />
      <section className='ourwork-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9} md={9}>
                        <h2 className='title'>Our Work</h2>
                        <h3 className='subtitle3'>Web Development Solutions Portfolio</h3>
                        <p className='desc'>Spanning multiple industries, our skilled and experienced web developers build solutions to take their business forward and thrive among the best of their industries competitors.</p>
                    </Col>
                </Row>
                <Row className='mt-4 align-items-center'>
                    <Col lg={{ span: 6, offset: 6 }} md={{ span: 6, offset: 6 }} className='ourwork-description align-items-center my-auto'>
                    <img src="/assets/images/smalllogo.png" className='smalllogo' alt="" />
                    <p className='smalltitle'>Asteriks Digital</p>
                    <h2 className='title'>Asteriks Digital</h2>
                    <p>Spanning multiple industries, our skilled and experienced web developers build solutions to take their business forward and thrive among the best of their industries competitors.</p>
                    </Col>
                </Row>
            </Container>
      </section>
        <section className='whychoose-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9}>
                        <h2 className='title'>Why Choose Our Blockchain App Development Services?</h2>                    
                        <p>Along with designing and developing your web presence, we propose business-oriented web development solutions that fit your needs and speak volumes of your values as a brand. With experienced web developers and digital artisans, you get a state-of-the-art solution with a cutting-edge appeal that engages more people online. Leverage powerful technologies and robust architecture to build a web solution that fulfils your needs under packaged web development services</p>
                    </Col>
                </Row>
                <Row>
                    <img src="/assets/images/whychoose.png" alt=""/>
                </Row>
            </Container>
        </section>
        <section className='ourprocess-section'>
            <Container>
                <Row className='justify-content-center text-center'>
                    <Col lg={9}>
                        <h2 className='title'>Our Process</h2>
                        <h3 className='subtitle2 mb-4'> Web Development</h3>
                        <p>Build a web presence thriving with programming tools like Python, Angular, React Native, and renowned cloud website creation services in the USA with creative experts who formulate customized solutions.</p>
                    </Col>
                </Row>
                <Row className='pt-4 mt-5'>
                    <Col lg={4} md={4}>
                        <div className='processbox'>
                            <div className='numberbox'>
                                <h1>01</h1>
                            </div>
                            <ul className='processlist'>
                            <h3 className='subtitle'> Project Planning</h3>
                            <li> Business analysis</li>
                                <li>Documenting specifications</li>
                                <li>Preparing wireframes</li>
                                <li>Getting client approval</li>
                            </ul>
                        </div>
                    </Col>
                    <Col lg={4} md={4}>
                        <div className='processbox'>
                            <div className='numberbox'>
                                <h1>02</h1>
                            </div>
                            <ul className='processlist'>
                            <h3 className='subtitle'>UI/UX Design</h3>
                                    <li>Crafting app prototype</li>
                                    <li>Making changes</li>
                                    <li>Getting client approval</li>
                                    <li>Implementing feedback</li>
                            </ul>
                        </div>
                    </Col>
                    <Col lg={4} md={4}>
                        <div className='processbox processboxlast'>
                            <div className='numberbox'>
                                <h1>03</h1>
                            </div>
                            <ul className='processlist'>
                            <h3 className='subtitle'> Development</h3>
                                <li>Development strategy</li>
                                <li>Testing strategy</li>
                                <li>Product development</li>
                                <li>Product release</li>
                            </ul>
                        </div>
                    </Col>
                </Row>
            </Container>
        </section> 
        <section className='contactsection'> 
            <Container>
                <Row>
                    <Col lg={{ span: 6, offset: 4}} md={{ span: 8, offset: 4}}>
                        <div className='form'>
                            <h3 className="subtitle">apply for an opening position now</h3>
                            {/* <p>We make all your dreams come true in a successful project.</p> */}
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
                                        <input type="text" placeholder='phone*' className='form-control' required/>
                                    </Col>
                                    <Col lg={6}>
                                        <select className='form-select form-control'>
                                            <option disabled>select position</option>
                                            <option>frontend</option>
                                            <option>backtend</option>
                                            <option>html</option>
                                        </select>
                                    </Col>
                                </Row>
                                <Col lg={12}>
                                    <textarea  rows={7} className='form-control' placeholder='summary'></textarea>
                                </Col>
                                <Row className='mt-3 justify-content-center'>
                                    <button type='submit' className='orangebtn'>submit</button>
                                </Row>
                            </form>   
                        </div>                
                    </Col>
                </Row>
            </Container>
        </section>
      <Cta />
    </>
  );

}
