[![Gitpod Ready-to-Code](https://img.shields.io/badge/Gitpod-Ready--to--Code-blue?logo=gitpod)](https://gitpod.io/#https://github.com/bigprof-software/online-rental-property-manager) 

# Online Rental Property Manager (ORPM)

![ORPM screenshots](https://cdn.bigprof.com/screencasts/online-rental-property-manager-demo-6.3.gif)

Online rental property manager (ORPM) is a free open source app.
It allows you to manage landlords, rental properties, units, 
applications, leases and tenants. Add all details related to the tenants, i.e. references, 
rental history, employment history and income overview.

ORPM was created using [AppGini](https://bigprof.com/appgini/).
So you can easily customize it to add/remove 
details or any extra functionality to fit your own requirements. 
ORPM is a responsive, multi-user web-based application that you can access from your PC, tablet, 
mobile or any other device. 

#### [⇩ Download the latest release](https://github.com/bigprof-software/online-rental-property-manager/releases/latest) ([_Changelog_](https://github.com/bigprof-software/online-rental-property-manager/releases)) | [![](https://cdn.bigprof.com/appgini-open-source-apps/buy-me-a-coffee.gif) *Buy Me A Coffee!*](https://www.buymeacoffee.com/genedy)

## Features

* Manage applicants and tenants.
* Add, search and manage applications and leases.
* Manage applicants/tenants rental history, employment history and other references.
* Manage landlords, properties, and units.
* Reports (created by [Summary Reports plugin for AppGini](https://bigprof.com/appgini/applications/summary-reports-plugin)):
	* **Applicants by status** review how many new applicants vs. tenants vs. previous tenants do we have.
	* **Applications/leases over time** review the growth of leases and applications over time.
	* **Applications/leases by property** review the growth of demand for each property over time.
	* **Leases by property over time** review the growth of actual leases for each property over time.
	* **Lease value by property over time** check the monthly rental revenue for each property and its growth over time.
* Efficient management of applications status through mass update of multiple applications.
* Quickly view leases starting and ending each month through a calendar view -- also allows adding and editing (created by [Calendar plugin for AppGini](https://bigprof.com/appgini/applications/calendar-plugin)).

This application was created using [AppGini](https://bigprof.com/appgini/),
and therefore it shares the features of any AppGini application as well, including:

* Responsive Bootstrap apps that work beautifully on any device.
* Support for multiple users and user groups, with easy-to-configure per-table permissions.
* Quick and advanced search.
* Export your data to CSV to work on them in Excel or other spreadsheets.
* Import already-existing data from CSV files through a powerful import wizard.

*Disclaimer: AppGini itself is not an open source application,
but: 1. applications generated by AppGini can be distributed as open source with any
license of choice. 2. You don't need to install AppGini in order to use this app.*

---

## Installation

This is a PHP/MySQL web application that you run from a browser. You can install it either locally
on your own PC, or to a web/intranet server.

### 1. Trying it out using Gitpod (requires a github account)

This application is ready to run within the Gitpod IDE.
This will allow you to try the application out and develop it for your needs.
All you will need is a web browser. _Do not use this in production!!!_

**[Launch private demo on Gitpod](https://gitpod.io/#https://github.com/bigprof-software/online-rental-property-manager)**

The app would take a couple of minutes to launch.
Afterwards, you'll see the welcome screen of the app in the right part of the window, where you can start the setup wizard.
When prompted to enter the database name, database username and datatbase password, you should enter `appgini` for all.

Gitpod is intended for previewing the app only, and is _not suitable for use in actual production environments_.

---

### 2. Installing to a PC

#### System requirements

This application can be installed on Windows, Linux and MacOS. Before installing,
you should have the following software set up and running:

* A webserver (Apache, IIS, nginx, ... etc)
* PHP 5.6 or higher.
* MySQL 5.6 and above; or MariaDB 10 and above.

If you don't have the above software installed, we recommend installing
[Xampp latest version](https://www.apachefriends.org/).

#### Installation steps

1. [Download the latest release as a zip file](https://github.com/bigprof-software/online-rental-property-manager/releases/latest).
(Click the *Source code (zip)* link down the page).

2. Extract the contents of the zip file. Then copy the contents of the `app` folder into a folder inside your document root.
For Xampp on Windows, this is usually `C:\xampp\htdocs`
(*[more info about how to find your 'document root'](http://www.karelia.com/sandvox/help/z/Document_Root.html)*).

3. In your web browser, go to: `http://localhost/app-folder/`
(change `app-folder` to the name of the folder inside your document root where you extracted the zip in step 2).

4. You should now see the setup wizard in your browser. Just follow the steps!   
![The setup wizard](https://cdn.bigprof.com/appgini-open-source-apps/setup-wizard-page-1.png)

---

### 3. Installing to a web/intranet server

#### System requirements

This application can be installed on both Windows and Linux servers.
Before installing, make sure your server has the following software:

* PHP 5.6 or higher
* MySQL 5.6 and above; or MariaDB 10 and above.
	
Make sure your have access to a MySQL/MariaDB database.
You might need to set up one in your server control panel.
Please refer to your server documentation or the technical support staff for help on this if needed.

If your server has cPanel installed, here is a
[screencast explaining how to install your application using cPanel](https://bigprof.com/appgini/screencasts/how-to-upload-your-appgini-web-application-to-a-web-server-using-ftp-and-cpanel).

#### Installation steps

1. [Download the latest release as a zip file](https://github.com/bigprof-software/online-rental-property-manager/releases/latest).
(Click the *Source code (zip)* link down the page).

2. Extract the contents of the zip file. Then upload the contents of the `app` folder to a folder inside your server document root.
This might be a folder named `public_html` or `/var/www/html` or something else, based on how your server is set up
(ask your server admin if you need help on that).

3. In your web browser, visit `http://server.com/app-folder/`
(change `server.com` above to the actual domain name or IP address of your server,
and change `app-folder` to the name of the folder inside your document root where
you uploaded the files in step 2).

4. You should now see the setup wizard in your browser. Just follow the steps!

---

## Customization

This application was created using [AppGini](https://bigprof.com/appgini). This means you can easily customize it by
opening the included AXP project file in AppGini. Examples of possible customization you can do from there include:

* [Changing the application theme](https://bigprof.com/appgini/screencasts/how-to-easily-change-your-appgini-application-theme).
* Adding more fields to existing tables, or entirely new tables to fit your use cases.
* Changing the options/behavior of any table/field in your application.
* For more details, check [the AppGini tutorials](https://bigprof.com/appgini/screencasts/).

You can also perform more advanced customization, like adding reports,
changing validation rules, adding business logic, ... etc. through hooks.
Please refer to the [AppGini hooks documentation](https://bigprof.com/appgini/help/advanced-topics/hooks)
for more details.

_Contributions to this project are always welcome :)_
