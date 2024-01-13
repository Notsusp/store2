
## Installation 
Make sure you have environment setup properly. You will need MySQL, PHP8.1, Node.js and composer.

### DE FACUT!
## Integrat sameday API https://github.com/sameday-courier/php-sdk/tree/master
# Asta presupune: 

1. Alegere intre livrare acasa sau la easybox
2. Preluarea punctelor de ridicare easybox (fie prin harta fie prin lista)
3. Alegere intre plata online si ramburs curier.
4. Etc?





Just start xampp and turn on Apache and MySQL.


## To start, You need to do these things in succession:

### Install Laravel Website + API
1. Download the project (or clone using GIT)
2. Copy `.env.example` into `.env` and configure database credentials, as well as stripe secret keys to check online payments.
3. Navigate to the project's root directory using terminal
4. Run `composer install`
5. Set the encryption key by executing `php artisan key:generate --ansi`
6. Run migrations `php artisan migrate --seed`
7. Start local server by executing `php artisan serve`
8. Open new terminal and navigate to the project root directory
9. Run `npm install`
10. Run `npm run dev` to start vite server for Laravel frontend

### Install Vue.js Admin Panel
1. Navigate to `backend` folder
2. Run `npm install`
3. Copy `backend/.env.example` into `backend/.env`
4. Make sure `VITE_API_BASE_URL` key in `backend/.env` is set to your Laravel API host (Default: http://localhost:8000)
5. Run `npm run dev`
6. Open Vue.js Admin Panel in browser and login with
    ```
    admin@7ammakeyourday.ro
    test123
    ```
# The user to run orders with has the following credentials for the frontend site (Default: http://localhost:3000).
    user@user.ro
    test123

# Run this to link storage: php artisan storage:link

# Stripe TestMode data to test functionality:
1. Enter any email
2. Enter 4242 4242 4242 4242 for the card number
3. Enter any date
4. Any CVC
5. Enter any name
6. Click Pay


