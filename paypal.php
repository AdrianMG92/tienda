<?php
session_start();
include("./include/funciones.php");
$connect = connect_db();

$title = "Plantas el Caminàs -> ";
include("./include/header.php");
require './include/ElCaminas/Carrito.php';
require './include/ElCaminas/Producto.php';
require './include/ElCaminas/Productos.php';
use ElCaminas\Carrito;

$carrito = new Carrito();
?>

<div class="row carro">
  <h2 class='subtitle' style='margin:0'>Carrito de la compra</h2>
  <?php  echo $carrito->toHtml();?>
</div>

<?php
  include("./include/footer.php");
?>
