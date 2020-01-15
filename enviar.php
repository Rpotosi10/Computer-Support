
<?php

$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Subject = $_POST['Asunto'];
$Mensaje = $_POST['Mensaje'];

if ($Nombre=='' || $Email=='' || $Mensaje==''){ // Si falta un dato en el formulario mandara una alerta al usuario.

echo "<script>alert('Los campos marcados con * son obligatorios');location.href ='javascript:history.back()';</script>";

}else{

    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = "info@computersupportsolutions.online";
    $to = "cscolombia10@gmail.com";
    $subject = "Checking PHP mail";
    $message = "PHP mail works just fine";

    $headers = 
    "Nombre: $Nombre \n". // Nombre del usuario
    "Asunto: $Subject \n". //Asunto del usuario
    "Email: $Email \n".    // Email del usuario
    "Mensaje: $Mensaje \n"; // Mensaje del usuario;

    mail($to,$subject,$message, $headers);
    echo  "<script>alert('Formulario enviado exitosamente, le responderemos lo más pronto posible.');location.href ='javascript:history.back()';</script>";
}

?>
</body>
</html>