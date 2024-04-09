<!DOCTYPE html>
<html>
    <body>
        <h2>JavaScript for loop</h2>
        
        
        <form>
            Start:
            <input type="number" name="Start" id="Start">
            <br><br>
            End:
            <input type="number" name="End" id="End">
            <br><br>
            <button type="button" onclick="tampil()">Hasil</button>
            <p id="isi"></p>    
        </form>
        
        <script>
            function tampil() {
                var text = '';
                let Start = parseInt(document.getElementById("Start").value);
                let End = parseInt(document.getElementById("End").value);
                console.log(Start);
                console.log(End);
                for (let i = Start; i <= End; i++) {
                    text += i + "<br>";
                }
                document.getElementById("isi").innerHTML = text;
            }               
        </script>
    </body>
</html>
