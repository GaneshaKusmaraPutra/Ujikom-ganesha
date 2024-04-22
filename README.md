# WEB GALLERY

## Tentang Website

Simpelnya ini hanyalah Web yang saya buat dengan mengikuti style instagram, facebook dan twitter namun versi low budget yang sangat minim. meskipun tidak terlalu mirip, tapi fungsi yang ditonjolkan dari web ini adalah mampu memuat gallery dan user lain bisa melihat gambar apa yang kita posting.

## Fitur

Untuk Fitur masih minim:
- sign up
- log in
- log out
- multiuser
- add poto
- add album
- edit profile
- add comment
- edit comment
- delete comment
- like
- dll

## Tampilan Website

![Screenshot (309)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/98199efd-e9f7-44b4-bb0b-73e0ed147f74)

![Screenshot (310)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/5acee0b6-ed6d-46bc-8102-1cd6c80c6f98)

![Screenshot (311)](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/fd9d62ad-c02c-47ba-8a4c-60165edd4a8b)


## ERD, Relasi dan UML Use Case

- ERD

![ERD](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/ee228617-af0e-4626-a3ef-90c7cc2d7b9b)

- Relasi

![RELASI](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/3a81fab5-e51d-4b23-aa3b-1a5b1ebc45cd)

- UML

![UML](https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha/assets/105642339/5942ae32-dc44-4d81-8f20-be848aa313ba)

## Prasyaratan

- PHP 8.2.8 & Web Server (Apache, Lighttpd, atau Nginx)
- Database (MariaDB dengan v11.0.3 atau PostgreSQL)
- Web Browser (Firefox, Safari, Opera, Microsoft Edge dll)

## Instalasi
1. Clone Repository
```
https://github.com/GaneshaKusmaraPutra/Ujikom-ganesha
```

2. Install Composer
```
composer install
```
atau
```
composer update
```

3. Copy .Env
```
copy .env.example .env
```

4. Setting database di .env
```
DB_PORT=3306
DB_DATABASE=laravel_gallery
DB_USERNAME=root
DB_PASSWORD=
```

5. Generate key
```
php artisan key:generate
```

6. Jalankan migrate dan seeder
```
php artisan migrate --seed
```

7. Buat Storage Link
```
php artisan storage:link
```

8. jangan lupa menginstall NPM
```
npm install
```
lalu jalankan
```
npm run dev
```

8. Jalankan Serve
```
php artisan serve
```
