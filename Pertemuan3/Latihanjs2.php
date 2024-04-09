<!DOCTYPE html>
<html>
    
    <body>
        <p id="isi"> Welcome </p>
        <p> mantap benar </p>
        <button type="button" onclick="myfungsi()">klik</button>
        
        <Script>
            document.getElementById("isi").innerHTML = "Helo Javascript";
            document.write(5+12);
            document.write("/nsip");
            function myfungsi()
            {
                window.alert("mantap bro");
            }

            function myfungsi1()
            {
                console.log("INI MUNCUL DI CONSOLE XXX");
            }

            
        </Script>
    </body>
</html>