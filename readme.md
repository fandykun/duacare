# DUACARE
### Requirement
- xampp => [download](https://www.apachefriends.org/index.html)
- git => [download](https://git-scm.com/downloads)
- composer => [download](https://getcomposer.org/Composer-Setup.exe)
- php 7.0 >=

### Running locally
- open xampp and start apache and mysql server
- Setting up environment
    - open terminal/command prompt
    - clone to your path
    ```
    git clone https://github.com/fandykun/duacare.git
    ```
    - change directory
    ```
    cd duacare
    ```
    - install modules
    ```
    composer install
    ```
    - ducplicate .env.example and rename to .env
    ```
    cp .env.example .env
    ```
    - generate key
    ```
    php artisan key:generate
    ```
    - link storage
    ```
    php artisan storage:link
    ```
    - open .env file and edit
    ```
    DB_DATABASE=duacare
    DB_USERNAME=root
    DB_PASSWORD=
    ```
- Setting up database
    - open http://localhost/phpmyadmin/
    - create new database, named 'duacare' (without ' ')
    - import existing database from fandy
- from folder duacare (/duacare)
```
php artisan serve
```
- open from http://localhost:8000