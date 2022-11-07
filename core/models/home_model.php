<?php   
/*
function Conectarse()
   {
     global $DB_HOST, $DB_PUERTO, $DB_USER, $DB_PASS, $DB_NAME, $DB_TABLA01;
 
     if (!($link = mysqli_connect($DB_HOST.":".$DB_PUERTO, $DB_USER, $DB_PASS))) 
     { 
        echo "Error conectando a la base de datos.<br>"; 
       exit(); 
            }
     else
      {
       echo "Listo, estamos conectados.<br>";
      }
     if (!mysqli_select_db($link, $DB_NAME)) 
      { 
        echo "Error seleccionando la base de datos.<br>"; 
        exit(); 
      }
     else
      {
       echo "Obtuvimos la base de datos $DB_TABLA01 sin problema.<br>";
     }
   return $link; 
    } 
 
    $link = Conectarse();
 
   $query = "SELECT Nombre_user, Apellido_user FROM $DB_TABLA01;";
 
    $result = mysqli_query($link, $query); 
 
   ?>

 <table>
     <tr>
        <td>Nombre</td>
       <td>Apellidos</td>
      <tr>
 
    <?php
 
   while($row = mysqli_fetch_array($result))
   { 
 
      printf("<tr><td>%s</td><td>%s</td></tr>", $row["Nombre_user"],$row["Apellido_user"]); 
 
    } 
 
    mysqli_free_result($result); 
 
    mysqli_close($link); 
 
    ?>
 
    </table> 
 
   </body> 
    </html>

*/

