### Apa itu CVme?
CVme adalah website pembuat CV online yang mempermudah dan mempercepat pembuatan CV dengan pilihan beragam template/tema.

------------

 ### Default akun untuk testing
	
**Admin Default Account**
- Email: admin@gmail.com
- Password: password123

------------

## Install

1. **Clone Repository**
```bash
git clone https://github.com/zidandff/cvme.git

cd cvme

composer install

copy .env.example .env
```

2. **Buka ```.env``` lalu ubah baris berikut sesuai dengan database yang ingin dipakai**
```
DB_PORT=3306
DB_HOST=<YOUR DATABASE HOST>
DB_DATABASE=<YOUR DATABASE NAME>
DB_USERNAME=<YOUR DATABASE USERNAME>
DB_PASSWORD=<YOUR DATABASE PASSWORD>
```

3. **Instalasi website**
```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link
```

4. **Jalankan website**
```bash
php artisan serve
```
