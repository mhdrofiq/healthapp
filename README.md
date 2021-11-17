# ApplicationDevelopment

This Repository is dedicated to our project in Application Development subject

<<<<<<< HEAD
## Installation
=======

Before you clone the repo, please make sure you have installed Git, Composer, Laravel, MySQL, and the editor of your choice to work on this project.

Clone the repository from here https://github.com/mhdrofiq/healthapp

Switch to the repo folder

```bash
    cd healthapp
```

Install all the dependencies using composer

```bash
    composer install
```

Copy the example env file and make the required configuration changes in the .env file

```bash
    cp .env.example .env
```

Generate a new application key

```bash
    php artisan key:generate
```

Run the database migrations (**Set the database connection in .env before migrating**)
To set a database connection, if you are using MySQL, open MySQL command line app then run the following command to create a database called healthapp in your computer.

```bash
    create database healthapp
```

Then in the terminal where you have switched to the repo folder, run

```bash
    php artisan migrate
```

Then to start the local development server

```bash
    php artisan serve
```