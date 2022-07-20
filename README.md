# Sample application for ICF Tech Hungary

## Requirements
PHP 8.1+, nodejs 

## Installation notes

```sh
git clone git@github.com:defji/icf2022.git
cp .env.example .env
#edit database credentials in .env file
#set SESSION_DRIVER to 'database'
composer install
php artisan session:table
php artisan migrate:fresh --seed
npm install && npm run dev
php artisan serve
#click on link!
```

## Defined roles

- admin (administrator)
- editor (content-editor)
- user (regular user)

## Pre-Registered users

All passwords are: __user__

- dfj@dfj.hu  (admin)
- user1@dfj.hu (editor, user)
- user2@dfj.hu (editor)
- user3@dfj.hu (user)

©️2022 | Györkös Balázs | www.dfj.hu



