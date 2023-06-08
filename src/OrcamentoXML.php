<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Orcamento;

class OrcamentoXML
{
    public function exportar(Orcamento $orcamento)
    {
        $elementoOrcamento = new \SimpleXMLElement('<orcamento/>');
        $elementoOrcamento->addChild('valor', $orcamento->valor);
        $elementoOrcamento->addChild('quantidade_itens', $orcamento->quantidadeItens);

        return $elementoOrcamento->asXML();
    }
}
