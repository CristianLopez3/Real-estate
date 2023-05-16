<?php 



function cargarInmuebles(){

    $objConsulta = new Consulta();
    $result = $objConsulta -> consultarinmueble();

    if(!isset($result)){

        echo '<tr style="text-align: center;"><td><h2>No hay inmuebles registrados</h2></td></tr>';

    } else{

        foreach($result as $f){

            echo '
            <tr>
                <td>
                    <figure class="photo">
                        <img src="'.$f['foto'].'" alt="">
                    </figure>
                    <div class="info">
                        <h3>'.$f['tipo'].'</h3>
                        <h4>$'.$f['precio'].'</h4>
                        <p>'.$f['ciudad'].'/'.$f['barrio'].'</p>
                    </div>
                    <div class="controls">
                        
                        <a href="InmoEdit.php?id='.$f['id'].'" class="edit"></a>
                        <a href="../controllers/eliminarInmueble.php?id='.$f['id'].'" class="delete"></a>
                    </div>
                </td>
            </tr>

            ';

        }

    }


}

// esta funcion es solo para traer la informacion del inmueble en el formulario.
function cargarInmuebleEdit(){

    // creamos la variable que obtiene el id del inmueble enviado  por metodo get en mostrar INFO
    // emtodo get es lo que se envia por la URL
    $id = $_GET['id'];
    $objConsulta = new Consulta();
    $result = $objConsulta -> consultarInmuebleEdit($id);

    foreach ($result as $f){

        echo '
            
        <form action="../controllers/modificarInmueble.php" method="post">        
            <div class="select">
            <input style="display:none;" type="number" name="id" value="'.$f['id'].'">
                <select name="tipo">
                    <option value="'.$f['tipo'].'">'.$f['tipo'].'</option>
                    <option value="Apartamento">Apartamento</option>
                    <option value="Aparta Estudio">Aparta Estudio</option>
                    <option value="Casa">Casa</option>
                </select>
            </div>
            <div class="select">
                <select name="categoria">
                    <option value="'.$f['categoria'].'">'.$f['categoria'].'</option>
                    <option value="Arriendo">Arriendo</option>
                    <option value="Venta">Venta</option>
                </select>
            </div>
            <input type="number" placeholder="Precio..." name="precio" value="'.$f['precio'].'">
            <input type="number" placeholder="Tamaño..."name="tamano" value="'.$f['tamano'].'">
            <input type="text" placeholder="Ciudad..." name="ciudad" value="'.$f['ciudad'].'">
            <input type="text" placeholder="Localidad/Barrio..." name="barrio" value="'.$f['barrio'].'">
            
            <button type="submit" class="btn-home">Modificar</button>
        </form>
        ';

    }

}


function cargarInmueblesUser(){

    $objConsulta = new Consulta();
    $result = $objConsulta -> consultarinmueble();

    if(!isset($result)){

        echo '<tr style="text-align: center;"><td><h2>No hay inmuebles registrados</h2></td></tr>';

    } else{

        foreach($result as $f){

            echo '
                <div class="card-inmueble">
                    <img src="'.$f['foto'].'" alt="foto">
                    <div class="info-card">
                        <h4>Valor de '.$f['categoria'].':</h4>
                        <h2>$'.$f['precio'].' Bolivares</h2>
                        <p>'.$f['tipo'].' - '.$f['tamano'].'</p>
                        <p class="direccion">'.$f['ciudad'].'/'.$f['barrio'].'</p>
                        <a href="UserShowInmueble.php?id='.$f['id'].'">Ver Más</a>
                    </div>
                 </div>
            ';

        }

    }


}

function userShowInmueble(){

    $id = $_GET['id'];
    $objConsulta = new Consulta();
    $result = $objConsulta -> consultarInmuebleEdit($id);


        foreach($result as $f){
     
            echo '
            <figure class="photo-preview">
            <img src="'.$f['foto'].'" alt="" width="100%">
            </figure>  
            
            <div class="cont-details">
                <div>
                    <article class="info-name"><p>'.$f['tipo'].'</p></article>
                    <article class="info-category"><p>'.$f['categoria'].'</p></article>
                    <article class="info-precio"><p>'.$f['precio'].'</p></article>
                    <article class="info-direccion"><p>'.$f['barrio'].'/'.$f['ciudad'].'</p></article>
                    <article class="info-tamano"><p>'.$f['tamano'].'</p></article>

                    <a href="../controllers/registrarSolicitud.php?id='.$f['id'].'" class="btn-home">Solictar cita</a>
                </div>
            </div>
            ';

        }



}

// esta funcion es solo para traer la informacion del inmueble en el formulario.

// mostrar solicitudes
function showSolicitudes(){

    $objConsulta = new Consulta();
    $result = $objConsulta -> mostrarSolicitudes();

    foreach($result as $f){
        echo '
        <tr>
            <td>
                <figure class="photo">
                    <img src="'.$f['foto'].'" alt="">
                </figure>
                <div class="info">
                    <h3>'.$f['tipo'].'</h3>                        
                    <p>'.$f['ciudad'].'/'.$f['barrio'].'</p>
                    <p>'.$f['nombres'].'</p>
                </div>
                <div class="controls">
                    <a href="InmoShowSolicitud.php?id='.$f['id_sol'].'" class="show"></a>
                </div>
            </td>
        </tr>

        ';
    }

   
}


function showSolicitud(){

    $id = $_GET['id'];

    $objConsulta = new Consulta();
    $result = $objConsulta -> mostrarSolicitud($id);

    foreach($result as $f){
        echo '
        <figure class="photo-preview">
            <img src="'.$f['foto'].'" width="100%" alt="">
        </figure>
    <div class="cont-details">
        <div>
            <article class="info-name">
                <p>'.$f['tipo'].'</p>
            </article>
            <article class="info-category">
                <p>'.$f['categoria'].'</p>
            </article>
            <article class="info-precio">
                <p>'.$f['precio'].'</p>
            </article>
            <article class="info-direccion">
                <p>'.$f['barrio'].'/'.$f['ciudad'].'</p>
            </article>
            <hr>
            <br>
            <article class="info-fecha">
                <p>'.$f['fecha'].'</p>
            </article>
            <article class="info-usuario">
                <p>'.$f['nombres'].'</p>
            </article>
            <article class="info-telefono">
                <p>'.$f['telefono'].'</p>
            </article>
            <article class="info-correo">
                <p>'.$f['correo'].'/p>
            </article>
        </div>
    </div>
        ';
    }
}

?>

