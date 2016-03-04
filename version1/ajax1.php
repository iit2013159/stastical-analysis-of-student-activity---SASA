<!DOCTYPE html>
<html>
<body>

<h2>AJAX</h2>

<button type="button" onclick="loadDoc()">Request data</button>

<p id="demo"></p>
 
<script>

setInterval(loadDoc, 5000);

function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = '';
      myvar = xhttp.responseText;
      parsed = JSON.parse(myvar);
      for (i = 0; i < parsed.length; i++) {
      	document.getElementById('demo').innerHTML += parsed[i] + "<br>";
      }
    }
  };
  xhttp.open("POST", "ajax.php", true);
  // xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xhttp.send("fname=Henry&lname=Ford");
}
</script>

</body>
</html>
