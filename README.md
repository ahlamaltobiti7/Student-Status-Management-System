#  Student Status Management System

##  Project Overview

The **Student Status Management System** is a simple web application developed using **HTML, CSS, JavaScript, PHP, and MySQL**. The system allows users to add student records, store them in a MySQL database, display all records in a table, and toggle each student's status between **0** and **1**.

This project demonstrates the integration between a web interface, server-side scripting, and database management using PHP and MySQL.

---

#  Project Objectives

- Build a dynamic web application using PHP.
- Connect the website to a MySQL database.
- Store submitted student information.
- Display all stored records.
- Toggle the status value between **0** and **1**.
- Update the displayed data immediately after toggling.

---

#  Technologies Used

- HTML5
- CSS3
- JavaScript
- PHP
- MySQL
- phpMyAdmin
- XAMPP
- Visual Studio Code


---

#  Project Structure

```
StudentStatus/
│── index.php
│── insert.php
│── toggle.php
│── db.php
│── style.css
└── script.js
```

---

#  File Description

## db.php

This file creates the connection between the PHP application and the MySQL database.

Responsibilities:

- Connect to MySQL.
- Select the student_db database.
- Report an error if the connection fails.

---

## index.php

This is the main page of the project.

Features:

- Displays the student registration form.
- Allows the user to enter the student's name and age.
- Displays all records from the database.
- Shows the current status.
- Provides a Toggle button for every student.

---

## insert.php

This file receives the submitted form data.

Responsibilities:

- Read Name and Age.
- Insert the data into the students table.
- Set the default status to **0**.
- Redirect back to the main page.

---

## toggle.php

This file updates the student's status.

Responsibilities:

- Receive the student's ID.
- Change Status:
  - 0 → 1
  - 1 → 0
- Redirect back to the main page to display the updated value immediately.

---

## style.css

Responsible for the website appearance.

Includes:

- Page layout.
- Table styling.
- Button styling.
- Input field styling.

---

## script.js

Provides client-side validation.

Checks:

- Name field is not empty.
- Age field is not empty.
- Age must be greater than zero.

---

#  Database

Database Name

```
student_db
```

Table Name

```
students
```

Table Structure

| Column | Type |
|---------|------|
| id | INT (Primary Key) |
| name | VARCHAR(100) |
| age | INT |
| status | TINYINT |

---

#  System Workflow

1. The user enters a student's name.
2. The user enters the student's age.
3. The Submit button sends the data to PHP.
4. PHP stores the data inside MySQL.
5. All records are displayed in the table.
6. Clicking the Toggle button changes the student's status.
7. The page reloads automatically to display the updated status.

---

#  Project Screenshots

## Website Interface

> Insert a screenshot of the main webpage here.

Example:

```
images/website.png
```

---

## Database Table

> Insert a screenshot of the students table from phpMyAdmin here.

Example:

```
images/database.png
```

---

#  Project Demonstration

The demonstration video shows:

- Opening the website.
- Adding new student records.
- Saving data to the database.
- Displaying all students.
- Using the Toggle button.
- Updating the student's status.

---

#  Website Link

You can access the project here:

```
http://localhost/StudentStatus/index.php
```

#  How to Run the Project

1. Install XAMPP.
2. Start Apache and MySQL.
3. Copy the project folder into:

```
C:\xampp\htdocs\
```

4. Open phpMyAdmin.

5. Create a database named:

```
student_db
```

6. Create the students table.

7. Open your browser.

8. Visit:

```
http://localhost/StudentStatus/
```

---

#  Skills Gained

Through this project, I learned how to:

- Build dynamic web pages using PHP.
- Connect PHP with MySQL databases.
- Store and retrieve data.
- Perform CRUD-related operations.
- Use JavaScript for form validation.
- Design web interfaces using CSS.
- Test web applications locally using XAMPP.
- Organize project files.
- Publish projects on GitHub.

---
