import 'bootstrap/dist/css/bootstrap.min.css'
import '../public/assets/css/custom.css'
import Footer from '@/Components/Footer'
import type { Metadata } from 'next'
import { Inter } from 'next/font/google'
import Header from '@/Components/Header'
import Header2 from '@/Components/Header2'

const inter = Inter({ subsets: ['latin'] })

export const metadata: Metadata = {
  title: 'Asterik Digital | A One-Stop Shop For Your Digital Solutions Requirements ',
  description: '',
}

export default function RootLayout({
  children,
}: {
  children: React.ReactNode
}) {
  return (
    <html lang="en">

      <link rel="icon" href="/assets/images/favicon.ico" sizes="any" />

      <body className={inter.className}>
        
        {/* <Header/> */}
        
        <Header2/>

        {children}
        
        <Footer/>

        </body>
    </html>
  )
}
