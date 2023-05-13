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
function cargarInmuebleUser(){

    // creamos la variable que obtiene el id del inmueble enviado  por metodo get en mostrar INFO
    // emtodo get es lo que se envia por la URL
    $id = $_GET['id'];
    $objConsulta = new Consulta();
    $result = $objConsulta -> consultarInmuebleEdit($id);

    foreach ($result as $f){

        echo '
        <div class="contCards">
        <div class="card-inmueble">
            <img src="../imgs/inmueble-1.png" alt="">
            <div class="info-card">
                <h4>Valor de Arriendo:</h4>
                <h2>$'.$f['precio'].'/h2>
                <p>'.$f['categoria'].' - '.$f['tamano'].'</p>
                <p class="direccion">'.$f['ciudad'].'/Engativa</p>
                <a href="UserShowInmueble.php?id='.$f['id'].'">Ver Más</a>
            </div>
        </div>
        ';

    }

}


?>