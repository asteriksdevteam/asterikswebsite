import Aboutsection from '@/Components/Aboutsection'
import Awards from '@/Components/Awards'
import Blogsection from '@/Components/Blogsection'
import Clientslogos from '@/Components/Clientslogos'
import Cta from '@/Components/Cta'
import Helpbusiness from '@/Components/Helpbusiness'
import Homebanner from '@/Components/Homebanner'
import Partners from '@/Components/Partners'
import Technologies from '@/Components/Technologies'
import Testimonial from '@/Components/Testimonial'
import Image from 'next/image'

export default function Home() {
  return (
  <>
    <Homebanner/> 
    <Clientslogos/>
    <Helpbusiness/> 
    <Aboutsection/>  
    <Blogsection/>
    <Technologies/>  
    <Awards/>  
    <Testimonial/> 
     <Partners/> 
    <Cta/>  
  </>
  )
}
