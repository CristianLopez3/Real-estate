<?php

class Sesion{

    public function iniciarSesion($email, $clave){

        $objConexion = new Conexion();
        $conexion = $objConexion -> get_conexion();

        $select = "SELECT * FROM usuarios WHERE correo=:email";
        $result = $conexion -> prepare($select);
        $result -> bindParam(':email', $email);
        $result -> execute();

        // lo que hicimos anteriormente sirve para validar si el email de usuario ya esta registado
        
        if($f = $result->fetch()){

            // validamos la clave ingresada con la clave de la base de datos.

            if($clave == $f['clave']){

                session_start();
                $_SESSION['id'] = $f['id'];
                $_SESSION['rol'] = $f['rol'];
                $_SESSION['autenticado'] = 'SI';
                // Lo anterior es para el archivo de seguidad de permisos de acceso a rutas
                if($f['rol'] == 'usuarios'){

                    echo '<script>alert("Bienvenido Usuario")</script>")';
                    echo '<script>location.href="../views/UserDashboard.php"</script>")';

                } 

                if($f['rol'] == 'inmueble'){

                    echo '<script>alert("Bienvenido Inmobiliario")</script>")';
                    echo '<script>location.href="../views/inmoDashboard.php"</script>")';
                }

            } else{

                echo '<script>alert("Clave incorrecta, por favor revise los datos ingresados")</script>")';
                echo '<script>location.href="../views/login.php"</script>")';

            }
            
        } else{

            echo '<script>alert("El correo ingresado no se encuentra registrado en el sistema, verifique los datos.")</script>")';
            echo '<script>location.href="../views/login.php"</script>")';

        }


    }


    public function cerrarSesion(){

        session_start();
        session_destroy();
        echo '<script>location.href="../views/login.php"</script>';

    }
}