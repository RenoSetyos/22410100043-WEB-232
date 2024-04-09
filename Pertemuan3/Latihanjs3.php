<!DOCTYPE html>
<html>
    <body>
        <h2>Kalkulator</h2>
        <form>
            nilai 1:
            <input type="number" name="nilai1" id="nilai1">
            <br></br>
            nilai 2:
            <input type="number" name="nilai2" id="nilai2">
            <br></br>
            <button type="button" onclick = "myfungsi1()">tambah</button>
            <button type="button" onclick = "myfungsi2()">kurang</button>
            <button type="button" onclick = "myfungsi3()">kali</button>
            <button type="button" onclick = "myfungsi4()">bagi</button>
            <button type="button" onclick = "myfungsi5()">Luas</button>
            <br></br>
            <input type="number" name="hasil" id="hasil">
        </form>

        
        <Script>
            

            
            function myfungsi1()
            {
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x)+parseInt(y);
                console.log(z);
                document.getElementById("hasil").value=z;
            }

            function myfungsi2()
            {
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x)-parseInt(y);
                console.log(z);
                document.getElementById("hasil").value=z;
            }

            function myfungsi3()
            {
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x)*parseInt(y);
                console.log(z);
                document.getElementById("hasil").value=z;
            }

            function myfungsi4()
            {
                let x = document.getElementById("nilai1").value;
                let y = document.getElementById("nilai2").value;
                console.log(x);
                console.log(y);
                let z = parseInt(x)/parseInt(y);
                console.log(z);
                document.getElementById("hasil").value=z;
            }

            

            
        </Script>
    </body>
</html>