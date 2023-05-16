<script>
    function loadpage() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("page").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "page_1.php", true);
  xhttp.send();
}; 

    
    <html>
    <div id="link">                        
        <li  onclick="loadProfile()"><a> <i> <span>My link</span> </i></li>
    </div>
    
    
     <div id="page">
         <h1>
         This is the body of the page
         </h1>
     </div>

    
    
    
    
    
    
    </html>
