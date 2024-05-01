<?php
include_once 'ItemDoPedido.php';

class Refrigerante extends ItemDoPedido {
    private string $sabor;

    public function getSabor(): string {
        return $this->sabor;
    }
    public function setSabor(string $sabor): void {
        $this->sabor = $sabor;
    }
}
