<html>
 <head>
  <title>Datos</title>
 </head>
 <body>
Usuario<?php echo htmlspecialchars($_POST['nombre']); ?>
Correo<?php echo (int)$_POST['email']; ?>
 </body>
</html>