<!DOCTYPE html>
<html>
 
<head>
    <script>
        function myFunction() {
            var x = document.getElementsByClassName("LINKS");
            for (var i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
        }
    </script>
</head>
 
<body>
 
     
<p>Click the button, and a JavaScript hides all
       elements with the class name "LINKS":</p>
 
 
    <button onclick="myFunction()">Hide elements</button>
 
    <h2 class="LINKS">PHP-connection link</h2>
     
<p>connectie maken van de database met de phpsite.</p>
<a href="Connection.php">connection.php</a>
 
    <h2 class="LINKS">GITHUB</h2>
     
<p>Link naar het github project.</p>
<a href="https://github.com/BigDries/IoT-technologie-2EAI">Github</a>

    <h2 class="LINKS">MySql</h2>
     
<p>Mysql Database</p>
<a href="mysql_db.php">Github</a>

    <h2 class="LINKS">CSS</h2>
     
<p>CSS- file</p>
<a href="style.css">Github</a>


</body>
 
</html>