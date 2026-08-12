<?php
    require_once 'BibliotecaLocal/autoload.php';
    
    $imc = new calcularIMC();
    $val = new validarCPF();
    $resultimc = $imc->IMC($_POST["peso"], $_POST["altura"]);

    echo 'imc: ';
    echo $resultimc["imc"];
    echo "<br><br>";
    echo $resultimc['classificacao'];
    echo "<br><br>";
    
    if ($val->validarCPF($_POST["cpf"])) 
        echo "CPF Válido";
    else echo "CPF Inválido";
    
?>