Bible Website Laravel Project
This project is a web application built with Laravel that provides users with access to Bible scriptures, study tools, and related resources. It utilizes a local MySQL database for data storage.

Features
Scripture Search: Quickly search and retrieve Bible verses.

Daily Devotionals: Access daily devotional content.

Study Tools: Utilize commentaries, concordances, and other study aids.

User Accounts: Register and log in to personalize your experience.

Prerequisites
Before setting up the project, ensure you have the following installed on your local development environment:

PHP (version 7.4 or higher)

Composer

MySQL

Node.js and npm

Laravel

Alternatively, you can use a local development environment such as XAMPP or WAMP that includes PHP, MySQL, and Apache.

Installation
Clone the Repository:

bash
Copy
Edit
git clone https://github.com/asystole_2/bible-website-laravel.git
cd bible-website-laravel
Install Dependencies:

Install PHP dependencies using Composer:

bash
Copy
Edit
composer install
Install JavaScript dependencies using npm:

bash
Copy
Edit
npm install
Environment Configuration:

Duplicate the .env.example file and rename it to .env:

bash
Copy
Edit
cp .env.example .env
Generate the application key:

bash
Copy
Edit
php artisan key:generate
Configure the .env file to match your local environment settings. Ensure the database connection settings are as follows:

env
Copy
Edit
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelblog
DB_USERNAME=root
DB_PASSWORD=
Database Setup:

Create a new MySQL database named laravelblog.

If you don't have a MySQL user set up, you can create one and grant privileges:

sql
Copy
Edit
CREATE USER 'bible_user'@'localhost' IDENTIFIED BY 'password';
CREATE DATABASE bible_db;
GRANT ALL PRIVILEGES ON bible_db.* TO 'bible_user'@'localhost';
FLUSH PRIVILEGES;
Update the .env file with the new database credentials:

env
Copy
Edit
DB_DATABASE=bible_db
DB_USERNAME=bible_user
DB_PASSWORD=password
Run migrations to set up the database schema:

bash
Copy
Edit
php artisan migrate
(Optional) Seed the database with initial data:

bash
Copy
Edit
php artisan db:seed
Storage Link:

Create a symbolic link to the storage folder:

bash
Copy
Edit
php artisan storage:link
Compile Assets:

Compile CSS and JavaScript assets:

bash
Copy
Edit
npm run dev
For production environments, use:

bash
Copy
Edit
npm run prod
Start the Development Server:

Serve the application locally:

bash
Copy
Edit
php artisan serve
By default, the application will be accessible at http://127.0.0.1:8000. If port 8000 is in use, you can specify a different port:

bash
Copy
Edit
php artisan serve --port=9000
Then access the application at http://127.0.0.1:9000.

Testing
To run the test suite:

bash
Copy
Edit
php artisan test
Ensure you have the necessary testing environment configured in your .env.testing file.

Deployment
When deploying to a production environment:

Set the APP_ENV variable to production in your .env file.

Run migrations and seeders as needed.

Compile assets using npm run prod.

Set up a proper web server configuration (e.g., Apache or Nginx) to serve the application.

Contributing
Contributions are welcome! Please fork the repository and submit a pull request with your changes.

License
This project is open-source and available under the MIT License.
