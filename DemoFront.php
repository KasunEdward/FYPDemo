
<!DOCTYPE html>
<html>
<body onLoad="myFunction()">
<p id="demo">Let AJAX change this text.</p>
<script>
    function myFunction() {
    setInterval(function(){
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
            document.getElementById("demo").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "sendToFront.php", true);
        xhttp.send();
         
         }, 3000);
}
</script>

</body>
</html>