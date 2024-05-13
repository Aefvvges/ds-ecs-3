<?php
$mesdelaño = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
foreach($mesdelaño as $key => $valor){
    echo 'La posición de ' . $valor . ' es: ' . $key;
    echo '<br>';
}