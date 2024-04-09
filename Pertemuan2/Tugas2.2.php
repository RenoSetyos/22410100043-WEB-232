<!DOCTYPE html>
<html>
<head>
  <title>Update Barang</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="mycss.css">
</head>
<body>
<form action="Tugas1.php" id="ubarang">
  
  <label form="Kode">Kode:</label><br>
  <input type="text" id="kode" name="kode"><br>

  <label form="nama"> Nama: </label><br>
  <input type="text" id="nama" name="nama"><br>

  <label form="satuan"> Satuan: </label><br>
  <input type="text" id="satuan" name="satuan"><br>

  <label form="beli"> Beli: </label><br>
  <input type="text" id="harga" name="harga"><br>

  <label form="Jual"> Jual: </label><br>
  <input type="text" id="harga" name="harga"><br><br>

  <a href="Tugas2.php" target="blank">
  <button type="button" class= "Update"> 
  <i class="fas fa-sync icon"></i> UPDATE</button></a>

  <a href="Tugas2.php" target="blank">
  <button type="button" class= "Delete">
  <i class="fa-solid fa-trash-can"></i> DELETE</button></a>

  <a href="Tugas2.php" target="blank">
  <button type="button" class="Cancel">
  <i class="fa-solid fa-xmark"></i> CANCEL</button></a>
</form>
</body>