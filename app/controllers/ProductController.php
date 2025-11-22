<?php
require_once 'app/models/Database.php';
require_once 'app/models/Product.php';

/**
 * Product Controller
 * Handles all product-related operations
 */
class ProductController {
    private $db;
    private $product;

    /**
     * Constructor
     */
    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->product = new Product($this->db);
    }

    /**
     * Display all products
     */
    public function index() {
        $stmt = $this->product->getAll();
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Load the view with products data
        require_once 'app/views/products/index.php';
    }

    /**
     * Show single product
     * @param int $id
     */
    public function show($id) {
        $this->product->id = $id;
        $this->product->getById();
        
        // Load the view with product data
        require_once 'app/views/products/show.php';
    }

    /**
     * Create new product
     */
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->product->name = $_POST['name'] ?? '';
            $this->product->category = $_POST['category'] ?? '';
            $this->product->price = $_POST['price'] ?? 0;
            $this->product->stock = $_POST['stock'] ?? 0;
            $this->product->status = $_POST['status'] ?? 'available';
            $this->product->description = $_POST['description'] ?? '';
            
            // Handle image upload
            if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                $this->product->image = $this->uploadImage($_FILES['image']);
            }
            
            if ($this->product->create()) {
                header('Location: index.php?page=products&success=created');
                exit;
            } else {
                $error = "Failed to create product.";
            }
        }
        
        // Load the create form view
        require_once 'app/views/products/create.php';
    }

    /**
     * Update product
     * @param int $id
     */
    public function update($id) {
        $this->product->id = $id;
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->product->name = $_POST['name'] ?? '';
            $this->product->category = $_POST['category'] ?? '';
            $this->product->price = $_POST['price'] ?? 0;
            $this->product->stock = $_POST['stock'] ?? 0;
            $this->product->status = $_POST['status'] ?? 'available';
            $this->product->description = $_POST['description'] ?? '';
            
            // Handle image upload
            if (isset($_FILES['image']) && $_FILES['image']['error'] === 0) {
                $this->product->image = $this->uploadImage($_FILES['image']);
            }
            
            if ($this->product->update()) {
                header('Location: index.php?page=products&success=updated');
                exit;
            } else {
                $error = "Failed to update product.";
            }
        } else {
            $this->product->getById();
        }
        
        // Load the edit form view
        require_once 'app/views/products/edit.php';
    }

    /**
     * Delete product
     * @param int $id
     */
    public function delete($id) {
        $this->product->id = $id;
        
        if ($this->product->delete()) {
            header('Location: index.php?page=products&success=deleted');
        } else {
            header('Location: index.php?page=products&error=delete_failed');
        }
        exit;
    }

    /**
     * Search products
     */
    public function search() {
        $keyword = $_GET['q'] ?? '';
        $stmt = $this->product->search($keyword);
        $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        // Load the view with search results
        require_once 'app/views/products/index.php';
    }

    // Maximum file size for uploads (5MB)
    private const MAX_FILE_SIZE = 5000000;

    /**
     * Upload product image
     * @param array $file
     * @return string
     */
    private function uploadImage($file) {
        $targetDir = "public/images/products/";
        
        // Create directory if it doesn't exist
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        
        $fileName = time() . '_' . basename($file['name']);
        $targetFile = $targetDir . $fileName;
        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        
        // Check if file is an actual image
        $check = getimagesize($file['tmp_name']);
        if ($check === false) {
            return '';
        }
        
        // Check file size
        if ($file['size'] > self::MAX_FILE_SIZE) {
            return '';
        }
        
        // Allow certain file formats
        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageFileType, $allowedTypes)) {
            return '';
        }
        
        // Upload file
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return $fileName;
        }
        
        return '';
    }
}
?>
