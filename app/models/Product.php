<?php
/**
 * Product Model
 */
class Product {
    private $conn;
    private $table = 'products';

    // Product properties
    public $id;
    public $name;
    public $category;
    public $price;
    public $stock;
    public $status;
    public $image;
    public $description;
    public $created_at;
    public $updated_at;

    /**
     * Constructor
     * @param $db Database connection
     */
    public function __construct($db) {
        $this->conn = $db;
    }

    /**
     * Get all products
     * @return PDOStatement
     */
    public function getAll() {
        $query = "SELECT * FROM " . $this->table . " ORDER BY created_at DESC";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    /**
     * Get single product by ID
     * @return void
     */
    public function getById() {
        $query = "SELECT * FROM " . $this->table . " WHERE id = ? LIMIT 1";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        $stmt->execute();
        
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if ($row) {
            $this->name = $row['name'];
            $this->category = $row['category'];
            $this->price = $row['price'];
            $this->stock = $row['stock'];
            $this->status = $row['status'];
            $this->image = $row['image'];
            $this->description = $row['description'];
            $this->created_at = $row['created_at'];
            $this->updated_at = $row['updated_at'];
        }
    }

    /**
     * Create new product
     * @return bool
     */
    public function create() {
        $query = "INSERT INTO " . $this->table . " 
                SET name = :name, 
                    category = :category, 
                    price = :price, 
                    stock = :stock, 
                    status = :status, 
                    image = :image, 
                    description = :description,
                    created_at = NOW()";
        
        $stmt = $this->conn->prepare($query);
        
        // Bind parameters
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':category', $this->category);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':stock', $this->stock);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':description', $this->description);
        
        if ($stmt->execute()) {
            return true;
        }
        
        return false;
    }

    /**
     * Update product
     * @return bool
     */
    public function update() {
        $query = "UPDATE " . $this->table . " 
                SET name = :name,
                    category = :category,
                    price = :price,
                    stock = :stock,
                    status = :status,
                    image = :image,
                    description = :description,
                    updated_at = NOW()
                WHERE id = :id";
        
        $stmt = $this->conn->prepare($query);
        
        // Bind parameters
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':category', $this->category);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':stock', $this->stock);
        $stmt->bindParam(':status', $this->status);
        $stmt->bindParam(':image', $this->image);
        $stmt->bindParam(':description', $this->description);
        $stmt->bindParam(':id', $this->id);
        
        if ($stmt->execute()) {
            return true;
        }
        
        return false;
    }

    /**
     * Delete product
     * @return bool
     */
    public function delete() {
        $query = "DELETE FROM " . $this->table . " WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $this->id);
        
        if ($stmt->execute()) {
            return true;
        }
        
        return false;
    }

    /**
     * Search products
     * @param string $keyword
     * @return PDOStatement
     */
    public function search($keyword) {
        $query = "SELECT * FROM " . $this->table . " 
                WHERE name LIKE ? OR category LIKE ? OR description LIKE ?
                ORDER BY created_at DESC";
        
        $stmt = $this->conn->prepare($query);
        $keyword = "%{$keyword}%";
        $stmt->bindParam(1, $keyword);
        $stmt->bindParam(2, $keyword);
        $stmt->bindParam(3, $keyword);
        $stmt->execute();
        
        return $stmt;
    }
}
?>
