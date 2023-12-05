# pemesanan-kendaraan-test

Database : mysql-8.0.30
php : php-8.1.10
framework : Laravel V.8

Cara install

git clone https://github.com/MRSugara/pemesanan-kendaraan-test.git

composer install

php artisan migrate

php artisan db:seed

php artisan key:generate

Tata Cara Approved

1. Admin tidak memiliki hak akses atas approve.
2. Approve hanya bisa dilakukan oleh kepala bagian masing masing divisi dan kepala bagian administrasi.
3. status approve akan di setujui apa bila 2 Kepala bagian(masing masing dan administrasi), apabila hanya satu yang menyetujui maka akan terlihat belum disetujui oleh 2 pihak kepala bagian.

Pembuatan akun baru

1. Registrasi seperti biasa
2. Login dengan akun Admin yang terdapat dibawah
3. Masuk sidebar user, lalu approve akun yang sudah anda buat

//admin
'name' => 'Admin',

'password' => 'password',

//Kepala Bagian Administrasi

'name' => 'yanti',

'password' => 'password',

//Kepala Bagian Keuangan

'name' => 'yanto',

'password' => 'password',

//Kepala Bagian Marketing

'name' => 'suryana',

'password' => 'password',
