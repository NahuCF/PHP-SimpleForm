<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="wrap">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
           <input class="name-formulario" type="text" name="name" placeholder="Nombre" id="" value="<?php if(!$enviado && isset($name)) echo $name ?>">
           <input class="email-formulario" type="text" name="email" placeholder="Email" id="" value="<?php if(!$enviado && isset($email)) echo $email ?>">
           <textarea class="mensaje" name="mensaje" placeholder="Mensaje"><?php if(!$enviado && isset($mensaje)) echo $mensaje ?></textarea>

           <?php if(!empty($err)): ?>
                <div class="alert_error">
                    <?php echo $err; ?>
                </div>
            <?php elseif($enviado): ?>
                <div class="alert_success">
                    <p>Enviado correctamente.</p>
                </div>
            <?php endif ?>

           <input class="btn" name="submit" type="submit" value="Submit">
        </form>
    </div>
</body>
</html>