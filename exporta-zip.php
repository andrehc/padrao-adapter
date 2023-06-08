<?php

require 'vendor/autoload.php';


use Alura\DesignPattern\{ Orcamento, Pedido, OrcamentoZIP };
use Alura\DesignPattern\Relatorio\{ OrcamentoExportado, PedidoExportado, ArquivoZipExportado };



$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 3;

$orcamentoExportado = new OrcamentoExportado($orcamento);
$orcamentoExportadoZip = new ArquivoZipExportado('orcamento-zip');

echo $orcamentoExportadoZip->salvar($orcamentoExportado);

$pedido = new Pedido();
$pedido->nomeCliente = 'Andre Hilario';
$pedido->orcamento = $orcamento;
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoZip = new ArquivoZipExportado('pedido_' . $pedido->nomeCliente);

echo $pedidoExportadoZip->salvar($pedidoExportado);
 