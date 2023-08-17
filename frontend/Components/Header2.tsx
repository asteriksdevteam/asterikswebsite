'use client'
import React from 'react'

export default function Header2() 
{

    const menuData =

    [
        { "id": 1, "label": "Home", "url": "/" },
        { "id": 2, "label": "career", "url": "/career" },
        { "id": 3, "label": "Services", "url": "/services" },
        { "id": 4, "label": "Contact", "url": "/contact" }
    ]

  return (
    <>
        <nav>
            <ul>
                {menuData.map((menuItem) => (
                <li key={menuItem.id}>
                    <a href={menuItem.url}>{menuItem.label}</a>
                </li>
                ))}
            </ul>
        </nav>
    </>
  )
}
