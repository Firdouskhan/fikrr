
# **Dev installation guide**

### **Requirements**

* Composer [Download](https://getcomposer.org/)  or just run `brew install composer`
* PHP `brew install php` (if not installed)
* MySQL `brew install mysql` or [Download MySQL](https://dev.mysql.com/downloads/mysql/)
* The repo has a laravel instance.

Now, [Clone ](https://github.com/fikrr/fikrr.git) the repository

* Create a database with any name.

* Change ENV variables.

Then,

`cd fikrr`

`composer install`

`php artisan key:generate`

To run this project, inside the project directory run

`php artisan serve`

or

`your_local_domain/fikrr/public/`


