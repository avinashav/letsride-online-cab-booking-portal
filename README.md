# letsride-online-cab-booking-portal
---------

**PROJECT IS STILL UNDER CONSTRUCTION PHASE**
more Tables needed to be linked (i.e. cab, driver, ride-history tables)

---------

LetsRide - An online cab booking portal built using HTML , CSS , Javascript and PHP + My-SQL (backend)
The Project was developed for presentation as 6th semester Lab-Project. 
To Run the project, we need to Install Xampp Software for running Apache server and My-SQL for database.

Tables in Database:
1. accounts
2. userdetails

Table "accounts" keep tracks of registered users:
To access booking services one should have valid username and password (should register to get one).

Table "userdetails" stores firstname, lastname, Mobile-number(primary-key), email-id fields during registration process.


HOW TO RUN :
Step 1: Copy all files to "c:/xampp/htdocs/" location.

Step 2: Run XAMPP software, then start Apache and MySql servers.

Step 3: in phpmyadmin create a database called **test1** and then a table **accounts** with 'uname' and 'pass' as table entity, uname (primary-key) and pass should be varchar.
Table **userdetails** with enitities as follows: username(foreign-key), firstname, lastname, mobile-no(primary-key), emailid, all will be varchar(30).

Step 4: in browser address bar type "http://localhost/" and enter, click the project file to run.


SCREENSHOTS:
Index-Page:
![index-page](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/index_page.png)

Register-Page:
![Register-Page](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/signup.png)


Login-Page:
![login-page](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/login.png)

Nearby Outstation Places:
![Outstation-Places](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/places1.png)

Cab Rates:
![rates](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/cab-rates-page.png)

**accounts table:**
![accounts-info](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/accounts.png)

**userdetails table:**
![users-info](https://github.com/avinashav/letsride-online-cab-booking-portal/blob/master/screenshot/userdetails.png)


Project Contributors:
1. **Avinash Kumar** (*avinash.softs@gmail.com*)
2. **Nesar N** (*nnsnesar@gmail.com*)
3. **Deeksha M. Kumar** (*deekshamkumar@gmail.com*)

(6th semester) Web Development Lab Project - April 2018

Department of Information Science and Engineering

The National Institute of Engineering, Mysore, Karnataka.
