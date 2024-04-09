<!DOCTYPE html>
<html>
<head>
  <title>Tambah Barang</title>
</head>
<body>
<form action="Tugas1.php" method= "POST">
  <label for="Kode">Kode:</label><br>
  <input type="text" id="kode" name="kode"><br>
  <label for="nama"> Nama: </label><br>
  <input type="text" id="nama" name="nama"><br>
  <label for="satuan"> Satuan: </label><br>
  <input type="text" id="satuan" name="satuan"><br>
  <label for="beli"> Beli: </label><br>
  <input type="number" id="beli" name="beli"><br>
  <label for="Jual"> Jual: </label><br>
  <input type="number" id="jual" name="jual"><br><br>
  <input type="submit" value="Kirim" nama="kirim">
  <input type="submit" value="Cancel" nama="cancel">

</form>
</body>