<h1 align="center">FingerIn</h1

![GitHub Logo](https://cdn.dribbble.com/users/80284/screenshots/3134610/fingerprint-icon.png)
FingerIn SignIn and Out system is based on web server and its working with Arduino Uno Wi-Fi to comunicate with the system.
The idea is to create an application which can be use from big companies to track their employees, subcontractors or visitors.
The system will automaticly save time in and out and calculate working hours for each person. Also, live statistic will be
available at any time plus reports for each person will be send by email automaticly at the end of the week.

Inspiared from the construction site idustry I decided to build this project which will give many companies the opportunity to have
sign in and out system which is web based and can be control online.

The database structure at the moment is:
Database name | Database tables| Column1 | Column2 | Column3 | Column4 | Column5 | Column6
--------------|--------------|------------|--------|----------|---------|---------|---------
**fingerprint** | **users** | **ID**| **SiteName** | **DatabaseName** | **Username** | **Password** | **Email** |
-| **staff** | **CompanyName** | **DatabaseName**| **AddedBy** | - | - | - | - |

You can download the empty database in order to set up fast your enviroment faster from this link:
https://drive.google.com/open?id=1hWvvAFXZ5FXkdbnkqf6OLz-YKjhzkssb

<h2>In order to login trought the login section, please use the default</h2> 
<h3>Username: admin</h3>
<h3>Password: 12345</h3>

<h2 align="center">Hardware</h2>
For fingerprint scanning we are using Dollatek optical fingerprint scanner with Arduino Uno WiFi Rev2.

Links:

Dollatek optical scanner - https://www.amazon.co.uk/gp/product/B07PRMXXXN/ref=ppx_yo_dt_b_asin_title_o02_s01?ie=UTF8&psc=1

Arduino Uno Wifi Rev2 - https://store.arduino.cc/arduino-uno-wifi-rev2

Arduino project: "Here past the link"
