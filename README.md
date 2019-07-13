# SimpleSAMLphp LaravelAuth
SimpleSAMLphp authsource that uses Laravel 5 users table for authentication

## Add Login Attempts
Add login attempts field to users table as this does not use the native Laravel attempts method. 
An example Laravel migration file is included

## usage
```php
'laravelmysql' => [
    'laravelmodule:LaravelAuth',
    'dsn' => 'mysql:host=127.0.0.1;dbname=homestead',
    'username' => 'homestead',
    'password' => 'MySuperDBpass',
    'uidfield' => 'email', 
],
```

..* dsn = A PHP PDO dsn. UTF8 is set depending on RDBMS (pgsql or mysql)

..* username = Database username

..* password = Database password

..* uidfield = Table field that represents the username used in your Laravel auth
