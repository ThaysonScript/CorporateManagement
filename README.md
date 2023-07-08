# Laravel Inventory Management System
>This project is a web application developed in Laravel that allows you to manage the inventory of a store.
>
>With it, you can register products, suppliers, customers, and control stock in and out.

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
- Run the database migrations with
```
php artisan migrate
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
Start your local server and database and type in the project's root:
`php artisan serve`

or, if a host is configured, enter the URL of your host on the server, for example,
`InventoryManager.com`

# Technologies Used in the Application
- Laravel as the PHP framework;
- Bootstrap 5 for the interface design;
- MySQL as the relational database.

# System Requirements
- PHP 8.1 or higher;
- Laravel 10x;
- Apache or Nginx web server;
- MySQL 5.7 or higher.

# Features
- [x] User registration with information such as name, email, and password;

- [ ] Product registration with information such as name, description, price, stock quantity, and category;

- [ ] Supplier registration with information such as name, address, phone number, and email;

- [ ] Recording of product entries and exits in the inventory;

- [ ] Reports on products in stock, best-selling products, and most used suppliers.

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
  
# Conclusion
>This is a simple yet complete project for managing the inventory of a store.
>With it, you can register products, suppliers, and customers, as well as control stock in and out.
>We hope this project can be useful for those who need a simple and easy-to-use inventory management solution.
>If you have any questions or suggestions, feel free to contact us or contribute to the project.

# License
This project is licensed under the `MIT License` - see the [LICENSE](https://github.com/ThaysonScript/GerenciarEstoque-Laravel/blob/main/LICENSE) file for more details.

# Contributors
<a href="https://github.com/ThaysonScript/GerenciadorEstoque-Laravel/graphs/contributors">
  <img src="https://contributors-img.web.app/image?repo=ThaysonScript/GerenciadorEstoque-Laravel&max=500" alt="List of contributors" width="100%"/>
</a>
