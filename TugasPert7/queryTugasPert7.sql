-- Fungsi inputPelanggan
CREATE  PROCEDURE inputPelanggan(kode varchar(10),nama_pelanggan varchar(50), jk char(1), tmp_lahir VARCHAR(30), tgl_lahir date, alamat varchar(40), email varchar(45),kartu_id int)
BEGIN
  INSERT INTO pelanggan (kode, nama_pelanggan,jk,tmp_lahir,tgl_lahir,alamat,email,kartu_id)VALUES(kode,nama_pelanggan,jk,tmp_lahir,tgl_lahir,alamat,email,kartu_id);
END
DELIMITER;
call inputPelanggan('011109','Yadi','L','Jakarta','1999-11-11','Jakarta','yadi@gmail.com','1')

select * from pelanggan;
-- Fungsi showPelanggan
CREATE  PROCEDURE showPelanggan()
BEGIN
  SELECT nama_pelanggan, tgl_lahir, alamat FROM pelanggan;
END
DELIMITER ;

call showPelanggan();
-- Fungsi inputProduk
CREATE PROCEDURE inputProduk(kode varchar(10),nama varchar(45), harga_beli DOUBLE, harga_jual double, stok int, min_stok int, jenis_produk_id int)
BEGIN
  INSERT INTO produk (kode, nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id)VALUES(kode,nama,harga_beli,harga_jual,stok,min_stok,jenis_produk_id);
END;
DELIMITER ;
call inputProduk('PS01','Playstation 4',5000000,6000000,10,5,1);

select * from produk;
-- Fungsi showProduk
CREATE  PROCEDURE showProduk()
BEGIN
  select nama, harga_beli, harga_jual from produk;
END

DELIMITER ;
call showProduk();

-- Fungsi totalPesanan
CREATE PROCEDURE totalPesanan()
BEGIN
SELECT YEAR(tanggal) AS tahun, SUM(total) AS total_pesanan FROM pesanan GROUP BY YEAR(tanggal);
END;

DELIMITER;
CALL totalPesanan();

-- Fungsi tampilkan seluruh pesanan 
SELECT pelanggan.nama_pelanggan, pesanan.tanggal, pesanan.total FROM pelanggan INNER JOIN pesanan ON pelanggan.id = pesanan.pelanggan_id;

CREATE VIEW pesanan_produk_view AS SELECT pelanggan.nama_pelanggan, pesanan.tanggal, pesanan.total, produk.nama FROM pelanggan INNER JOIN pesanan ON pelanggan.id = pesanan.pelanggan_id INNER JOIN produk ON pesanan.pelanggan_id = produk.id;