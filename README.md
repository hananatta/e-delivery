# E-Delivery Project
## General Steps for each task
- Fork the repo (First time only)
- Clone it to your machine (First time only)
- cd to your directory
- Run the following command to install all dependencies and reuquired packages
`composer install`
- Now, run the application via
`php artisan serve`

## Task1
First of all, check that your repo is up to date via run the followig command:
`git pull`
- Create a fresh DB instance in mysql(phpmyadmin), name it 'e_delivery'
- Update .env file in the project, setup DB settings according to your DB.
- Run: `php artisan migrate` , this will create all tables inside your DB.
- Complete migrations of all other tables with proper data types and relashionship.

Notes:
- Do the migration in order of relashionship.
