<?php
include_once 'ItemDoPedido.php';

class Cerveja extends ItemDoPedido {
    private string $tipo;

    public function getTipo(): string {
        return $this->tipo;
    }
    public function setTipo(string $tipo): void {
        $this->tipo = $tipo;
    }
}
