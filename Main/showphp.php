<html>
<head>
<script>
function showHint(str) {
    
    window.parent.frames[2].location="serv2.php";
    window.parent.frames[1] = "2"; 
    
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("txtHint").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>

<body>

<p><b>Start typing a name in the input field below:</b></p>
<form> 
First name: <input type="text" onkeyup="showHint(this.value)">
</form>
<p>Suggestions: <span id="txtHint"></span></p>

<form> 
<select name="transporte" size="8" onmouseup="showHint(this.value)">

<option>a</option>

<option>b</option>

<option>c</option>

</select>

</body>



</html>