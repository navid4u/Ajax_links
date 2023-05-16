<script>
    function loadpage() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("link").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "page_1.php", true);
  xhttp.send();
}; 
