# Website for a cake shop
The project's purpose is developing a cake selling website. Users can add cake into their cart and pay it, and users can perform that actions without login.

## Start project

Install all the dependencies using composer, npm

    composer install
    npm install

Copy the example env file and make the required configuration changes in the .env file

    cp .env.example .env

Generate a new application key

    php artisan key:generate

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate
    
Compile assets
    
    npm run watch

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000
