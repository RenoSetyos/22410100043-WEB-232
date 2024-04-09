<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="mycss.css">
  <title>Tambah Barang</title>

</head>
<body>
<form action="Tugas2.php" id=tbarang>
  
  <label for="Kode">Kode:</label><br>
  <input type="text" id="kode" name="kode"><br>

  <label for="nama"> Nama: </label><br>
  <input type="text" id="nama" name="nama"><br>

  <label for="satuan"> Satuan: </label><br>
  <input type="text" id="satuan" name="satuan"><br>

  <label for="beli"> Beli: </label><br>
  <input type="text" id="beli" name="beli"><br>

  <label for="Jual"> Jual: </label><br>
  <input type="text" id="jual" name="jual"><br><br> 

  <a href="Tugas2.php" target="blank">
  <button type="button" class="Save">
        <i class="fa-solid fa-cloud"></i> SAVE </button></a>

  <a href="Tugas2.php" target="blank">     
  <button type="button" class="Cancel">
        <i class="fa-solid fa-xmark"></i> CANCEL </button></a>

</form>
</body>