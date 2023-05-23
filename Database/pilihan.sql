CREATE TABLE jenama (
  idJenama int(11) AUTO_INCREMENT PRIMARY KEY,
  namaJenama varchar(50)
);

CREATE TABLE pengguna (
idPengguna varchar (20) PRIMARY KEY,
password varchar (20),
nama varchar (50),
nomhp varchar (12),
aras varchar (10)
);
CREATE TABLE pilih (
idPilih int(11) AUTO_INCREMENT PRIMARY KEY,
idPengguna varchar (20),
idProduk int (11)
);
CREATE TABLE produk (
idProduk int(11) AUTO_INCREMENT PRIMARY KEY,
namaProduk varchar (50),
detail longtext,
harga decimal(15,2),
gambar varchar (50),
idJenama int (11)
);
INSERT INTO pengguna
VALUES
('admin','12345' 'PENGURUS', '0139887878', 'ADMIN');