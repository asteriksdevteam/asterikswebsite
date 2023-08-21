'use client'
import Contactsection from '@/Components/Contactsection'
import Cta from '@/Components/Cta'
import Development from '@/Components/Development'
import Ourwork from '@/Components/Ourwork'
import Process from '@/Components/Process'
import Servicebanner from '@/Components/Servicebanner'
import Servicetype from '@/Components/Servicetype'
import Whychoose from '@/Components/Whychoose'
import React, { useEffect, useState } from "react";
import {useParams, useSearchParams} from 'next/navigation'

 
export default function Page() 
{
  type ServiceData = {
    main_heading: string;
  };
  // set the states for data,loading, and error
  const [data, setData] = useState<ServiceData | null>(null);
  const [loading, setLoading] = useState(false);
  const [error, setError] = useState("");

  const {slug} = useParams();
  const searchParams = useSearchParams();
  const useSearchParamsddd = searchParams.get('category');

  const fetchData = async () => {
    try {
      const data = await fetch(`https://asteriksdigital.com/admin/api/getServicesbyslug/${useSearchParamsddd}/${slug}`);
      const responseData = await data.json();
      const data1 = responseData[0]['sub_category'][0]['get_services'];
      // console.log(responseData[0]['sub_category'][0]['get_services']['main_heading']);
      // setData(data1);
      return data1;
    } catch (error) {
      console.error('Error fetching service data:', error);
    }
  };

  console.log(fetchData());

  // const selectedKeysArray: { key1: ValueType; key2: ValueType }[] = fetchedData.map(item => ({
  //   key1: item.key1,
  //   key2: item.key2
  // }));


  return (
   <>
        <Servicebanner/>
        <Development/>
        <Servicetype/>
        <Ourwork/>
        <Whychoose/>
        <Process/>
        <Contactsection/>
        <Cta/>
   </>
  )
}
