<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- 1. setup laravel with data base connection -->
    <h1>Procedure for Laravel</h1>
    <ol>
        <li>First install the xampp and start the server</li>
        <li>then go to xampp (where installed) => htdocs folder or create an another folder (e.g projects) => open cmd and run "composer create-project laravel/laravel project-name" </li>
        <li>then go to the project-name folder run cmd & command "php artisan serve"</li>
        <li>then click the localhost</li>
        <li>to delete all the data start the project in vs code then go to view folder => welcome.blade.php page => delete all the code and set "Hello World"</li>
        <li>to add route for test go to the Routes folder and open web.php then add a route like 
        "Route::get('/test', function () {
            return view('test');
        });"</li>
        <li>then create a page in a view folder according to the name test.blade.php.</li>
        <li>to check the page run cmd & command "php artisan serve" then go to http://127.0.0.1:8000/test</li>

    </ol>
    <ol>
        <h3>Database Connection</h3>
        <li>to connect the database from xampp start the MySQL and press admin which will redirect to the phpadmin page then press new and create a database with name, here we named "crud" </li>
        <li>then copy the name of the created db and go to the env file and change the database connection sqlite to mysql and uncomment the following lines and change the DB_DATABASE=crud</li>
        <li>now reload the http://127.0.0.1:8000/test link but it will show error</li>
        <li>to solve that open the terminal and type "php artisan migrate" which will create table in the database 'crud' and solve the error</li>
    </ol>

    <h3>Concept of Model, View, Controller</h3>
    <ol>
        <li>Model: It is a class that represents a database table and contains the logic for interacting with the database. model এর মাধ্যমে database এ connection হয়ে  data read, store করা হয়।</li>
        <li>Controller: It is a class that handles the requests from the user and coordinates the interaction between the model and view. controller এর মাধ্যমে request হয়ে model এ যায় এবং data read, store করা হয়। যদি data পায় তাহলে সেটা আবার model controller এ পাঠায়, controller এর মাধ্যমে view এ পাঠায় যার মাধ্যমে browser এ দেখা যায়।</li>
        <li>View: It is a file that contains the HTML markup for the user interface.</li>
    </ol>

    <h3>How to create post connection in controller</h3>
    <p>in terminal run "php artisan make:model Post -mc" here mc means create migration and controller.</p>
    <p>after that we will find in Http folder there is a PostController created, In Model folder there is a Post model created and in migration folder there is a migration file created named "...create_posts_table.php"</p>
    <p>Now follow the flowchart from 1.1 </p>

    <div>
                <a href="/" class="bg-[#1b1b18] text-[#FDFDFC] px-4 py-2 rounded">
                    Home
                </a>
            </div>
</body>
</html>