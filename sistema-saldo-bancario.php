<?php

$saldo = 1000;
$titularConta = "Lucas Silva";

echo "*************** Sistema de Saldo Bancário ***************\n\n";
echo "Titular: " . $titularConta . "\n\n";
echo "**********************************************************\n\n";

do {
    echo "1. Consultar Saldo Atual\n\n";
    echo "2. Depositar\n\n";
    echo "3. Sacar Valor\n\n";
    echo "4. Sair\n\n";

    echo "Digite a opção desejada: \n\n";
    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
            echo "\n**********************************************************\n\n";
            echo "Titular: " . $titularConta . "\n\n";
            echo "Saldo Atual: R$ " . $saldo . "\n\n";
            echo "**********************************************************\n\n";
            break;
        case 2:
            echo "\n**********************************************************\n\n";
            echo "Digite o valor a depositar: \n\n";
            $valor = fgets(STDIN);
            if ($valor > 0) {
                $saldo += $valor;
                echo "\n**********************************************************\n\n";
                echo "Depósito realizado com sucesso!\n\n";
                echo "**********************************************************\n\n";
            } else {
                echo "\n**********************************************************\n\n";
                echo "Valor inválido!\n\n";
                echo "**********************************************************\n\n";
            }
            break;
        case 3:
            echo "\n**********************************************************\n\n";
            echo "Digite o valor a sacar: \n\n";
            $valor = fgets(STDIN);
            if ($valor > 0 && $valor <= $saldo) {
                $saldo -= $valor;
                echo "\n**********************************************************\n\n";
                echo "Saque realizado com sucesso!\n\n";
                echo "**********************************************************\n\n";
            } else {
                echo "\n**********************************************************\n\n";
                echo "Valor solicitado é maior que o saldo disponível!\n\n";
                echo "**********************************************************\n\n";
                }
                break;
        case 4:
            echo "\n**********************************************************\n\n";
            echo "Obrigado por usar o sistema de saldo bancário!\n\n";
            echo "**********************************************************\n\n";
            break;
        default:
            echo "\n**********************************************************\n\n";
            echo "Opção inválida\n\n";
            echo "**********************************************************\n\n";
            break;
    }
} while ($opcao != 4);