# Mini-Perpus (UTS Framework Programming)

Folder ini berisi bagian aplikasi yang ditulis sendiri. Salin ke project Laravel baru (Laravel 11/12).

## Instalasi
1. composer create-project laravel/laravel mini-perpus
2. Salin folder app/, database/, resources/, routes/ dari zip ini ke project (timpa jika diminta).
3. Buat database MySQL kosong (mis. mini_perpus), lalu atur .env:
   DB_CONNECTION=mysql
   DB_DATABASE=mini_perpus
   DB_USERNAME=root
   DB_PASSWORD=
4. php artisan migrate --seed
5. php artisan serve  ->  http://127.0.0.1:8000

## Uji dengan Tinker
php artisan tinker
>>> App\Models\Book::with('category')->first()->category->name
>>> App\Models\Category::first()->books

## Export database untuk pengumpulan
mysqldump -u root -p mini_perpus > mini_perpus.sql
(letakkan di root project, lalu push ke Git / zip tanpa folder vendor)
