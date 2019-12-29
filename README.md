# Sistem Kasir

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
-   total_bayar

### Transaksi Produk

-   id
-   produk_id
-   transaksi_id
-   jumlah
-   catatan
