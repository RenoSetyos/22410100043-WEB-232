<html>
    <head>
        <title> TugasJS 3 </title>
        <script src="http://localhost/pweb232/Pertemuan3/tugasjs3.js">

        </script>
    </head>

    <body>
        <h2 >Hitung Volume </h2>

        <input type="radio" id="option1" name="pilihan" onclick="tampil('balok')">
        <label for="option1" class="balok"> Balok </label>

        <input type="radio" id="option2" name="pilihan" onclick="tampil('kubus')">
        <label for="option2" class="kubus"> Kubus </label><br><br>

        <form id ="formBalok" class="formBalok" style="display:none;">
            <label for="panjang"> Panjang: </label><br>
            <input type="text" class="panjang"></input><br><br>

            <label for="lebar"> Lebar: </label><br>
            <input type="text" class="lebar"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>

            <button type="button" class="hitung" onclick="volume('balok')"> Hitung </button>
            <br><br>
        </form><br>

        <form id="formKubus" class="formKubus" style="display:none;">
            <label for="sisi" class="balok"> Sisi: </label><br>
            <input type="text" class="sisi"></input><br><br>

            <button type="button" class="hitung" onclick="volume('kubus')"> Hitung </button>
            <br><br>
        </form>

        <div id="hasil"></div>
    </body>
</html>