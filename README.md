# TSG Assessment
Hi there!
Welcome to my submission for the TSG Skill Assessment for the IT Application Development and Support position.

This repository contains my solution to the assessment, including:

The Laravel project to display car models, their manufacturers, and the date of creation.
The database schema and data exported as tsg_assessment.sql.
For more details, I have also included the Skill Assessment L1_AhmadRusyaidi.pdf, which provides an answer schema and further explanation of the steps I’ve taken to complete this assessment.

What's Included
Laravel Project: The complete Laravel framework and implementation files are included in this repository.
Database File: The database/tsg_assessment.sql file is provided for database setup.

How to Set Up
Clone the Repository:

bash
Copy code
git clone https://github.com/your-username/tsg-assessment.git
cd tsg-assessment
Install Dependencies:
Run the following command to install all required Laravel dependencies:

bash
Copy code
composer install
Environment Configuration:
Copy the .env.example file to .env and configure your database connection:

bash
Copy code
cp .env.example .env
Update the .env file with your database credentials:

makefile
Copy code
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tsg_assessment
DB_USERNAME=root
DB_PASSWORD=yourpassword
Set Up the Database:
Import the database/tsg_assessment.sql file into your MySQL database.

Generate Application Key:

bash
Copy code
php artisan key:generate
Run the Application:
Start the Laravel development server:

bash
Copy code
php artisan serve
The application will be available at http://127.0.0.1:8000/cars.

Thank you for taking the time to review my submission! I hope you’ll find it well-structured and easy to follow. Should you need further clarification, feel free to refer to the attached PDF for detailed explanations.

Best regards,
Ahmad Rusyaidi
