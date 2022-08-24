<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8" />
        <title>Home Kira</title>
        <nav id="navbar-example2" class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="../index.php">Home</a>
  <ul class="nav nav-pills">
    <li class="nav-item">
      <a class="nav-link" href="#fat">Primero</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#mdo">Segundo</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Menu</a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="#one">one</a>
        <a class="dropdown-item" href="#two">two</a>
        <div role="separator" class="dropdown-divider"></div>
        <a class="dropdown-item" href="#three">three</a>
      </div>
    </li>
  </ul>
</nav>

    </head>
    <body>
       <p> Hello! I'm <span id="input"></span>.</p>
 
      <p>Nombre </p>
      <form name="form" action="" method="get">
        <input type="text" name="prod" id="prod">
        <p>Apellido</p>
        <input type="text" name="shelf" id="shelf">
    </form>
    <button onclick="sub()">Prueba</button>
      
  
    </body>

    <script>

       var product = "";
       var shelf = "";
       var status = "";

        //submit
        function sub(){
            product = document.getElementById("prod").value;
            shelf = document.getElementById("shelf").value;
            document.getElementById('input').innerHTML = product+" "+shelf ;
         //alert(product+" "+shelf);
        };
         
        document.getElementById('input').innerHTML = product+" "+shelf ;

        

      //document.getElementById('txtTabla').value = dato;
       //window.alert('input');
    </script>
       
</html>

  