# Sistem Kasir

[<img src="public/images/sistem-kasir.png" title="BrowserStack Logo" alt="BrowserStack Logo" />](public/images/sistem-kasir.png)

## Database Schema (DBMS)

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
