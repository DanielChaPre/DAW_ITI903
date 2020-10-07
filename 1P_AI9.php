<a href="index.php">Inicio </a> <br><br>

<?php
//------------------
/*includes*/
include('1P_AI9_Function.php');
include('1P_AI9_Controller.php');
//Titulo("CRUD con php");
?>

<table border="1">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Edad</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            foreach($mUsuarios as $row){
                echo "<tr>
                        <td>$row->id</td>
                        <td>$row->nombre</td>
                        <td>$row->edad</td>
                    </tr>";
            }
        ?>
    </tbody>
</table>


