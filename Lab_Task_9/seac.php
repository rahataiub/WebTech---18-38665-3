<!DOCTYPE html>
<html>
<body>


<p>Search for available product  <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<p> Available : <span id="txtHint"></span></p> 
<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "data.php?q="+str);
  xhttp.send();   
}
</script>

</body>
</html>
