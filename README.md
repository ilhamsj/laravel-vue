# Sistem Kasir

[<img src="public/images/sistem-kasir.png" title="BrowserStack Logo" alt="BrowserStack Logo" />](public/images/sistem-kasir.png)

## Database Schema (DBMS) | Sistem Kasir

### User

-   id
-   nama
-   email
-   telfon

### Meja

-   id
-   nama

### Kategori

-   id
-   nama

### Produk

-   id
-   nama
-   foto
-   harga
-   kategori_id

### Transaksi

-   id
-   user_id
-   meja_id
-   total
-   bayar

### Transaksi Produk

-   id
-   produk_id
-   transaksi_id
-   jumlah
-   catatan

## Database Schema | Absensi

### Siswa

-   id
-   kelas_id
-   nama
-   jenis kelamin

### Guru

-   id
-   nama
-   jenis kelamin

### Kelas

-   id
-   nama

### Pelajaran

-   id
-   kelas_id
-   guru_id
-   waktu

### Absen

-   id
-   pelajaran_id
-   siswa_id
