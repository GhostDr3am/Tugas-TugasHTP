-- Soal 1
-- 1.	Tampilkan produk yang asset nya diatas 20jt
SELECT * FROM produk WHERE harga_beli * stok > 20000000;
-- 2.	Tampilkan data produk beserta selisih stok dengan minimal stok
SELECT SUM(stok - min_stok) as selisih from produk;
-- 3.	Tampilkan total asset produk secara keseluruhan
SELECT sum(stok) as total_asset from produk;
-- 4.	Tampilkan data pelanggan yang lahirnya antara tahun 1999 sampai 2004
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) BETWEEN 1999 AND 2004;
-- 5.	Tampilkan data pelanggan yang lahirnya tahun 1998
SELECT * FROM pelanggan WHERE YEAR(tgl_lahir) = 1998;
-- 6.	Tampilkan data pelanggan yang berulang tahun bulan agustus
SELECT * FROM pelanggan WHERE MONTH(tgl_lahir) = 8;
-- 7.	Tampilkan data pelanggan : nama, tmp_lahir, tgl_lahir dan umur (selisih tahun sekarang dikurang tahun kelahiran)
SELECT nama_pelanggan, tmp_lahir, tgl_lahir, YEAR(NOW()) - YEAR(tgl_lahir) as umur from pelanggan;

-- Soal 2
-- 1.	Berapa jumlah pelanggan yang tahun lahirnya 1998
SELECT COUNT(*) as jumlah_pelanggan from pelanggan WHERE YEAR(tgl_lahir) = 1998;
-- 2.	Berapa jumlah pelanggan perempuan yang tempat lahirnya di Jakarta
SELECT COUNT(*) as jumlah_pelanggan from pelanggan WHERE tmp_lahir = 'Jakarta' AND jk = 'Perempuan';
-- 3.	Berapa jumlah total stok semua produk yang harga jualnya dibawah 10rb
SELECT SUM(stok) as total_stok from produk WHERE harga_jual < 10000;
-- 4.	Ada berapa produk yang mempunyai kode awal K
SELECT COUNT(*) as jumlah_produk from produk WHERE  nama LIKE 'K%';
-- 5.	Berapa harga jual rata-rata produk yang diatas 1jt
SELECT AVG(harga_jual) as harga_jual_rata_rata from produk WHERE harga_beli * stok > 1000000;
-- 6.	Tampilkan jumlah stok yang paling besar
SELECT MAX(stok) as stok_terbesar from produk;
-- 7.	Ada berapa produk yang stoknya kurang dari minimal stok
SELECT COUNT(*) as jumlah_produk from produk WHERE stok < min_stok;
-- 8.	Berapa total asset dari keseluruhan produk
SELECT SUM(harga_beli * stok) as total_asset from produk;

-- Soal 3
-- 1.	Tampilkan data produk : id, nama, stok dan informasi jika stok telah sampai batas minimal atau kurang dari minimum stok dengan informasi ‘segera belanja’ jika tidak ‘stok aman’.
select id, nama, stok, case WHEN stok < min_stok THEN 'segera belanja' ELSE 'stok aman' END as informasi from produk;
-- 2.	Tampilkan data pelanggan: id, nama, umur dan kategori umur : jika umur < 17 → ‘muda’ , 17-55 → ‘Dewasa’, selainnya ‘Tua’
SELECT id, nama_pelanggan, YEAR(NOW()) - YEAR(tgl_lahir) as umur, CASE WHEN YEAR(NOW()) - YEAR(tgl_lahir) < 17 THEN 'muda' WHEN YEAR(NOW()) - YEAR(tgl_lahir) BETWEEN 17 AND 55 THEN 'dewasa' ELSE 'tua' END as kategori_umur from pelanggan;
-- 3.	Tampilkan data produk: id, kode, nama, dan bonus untuk kode ‘TV01’ →’DVD Player’ , ‘K001’ → ‘Rice Cooker’ selain dari diatas ‘Tidak Ada’
SELECT id, kode, nama, CASE WHEN kode = 'TV01' THEN 'DVD Player' WHEN kode = 'K001' THEN 'Rice Cooker' ELSE 'Tidak Ada' END as bonus from produk;

-- Soal 4
-- 1.	Tampilkan data statistik jumlah tempat lahir pelanggan
SELECT tmp_lahir, COUNT(*) as jumlah from pelanggan GROUP BY tmp_lahir;
-- 2.	Tampilkan jumlah statistik produk berdasarkan jenis produk
SELECT jenis_produk_id, COUNT(*) as jumlah from produk GROUP BY jenis_produk_id;
-- 3.	Tampilkan data pelanggan yang usianya dibawah rata usia pelanggan
SELECT * FROM pelanggan WHERE YEAR(NOW()) - YEAR(tgl_lahir) < (SELECT AVG(YEAR(NOW()) - YEAR(tgl_lahir)) FROM pelanggan);
-- 4.	Tampilkan data produk yang harganya diatas rata-rata harga produk
SELECT * FROM produk WHERE harga_beli * stok > (SELECT AVG(harga_beli * stok) FROM produk);
-- 5.	Tampilkan data pelanggan yang memiliki kartu dimana iuran tahunan kartu diatas 90rb
SELECT * FROM pelanggan WHERE kartu_id IN (SELECT id FROM kartu WHERE iuran > 90000);
-- 6.	Tampilkan statistik data produk dimana harga produknya dibawah rata-rata harga produk secara keseluruhan
SELECT * FROM produk WHERE harga_beli * stok < (SELECT AVG(harga_beli * stok) FROM produk);
-- 7.	Tampilkan data pelanggan yang memiliki kartu dimana diskon kartu yang diberikan diatas 3%
SELECT * FROM pelanggan WHERE kartu_id IN (SELECT id FROM kartu WHERE diskon > 0.03);
