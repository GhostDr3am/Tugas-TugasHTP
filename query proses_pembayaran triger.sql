CREATE TRIGGER proses_pembayaran AFTER UPDATE on pembayaran FOR EACH ROW
BEGIN 
IF NEW.status_pembayaran = 'dibayar' THEN 
UPDATE pembayaran SET status_pembayaran = 'Lunas' WHERE pesanan_id = NEW.pesanan_id;
END IF;
END;
