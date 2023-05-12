<?php

class Consulta{

    public function insertar($identificacion, $nombres, $apellidos, $telefono, $correo, $clavemd, $rol){

        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();
        // validaremos si el usuario ya esta registrado a partir de un select y un if
        $consultar = "SELECT * FROM usuarios WHERE id = :identificacion || correo = :correo";
        $result = $conexion -> prepare($consultar);
        $result -> bindParam(':identificacion', $identificacion);
        $result -> bindParam(':correo',$correo);
        $result -> execute(); 

        // variable f solo existira si hay algun registro con la id o el correo registrado previamente.
        $f = $result->fetch();

        if($f){

            echo '<script>alert("La información del usuario que intenta registrar ya se encuentra almacenada")</script>")';
            echo '<script>location.href="../views/login.php"</script>")';

            // todo lo anterior es para validar si el usuario se encuentra registrado.

        } else{

            $objConsulta = new Conexion();
            $conexion = $objConexion -> get_conexion();
          
            $insert = "INSERT INTO usuarios(id, nombres, apellidos, telefono, correo, clave, rol)
            VALUES(:identificacion, :nombres, :apellidos, :telefono, :correo, :clave, :rol)";
            $result = $conexion->prepare($insert);
            $result -> bindParam(':identificacion', $identificacion);
            $result -> bindParam(':correo',$correo);
            $result -> bindParam(':nombres',$nombres);
            $result -> bindParam(':apellidos',$apellidos);
            $result -> bindParam(':telefono',$telefono);
            $result -> bindParam(':clave',$clavemd);
            $result -> bindParam(':rol',$rol);
            $result->execute();
        }
       
    }

       
    



}