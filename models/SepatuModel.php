//File: models/SepatuModel.php
<?php
class SepatuModel {
    private $prices = [
        'Nike' => 375000,
        'Adidas' => 300000,
        'Kickers' => 250000,
        'Eiger' => 275000,
        'Bucherri' => 400000
    ];

    public function getPrice($brand) {
        return isset($this->prices[$brand]) ? $this->prices[$brand] : 0;
    }

    public function calculateTotal($brand, $quantity) {
        $price = $this->getPrice($brand);
        return $price * $quantity;
    }
}
