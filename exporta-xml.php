<?php 

require 'vendor/autoload.php';


use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\Pedido;

use Alura\DesignPattern\Relatorio\ArquivoXmlExportado;
use Alura\DesignPattern\Relatorio\OrcamentoExportado;
use Alura\DesignPattern\Relatorio\PedidoExportado;

$orcamento = new Orcamento();
$orcamento->valor = 500;
$orcamento->quantidadeItens = 3;

$orcamentoExportado = new OrcamentoExportado($orcamento);

$orcamentoExportadoXml = new ArquivoXmlExportado('orcamento-xml');

var_dump($orcamentoExportadoXml->salvar($orcamentoExportado));


$pedido = new Pedido();
$pedido->nomeCliente = 'Andre Hilario';
$pedido->dataFinalizacao = new DateTimeImmutable();

$pedidoExportado = new PedidoExportado($pedido);
$pedidoExportadoXml = new ArquivoXmlExportado('pedido_' . str_replace(' ', '_', $pedido->nomeCliente));

var_dump($pedidoExportadoXml->salvar($pedidoExportado));

