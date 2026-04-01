<?php
    $nome = $_POST['nome'];
    $salario = floatval($_POST['salario']);
    $faltas = intval($_POST['faltas']);

    // Calcular INSS
    $inss = 0;
    if ($salario <= 1621.00) $rate = 0.075;
    elseif ($salario <= 2902.84) $rate = 0.09;
    elseif ($salario <= 4354.27) $rate = 0.12;
    else $rate = 0.24;
    
    $inss = min($salario * $rate, 2034.13);

    // Calcular faltas
    $ded_faltas = $faltas * ($salario / 30);

    // Vale Transporte
    $vt = $salario * 0.06;

    // Total descontos (INSS + Faltas + VT, sem IRPF como no exemplo)
    $total_descontos = $inss + $ded_faltas + $vt;

    // Salário líquido
    $salario_liquido = $salario - $total_descontos;

    // Resultado
    echo "$nome o Total do seu salário após os descontos é R$ " . number_format($salario_liquido, 2, ',', '.');
?>