<?php

interface ProductRepository {
    public function findProduct(string $id): ?Product;
}

interface Notifier {
    public function notify(Product $product, string $message): void;
}


// Step 1: Define the Product class
class Product
{
    private string $id;
    private string $name;

    public function __construct(string $id, string $name)
    {
        $this->id = $id;
        $this->name = $name;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

// Step 2: Implement the ProductRepository interface
class InMemoryProductRepository implements ProductRepository
{
    /** @var Product[] */
    private array $products;

    public function __construct()
    {
        // Sample products
        $this->products = [
            new Product("12345", "Sample Product 1"),
            new Product("67890", "Sample Product 2"),
        ];
    }

    public function findProduct(string $id): ?Product
    {
        foreach ($this->products as $product) {
            if ($product->getId() === $id) {
                return $product;
            }
        }
        return null; // Product not found
    }
}

// Step 3: Implement the Notifier interface
class EmailNotifier implements Notifier
{
    public function notify(Product $product, string $message): void
    {
        echo "Notification sent for product '{$product->getName()}': $message\n";
    }
}

// Step 4: Demo the functionality
$productRepository = new InMemoryProductRepository();
$notifier = new EmailNotifier();


$product = $productRepository->findProduct("12345");
$notifier->notify($product, "New product available!");


