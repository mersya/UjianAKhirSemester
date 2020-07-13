UAS Mersya Efendi

Penjelasan Fungsi

1. Index.php
halaman landing page, berisi halaman login yang mengarah ke fungsi login user

2. login.php
proses login , mengambil data dari database tb_user, jika login berhasil mengarah ke halaman Home, jika gagal login kembali ke index

3. home.php
halaman beranda setelah berhasil login, berisi data pasien Covid19 , select data dari tabel tb_data,action insert, update, delete dan cetak PDF ada disini

4. config.php
setting koneksi ke database

5. form.php
form untuk insert data Covid yang baru ke tb_data

6. proses.php
query untu menjalankan insert data baru ke tb_data

7. form_edit.php
form untuk edit data Covid yang sudah ada di tb_data

8. update.php
query untuk menjalankan update data Covid ke tb_data

9. hapus.php
query untuk menjalankan hapus data Covid dari tb_data

10. cetak.php
mencetak laporan pasien Covid ke dalam bentuk PDF

11. logout.php
query untuk logout session dan kembali ke halaman index.php