<!DOCTYPE html>
    <head>
        <title> Quiz 1</title>
        <script src="http://localhost/pweb232/Quiz/quiz1.js"></script>
        <link rel="stylesheet" href="quiz1.css">
    </head>

    <body>
        <h2> Menghitung Volume dan Luas Permukaan </h2>

        <input type="checkbox" id="option1" name="pilihan" onclick="tampil('vbalok'); uncheckPrevious(this); ">
        <label for="option1" class="balok"> Volume Balok </label>

        
        <input type="checkbox" id="option2" name="pilihan" onclick="tampil('vkubus'); uncheckPrevious(this)">
        <label for="option2" class="kubus"> Volume Kubus </label>

        <input type="checkbox" id="option3" name="pilihan" onclick="tampil('vtabung'); uncheckPrevious(this)">
        <label for="option3" class="tabung"> Volume Tabung </label><br></br>

        <input type="checkbox" id="option4" name="pilihan" onclick="tampil('lpbalok'); uncheckPrevious(this)">
        <label for="option4" class="balok"> LP Balok </label>

        <input type="checkbox" id="option5" name="pilihan" onclick="tampil('lpkubus'); uncheckPrevious(this)">
        <label for="option5" class="kubus"> LP Kubus </label>

        <input type="checkbox" id="option6" name="pilihan" onclick="tampil('lptabung'); uncheckPrevious(this)">
        <label for="option6" class="tabung"> LP Tabung </label>

        
        <!-----------------------------------------------    Volume Balok    --------------------------------------------------------------->

        <form id ="formVBalok" class="formVBalok" style="display:none;">
            <label for="panjang"> Panjang: </label><br>
            <input type="text" class="panjang"></input><br><br>

            <label for="lebar"> Lebar: </label><br>
            <input type="text" class="lebar"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>            

            <button type="button" class="hitung" onclick="volume('vbalok')"> Hitung </button>
            <br><br>
        </form><br>

        <!-----------------------------------------------    Volume Kubus    --------------------------------------------------------------->

        <form id="formVKubus" class="formVKubus" style="display:none;">
            <label for="sisi" class="balok"> Sisi: </label><br>
            <input type="text" class="sisi"></input><br><br>

            <button type="button" class="hitung" onclick="volume('vkubus')"> Hitung </button>
            <br><br>
        </form><br>

        <!-----------------------------------------------    Volume Tabung    --------------------------------------------------------------->
         
         <form id ="formVTabung" class="formVTabung" style="display:none;">
            <label for="jarijari"> Jari-jari: </label><br>
            <input type="text" class="jarijari"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>

            <button type="button" class="hitung" onclick="volume('vtabung')"> Hitung </button>
            <br><br>
        </form><br>

        <!--------------------------------------------    Luas Permuakaan Balok    --------------------------------------------------------->

        <form id ="formLPBalok" class="formLPBalok" style="display:none;">
            <label for="panjang"> Panjang: </label><br>
            <input type="text" class="panjang"></input><br><br>

            <label for="lebar"> Lebar: </label><br>
            <input type="text" class="lebar"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>            

            <button type="button" class="hitung" onclick="luaspermukaan('lpbalok')"> Hitung </button>
            <br><br>
        </form><br>


        <!--------------------------------------------    Luas Permuakaan Kubus    --------------------------------------------------------->
        
        <form id="formLPKubus" class="formLPKubus" style="display:none;">
            <label for="sisi" class="balok"> Sisi: </label><br>
            <input type="text" class="sisi"></input><br><br>

            <button type="button" class="hitung" onclick="luaspermukaan('lpkubus')"> Hitung </button>
            <br><br>
        </form><br>

        <!--------------------------------------------    Luas Permuakaan Tabung    --------------------------------------------------------->

        <form id ="formLPTabung" class="formLPTabung" style="display:none;">
            <label for="jarijari"> Jari-jari: </label><br>
            <input type="text" class="jarijari"></input><br><br>

            <label for="tinggi"> Tinggi: </label><br>
            <input type="text" class="tinggi"></input><br><br>

            <button type="button" class="hitung" onclick="luaspermukaan('lptabung')"> Hitung </button>
            <br><br>
        </form><br>
        <div id="hasil"></div>
    </body>
</html>