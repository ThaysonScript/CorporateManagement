# CorporateManagement
>This project is a web application developed in Laravel that allows you to manage the inventory of a store.
>
>With it, you can register products, suppliers, customers, and control stock in and out.

# Screenshots
![Landing](https://github.com/ThaysonScript/CorporateManagement/blob/main/screenshots/Captura%20de%20tela%202023-07-29%20162804.png)
![Login](https://github.com/ThaysonScript/CorporateManagement/blob/main/screenshots/Captura%20de%20tela%202023-07-29%20163016.png)
![Registro](https://github.com/ThaysonScript/CorporateManagement/blob/main/screenshots/Captura%20de%20tela%202023-07-29%20163043.png)
![Home](https://github.com/ThaysonScript/CorporateManagement/blob/main/screenshots/Captura%20de%20tela%202023-07-29%20163112.png)

### More Screenshots here: https://github.com/ThaysonScript/CorporateManagement/tree/main/screenshots

# Install and Run the Project
Running the Inventory Manager on your local machine is an extremely simple task.

## Global Dependencies
You need to have three main dependencies installed:

- PHP 8.x
- Web server, usually (Apache - Nginx)
- Relational database, usually (Mysql - PostgreSql)

## Installing a Quick Environment
The listed services download and install the above dependencies:
- xampp
- laragon (individually download PHP 8.x and configure it in the application)

# Local Dependencies
So, after cloning the repository `git clone`, don't forget to install the project's local dependencies:
```
composer install
```

## Configure your database
Create a `.env` file at the root of the project, copying the content from the `.env.example` file

- Configure the connection to your preferred database
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=InventoryManager-Laravel
DB_USERNAME=configure-your-own-username
DB_PASSWORD=configure-your-own-password
```

# Secure Environment Configuration
- The application uses sensitive information, such as the application's encryption key and the database connection information.

- You can configure these variables in the `.env` file by creating your own database, user, and password.

- To generate the encryption key, run the command:
```
php artisan key:generate
```

## Do you want to configure a custom host?
- You can configure a custom host for your environment:
create a new `.conf` file in `server/conf/example.conf`
```
<VirtualHost *:80>
    ServerName yourhost.local
    DocumentRoot /path/to/directory
    <Directory /path/to/directory>
        Options Indexes FollowSymLinks
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

- ServerName = 'host name';
- DocumentRoot = 'root project directory - configure to point to the public folder of Laravel';
- Directory /path/to/directory = 'point to the public folder of your Laravel app';

- If you are on Linux, enable the custom host with
`sudo a2ensite myhost.conf`

- If you are on Windows, enable the custom host in the httpd.conf file with
`Include "C:/path/to/yourhost.conf"`

- Optionally, add the host to your machine so that it is recognized by the defined name
`127.0.0.1 yourhost.local`

- Windows: `C:\Windows\System32\drivers\etc\hosts`
- Linux: `/etc/hosts`

## Start the application in development mode with
- Start your local server and database and type in the project's root:
`php artisan serve`

- or, if a host is configured, enter the URL of your host on the server, for example,
`yourHost.com`

- and migrate your fake data to analyze the initial application with
`php artisan migrate`
`php artisan db:seed`

- your test login will be
- email: `usuario@usuario.com`
- password: `123456`

# Technologies Used in the Application
- Laravel as the PHP framework;
- Bootstrap 5 for the interface design;
- MySQL as the relational database.

# System Requirements
- PHP 8.1 or higher;
- Laravel 10x;
- Apache or Nginx web server;
- MySQL 8.0 or higher.

# Contributing
## Contributions are welcome!
To contribute to this project, follow these steps:
- Create a fork of the repository.
- Create a branch with your changes
```git checkout -b my-new-feature```

- Commit your changes
```git commit -am 'Add some feature'```

- Push to your branch
```git push origin my-new-feature```

- Create a new Pull Request.

# License
This project is licensed under the `MIT License` - see the [LICENSE](https://github.com/ThaysonScript/GerenciarEstoque-Laravel/blob/main/LICENSE) file for more details.
