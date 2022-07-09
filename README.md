## Tampilan Mobile

<img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/m1.png" width="200"> <img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/m2.png" width="200"> <img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/m3.png" width="200">

## Tampilan Desktop

<img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/d1.png" width="400"> <img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/d2.png" width="400"> <img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/d3.png" width="400"> <img src="https://github.com/rizkyadiryanto14/Laravel_Project/blob/main/d4.png" width="400">

## Persiapan

1. **Install composer terbaru melalui link berikut ini <a href="https://getcomposer.org/download/">composer</a>**
2. **Install xampp versi terbaru melalui link beriku ini <a href="https://www.apachefriends.org/download.html">xampp</a>**
3. **Yang paling penting siapkan snack sama secangkir teh kak, karena menunggu itu menyebalkan wkwkwk**

## Install

1. **Clone Repository**

```bash
git clone https://github.com/rizkyadiryanto14/Laravel_Project.git
cd folder
composer install
cp .env.example =>  .env
```

2. **Buka `.env` lalu ubah baris berikut sesuai dengan databasemu yang ingin dipakai**

```bash
DB_PORT=3306
DB_DATABASE=siakad
DB_USERNAME=root
DB_PASSWORD=
```

3. **Export Database siakad_laravel manual**

```
Import siakad_laravel.sql kedalam xampp
bisa juga menggunakan command dibawah ini jika ingin menggunakan database kosong
```

4. **Instalasi website**

```bash
php artisan key:generate
php artisan migrate --seed
```

5. **Jalankan website**

```bash
php artisan serve
```

**Admin Default Account**

- email: admin@gmail.com
- Password: 12345678

**Guru Default Account**

- email: guru@gmail.com
- password: 12345678

**Siswa Default Account**

- email: siswa@gmail.com
- password: 12345678

**KepalaSekolah Default Account**

- email : kepsek@gmail.com
- Password: 12345678

---
