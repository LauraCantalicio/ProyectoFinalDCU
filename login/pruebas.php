<?php
$passwordform = "40230771004";

$passwordbd = password_hash($passwordform, PASSWORD_DEFAULT);
echo $passwordbd . '<br>';

if (password_verify($passwordform, $passwordbd)) {
    echo "Contraseña Correcta.";
}
else {
    echo "Contraseña Incorrecta.";
}
?>
