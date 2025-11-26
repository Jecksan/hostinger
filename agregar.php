<?php
session_start();
if(!isset($_SESSION["admin"])){
    header("Location: login.php");
    exit();
}
?>

<?php
include("conexion.php");

// ==========================
// Captura de datos del formulario
// ==========================

$nombre      = $_POST['nombre'];
$rol         = $_POST['rol'];        // ← nuevo campo
$fecha       = $_POST['fecha'];
$semestre    = $_POST['semestre'];
$aportacion  = $_POST['aportacion_v'];
$paraescolar = $_POST['paraescolar'];
$credencial  = $_POST['credencial'];
$otro        = $_POST['otro'];
$total       = $_POST['total_pagar'];
$firma_al    = $_POST['firma_alumno'];
$firma_en    = $_POST['firma_entrega'];

// ==========================
// Inserción a la base de datos
// ==========================

$sql = "INSERT INTO recibos 
(id, nombre, rol, fecha, semestre, aportacion_v, paraescolar, credencial, otro, total_pagar, firma_alumno, firma_entrega)
VALUES 
(NULL, '$nombre', '$rol', '$fecha', '$semestre', '$aportacion', '$paraescolar', '$credencial', '$otro', '$total', '$firma_al', '$firma_en')";

$conexion->query($sql);

// Volver al inicio
header("Location: index.php");
exit();
?>
