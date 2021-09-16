<?php

require_once ('funciones.php');


$cartas=gen_cartas();

//var_dump($cartas);

echo '<form method="post">
<button style="font-size:32px; color:#ff19fb; padding:12px 12px; border-radius: 12px; border: 3px solid #19ff3b; background-color:#cfffe7; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); margin-left:900px;" name="button1" type="submit">Mostrar todas</button><button style="font-size:32px; color:#ff19fb; padding:12px 19px; border-radius: 12px; border: 3px solid #19f4ff; background-color:#d6fdff; box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19); margin-left:40px;" name="button2" type="submit">Rollear carta</button>
</form>';

if(array_key_exists('button1', $_POST)) {
   button1($cartas);
}
function button1($cartas) {
   impr_cartas($cartas);
}

$cartas = mezcl_cartas($cartas);


if(array_key_exists('button2', $_POST)) {
   button2($cartas);
}
function button2($cartas) {
   sacarUna($cartas);
}

?>