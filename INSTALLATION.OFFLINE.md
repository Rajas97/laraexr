**1) PROJECT SETUP**

In the command prompt; execute:

✔️ ```cp .env.example .env``` and configure the ```.env``` file accordingly (don't forget to supply OMDB_KEY)

✔️ ```composer install``` to install all the required PHP packages

✔️ ```npm install && npm run dev``` to install all the required JS packages


**2) SERVER SETUP**

***NOTE:: It is assumed you have docker running on your machine***
At this point the server needs to be set up and launched to proceed. Here are some basic commands to manage the server:

✔️ run ```./vendor/bin/sail up -d``` to start the server

✔️ run ```./vendor/bin/sail stop``` to stop the server

with that you will need to start the server by executing ```./vendor/bin/sail up -d``` in your terminal

After that you need to run ```./vendor/bin/sail artisan migrate:fresh --seed``` to migrate all the database tables and get the app ready for use

Upon successful execution of the above command head over to ```http://localhost``` to access your application (You will have to login/register to access the movies feature)
