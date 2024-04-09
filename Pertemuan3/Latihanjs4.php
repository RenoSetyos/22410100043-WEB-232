<!DOCTYPE html>
<html>
    <body>
        <h2>JavaScript</h2>

        <form>
            UTS:
            <input type="number" name="nilai1" id="nilai1">
            <br></br>
            UAS:
            <input type="number" name="nilai2" id="nilai2">
            <br></br>
            TUGAS:
            <input type="number" name="nilai3" id="nilai3">
            <br></br>
            
            <button type="button" onclick="myfungsi()">Hasil</button>
            <br></br>
            <input type="number" name="hasil" id="hasil">
        </form>
        
        <script>
            function myfungsi(){
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                let z = document.getElementById("nilai3").value;
                console.log(x);
                console.log(y);
                console.log(z);
                let h = parseInt(x)*0.3+parseInt(y)*0.3+parseInt(z)*0.4;
                console.log(h);
                document.getElementById("hasil").value = h;

                // Logika untuk mengubah teks pada elemen dengan id "isi" berdasarkan nilai input
                let nilai = h;
                if (nilai >= 80) {
                    document.getElementById("isi").innerHTML = "Nilai Huruf: A";
                } else if (nilai >= 70) {
                    document.getElementById("isi").innerHTML = "Nilai Huruf: B";
                } else {
                    document.getElementById("isi").innerHTML = "Nilai Huruf: C";
                }
            }
        </script>
        
        
        <p id="isi"></p> 
    </body>
</html>
