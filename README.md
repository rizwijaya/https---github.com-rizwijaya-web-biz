# Bizcar Venicle Rental
---
 
BizCar adalah aplikasi pemesanan, pelayanan dan pengelolaan Rental kendaraan secara elektronik berbasis Website. 
Dimana dalam aplikasi ini nantinya customer dapat melakukan pemesanan rental kendaraan secara online tanpa datang ketempat serta mempermudah pegawai dalam pengelolaan jasa rental.

Pada Website Aplikasi Bizcar dibagi menjadi tiga user yaitu Admin, Pegawai, dan pelanggan yang menerapkan sistem login multiuser.

---
## Cara Menggunakan dan memasang Website Bizcar Venicle Rental

1. Setting database yang terletak pada folder app/config/config.php
    ```
    define('DB_HOST', 'localhost'); //Host Database
    define('DB_USER', 'root'); //Username Database
    define('DB_PASS', ''); //Password Database
    define('DB_NAME', 'bizcar'); //Nama Database
    ```
    
2. Setting URL halaman sesuai dengan yang digunakan pada file config yang terletak di app/config/config.php
    ```
    define('BASEURL', 'http://localhost:81/rental/public');
    ```

3. Gunakan data Login Default berikut untuk melakukan login ke Website Bizcar

    - Admin :
       - Username : admin
       - Password : Bizcar123
    - Pegawai :
       - Username : pegawai
       - Password : Bizcar123
    - Pelanggan :
       - Username : pelanggan
       - Password : Bizcar123

4. Website Bizcar Venicle Rental Siap untuk digunakan.


---
## Tersedia juga berbagai fitur menarik yaitu sebagai berikut:

#### Fitur Admin :

- Kelola Kendaraan :
  - Daftar Kendaraan
  - Detail Kendaraan
  - Tambah, edit, dan hapus Kendaraan
- Kelola Tipe Kendaraan :
  - Tambah Tipe Kendaraan
  - Edit Tipe Kendaraan
  - Hapus Tipe Kendaraan
- Laporan Transaksi
- Data Pelanggan dan Pegawai
- Tambah Pengguna Admin, Pegawai, dan Pelanggan

#### Fitur Pegawai :
- Kelola Kendaraan :
  - Daftar Kendaraan
  - Detail Kendaraan
  - Tambah, edit, dan hapus Kendaraan
- Kelola Pembayaran :
  - Pembayaran Masuk
  - Transaksi
  - Laporan Transaksi
- Data Pelanggan

#### Fitur Pelanggan :
- Daftar Kendaraan
- Cari Kendaraan
- Checkout Kendaraan
- Pesan Kendaraan
- Kelola Pembayaran

---
## Halaman Utama Bizcar
![Halaman utama Bizcar](https://raw.githubusercontent.com/rizwijaya/web-biz/master/Home.png)

