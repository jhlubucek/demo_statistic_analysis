<?php

class Product {
    public string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }
}

function getProduct(int $id): ?Product {
    if ($id === 1) {
        return new Product("Sample Product");
    }
    return null;
}

function registerProduct(?Product $product): void {

    if (!is_null($product)) {
        echo "Product '{$product->name}' has been registered successfully!\n";
    }else{
        throw new \InvalidArgumentException("Product cannot be null");
    }
}

$productId = 1;
$product = getProduct($productId);

registerProduct($product);