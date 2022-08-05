# file-auth

Driver otentikasi berbasis file untuk rakit framework.


## Apa Gunanya?

Ada kalanya, anda hanya memerlukan satu atau dua buah akun di situs dan datanya sangat jarang diubah,
yang biasanya digunakan untuk mengakses halaman yang diproteksi password, atau sejenisnya.

Paket ini mengizinkan anda untuk mendefinisikan data login user didalam file konfigurasi,
sehingga sangat mudah untuk menambah, mengubah, maupun menghapus user, tanpa perlu koneksi database!


## Instalasi

Jalankan perintah ini di terminal anda:

```bash
php rakit package:install file-auth
```

Buka file `application/packages.php` dan tambahkan:

```php
'file-auth' => ['autoboot' => true],
```

Buka `application/config/auth.php` dan ubah konfigurasi `driver` menjadi seperti ini:

```php
'driver'   => 'file',
```

Kemudian, anda sudah dapat menggunakannya seperti driver otentikasi bawaan rakit!


## Mengelola User

Untuk menambah atau menghapus user, buka file `packages/file-auth/config/users.php` dan sesuaikan
datanya mengikuti data default di file tersebut.

Anda boleh menambahkan data lain kedalam file konfigurasi tersebut,
data tambahan tersebut akan bisa diakses via method `Auth::user()`.

**Penting: Untuk alasan kemananan, pastikan untuk mengubah data akun default di file konfigurasi**
