<?php
include_once 'ItemDoPedido.php';

class Batatinha extends ItemDoPedido {
    private string $tamanho;

    public function getTamanho(): string {
        return $this->tamanho;
    }
    public function setTamanho(string $tamanho): void {
        $this->tamanho = $tamanho;
    }
}

