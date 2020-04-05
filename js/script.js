function change() {
    var xmlhttp;
 
    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest(); // code for IE7+, Firefox, Chrome, Opera, Safari
    } else {
        xmlhttp = new ActiveXObject("Microsoft.XMLHTTP"); // code for IE6, IE5
    }
 
    xmlhttp.onreadystatechange = function() {
       if (xmlhttp.readyState === XMLHttpRequest.DONE) {
          if (xmlhttp.status === 200) {
             var cidade = document.querySelector("#cidade");
             cidade.innerHTML = xmlhttp.responseText;
          } else if (xmlhttp.status === 400) {
             alert('There was an error 400');
          } else {
             alert('something else other than 200 was returned');
          }
       }
    };
    var estado = document.getElementById('estado').value;
    xmlhttp.open("get","../../modules/cidade.php?estado="+estado, true);
    xmlhttp.send(null);
 }