<?php

namespace Alura\DesignPattern\Relatorio;

use Alura\DesignPattern\Pedido;

class PedidoExportado implements ConteudoExportado
{
    private Pedido $pedido;

    public function __construct(Pedido $pedido)
    {
        $this->pedido = $pedido;
    }

    public function exportarConteudo(): array
    {
        return [
            'nome_cliente' => $this->pedido->nomeCliente,
            'data_finalizacao' => $this->pedido->dataFinalizacao->format('d/m/Y'),
        ];
    }
}
