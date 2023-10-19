# Simple-CRUD-System

<img src="https://user-images.githubusercontent.com/38380539/153727015-b80cf84a-d6d9-4769-b05f-ee11a9ee1869.jpg" >

# CRUD system in PHP and MySQL

This is a simple CRUD (Create, Read, Update, Delete) system in PHP and MySQL for managing a "Task" application.

## Description

This project offers a basic web platform for:

- Add new activities.
- View existing activities.
- Mark tasks as completed.
- Delete tasks.

It was created as a basic example to understand CRUD concepts in a web application using PHP and MySQL.

## Installation

1. **Database Configuration**: Make sure you have a MySQL database configured and created. You can do this via phpMyAdmin or from the command line.

2. **Configuring the Database Connection File**: Edit the database connection variables in the `tasks.php` file:

    ```php
    $dbHost = 'localhost';
    $dbName = 'tasks';
    $dbUser = 'tuo_utente_db';
    $dbPass = 'tua_password_db';
    ```

3. **File Upload**: Upload all files (HTML, PHP) to a directory on your web server.

4. **Accessing the Application**: Access the application through your browser by visiting the main page.

## Usage

- To add a task, enter a title and description and click "Add task".
- To view your tasks, scroll down to see the list of existing tasks.
- To mark a task as completed, click "Update" next to the task.
- To delete an activity, click "Delete" next to the activity.

## Contributions

Contributions are welcome! If you would like to improve this project or resolve any issues, feel free to open a pull request or issue.

## Licence

This project is licensed under the terms of the MIT LICENSE. 
---

Powered by [Sara Caredda](https://github.com/dvsara)
