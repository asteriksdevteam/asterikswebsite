import 'bootstrap/dist/css/bootstrap.min.css'
import '../public/assets/css/style.css'
import Footer from '@/Components/Footer'
import type { Metadata } from 'next'
import { Inter } from 'next/font/google'
import Header from '@/Components/Header'

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

      <link rel="icon" href="/assets/images/smalllogo.png" sizes="any" />

      <body className={inter.className}>
        
        <Header/>
        
        {children}
        
        <Footer/>

        </body>
    </html>
  )
}
