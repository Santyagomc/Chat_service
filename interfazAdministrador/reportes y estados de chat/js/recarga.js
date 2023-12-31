function ajax(){
          var req = new XMLHttpRequest();

          req.onreadystatechange = function(){
            if (req.readyState == 4 && req.status == 200){
              document.getElementById("tabla").innerHTML = req.responseText;
            }
          }
          req.open("GET", "index.php", true);
          req.send();
    }
        //refrescar automaticamente la pagina
        setInterval(function(){ajax();},1000);