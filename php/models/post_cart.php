<?php
class post_cart
{
    private $conn;
    private $table = "cart";
    public $id;
    public $user_id;
    public $pid;
    public $name;
    public $price;
    public $quantity;
    public $image;
    public $size;
    public $ob;
    public $category;
    public function __construct($db)
    {
        $this->conn = $db;
    }
    
    public function read_single()
    {
        $query = 'SELECT id, `user_id`,pid ,`name` ,price,`quantity`, `image`,size, `object`,category FROM ' . $this->table . ' WHERE user_id = ?';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // bind id
        $stmt->bindParam(1, $this->user_id);

        // Excute query
        $stmt->execute();
        return $stmt;
    }
    public function update()
    {
        $query = "UPDATE ".$this->table." SET `price`=:price,quantity=:quantity,`object` =:object,size=:size
            WHERE id =:id";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->quantity = htmlspecialchars(strip_tags($this->quantity));
        $this->size = htmlspecialchars(strip_tags($this->size));
        $this->ob = htmlspecialchars(strip_tags($this->ob));
        // Bind data
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':quantity', $this->quantity);
        $stmt->bindParam(':size', $this->size);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':object', $this->ob);
        if ($stmt->execute()) {
            return true;
        }

        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;

    }
    // Delete one product in the cart
    public function delete()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE ' . $this->table . '.id = :id';
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(':id', $this->id);
        if($stmt->execute()){
            return true;
        }
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
    // Delete all products in the cart
    public function delete_all()
    {
        $query = 'DELETE FROM ' . $this->table . ' WHERE ' . $this->table . '.user_id = :id';
        $stmt = $this->conn->prepare($query);
        $this->user_id = htmlspecialchars(strip_tags($this->user_id));
        $stmt->bindParam(':id', $this->user_id);
        if($stmt->execute()){
            return true;
        }
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
}
