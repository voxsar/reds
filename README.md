# REDS
Real Time Epidemic Data Relay Service by RAC ACBT [![Build Status](https://travis-ci.org/voxsar/reds.svg?branch=master)](https://travis-ci.org/voxsar/reds)

It's goal is to provide the Sri Lanka Ministry of Health a two communication tool to help diseminate infomation to rural areas, doctors and clinic about oncoming epidemics

- Two Communication Tool
- Simplicity for End Users
- Data Visualization
- Prediction Algoritims

It is primarly designed on HTML5 and PHP, It uses MySQL as the default data source with options for scalability

There are three major submodules within the repository
- Cordova Mobile Application Source
- Electron Desktop Application Source
- Server Side and Data Layer Source

None of the technologies or development source is closed source or hidden for development, anyone can contribute to improving the current design

## Cordova Mobile Application

 Currently the cordova application is coupled together with Framework7 which acts as the UI Framework overlay for the Cordova AP
 
 We selected cordova as the core mobile platform due to app's workflow being able to be fullfilled with cordova's core technologies and also since it provides the ability to deploy to multiple mobile platforms easily, it makes the process of a large scale deployment quite easy
 
 Framework7 UI framework provides the look and feel of both the IOs and Andriod Material Design (as of 2018), which makes it an deployment in terms of UI as very easy task
 
 Although Cordova is a limited platform compared to native development, the app workflow is within the boundary of cordova's limitations
 
 ## Electron Desktop Mode
 
 This application is written on Electron.IO which uses the chrome V8 engine as the based of deloyment, initailly the development including the website as a desktop, but now the development has been further compartmentalized into Desktop and Web Server
 
 This allows the Electron Desktop App to act as the compliment to the Mobile App as both perform similar services, also the electron application deployment allows to target multiple pupular plateforms such as Windows, Mac, and Linux
 
 This application provides similar fucntionality to the mobile application and is targeted to hospitals, clinics with operational staff and is able to send large scale, bulk information and is designed to handling massive patient records
 
 - Development of Core Activity for Hospitals, Clinics
 - Admin and Communication Dashboard for MOH and similar institutions to communicate information
 - Development of Addtional Features such as an Data Visualization Dashboard
 
 ## Web Server
 
 The web server will host the SMS application and the central commucation hub for all platforms mobile, desktop and handle requests from MOH specfic calls and client side calls, alerts etc, it also provides the data visualization data and processing power
 
 It will also maintain the system logs for all the applicaition calls
 
 ### Future API
There is a definient requirement to change how the core server fucntions, and a converstion to a API call based system, allowing other developers and applications to tap into the MOH alert feed thereby solidifing the Web Server API into a standard communication platform for the future

# Goals

- Two way communication for rural devices, complete take over of the rural medical commucation channels
- Integration into the standard model of the medical communication structure
- To become a standard known sri lankan app
- To become recognized and respected communication model similar to amber alerts in developed countries

# Installation

The repo contains the Cordova Application and the Web System, Server and all the related componenets that is required to start a stable Relay Service Network

## Mobile Application Node

Following are simple guidelines on how the mobile application cordova platform sources can be built

```bash

```

## SMS Application Node

## Server Application
