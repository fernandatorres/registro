<?php
class conexioni
{
    public function conctar()
    {
        $mysqli = new mysqli("localhost", "root", "mysql", "Tesis1");

/* comprobar la conexión */
        if (mysqli_connect_errno()) 
            {
        printf("Falló la conexión: %s\n", mysqli_connect_error());
        exit();
            }
      return $mysqli;
    }
    
    
    
    
    
    
    
    
    
    
    
}



   