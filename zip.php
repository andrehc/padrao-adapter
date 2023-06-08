<?php

require 'vendor/autoload.php';

$orcamentoZip = new \Alura\DesignPattern\OrcamentoZIP();
$orcamento = new \Alura\DesignPattern\Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 3;
$orcamentoZip->exportar($orcamento);
