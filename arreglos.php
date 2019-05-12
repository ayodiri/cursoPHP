<?php 
    /**
     * Arrays indexado
     */
    echo 'ARRAYS INDEXADOS' . '<br>';
    $semana = array('lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo');
    echo $semana[1] . '<br>';
    $semana[7] = 'FalconMasters';
    echo $semana[7] . '<br>';
    $semana2 = [ 'lunes', 'martes', 'miercoles', 'jueves', 'viernes', 'sabado', 'domingo'];
    echo $semana2[4] . '<br>';

    /**
     * Arrays asociativos
     */
    echo '<br>' . 'ARRAYS ASOCIATIVOS' . '<br>';
    $alex = ['telefono' => '945264403', 'edad' => 36, 'apellido' => 'Garcia', 'pais' => 'Euskadi'];
    echo 'Pais : ' . $alex['pais'] . '<br>';
    echo 'Edad : ' . $alex['edad'] . '<br>';
?>