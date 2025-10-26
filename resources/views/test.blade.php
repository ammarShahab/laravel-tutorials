<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Procedure for Laravel</h1>
    <ol>
        <li>First install the xampp and start the server</li>
        <li>then go to xampp => htdocs folder or create an another folder (e.g projects) => open cmd and run "composer create-project laravel/laravel project-name" </li>
        <li>then go to the project-name folder run cmd & command "php artisan serve"</li>
        <li>then click the localhost</li>
        <li>to delete all the data start the project in vs code then go to view folder => welcome.blade.php page => delete all the code and set "Hello World"</li>
        <li>to add route for test go to the Routes folder and open web.php then add a route like 
        "Route::get('/test', function () {
            return view('test');
        });"</li>
        <li>then create a page in a view folder according to the name test.blade.php.</li>
        <li>to connect the database start the MySQL and press admin which will redirect to the phpadmin page</li>
    </ol>
</body>
</html>