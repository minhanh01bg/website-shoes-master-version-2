<?php
class post_product
{
    private $conn;
    private $table = 'products';

    public $id;
    public $name;
    public $details;
    public $price;
    public $image;
    public $ob;
    public $category;
    public $brand;
    public $color;
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function read()
    {
        $query = "SELECT id,`name`,`details`,price,`image`,`object`,`category`,`brand`,`color` FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return $stmt;
        }
    }
    public function read_single()
    {
        $query = 'SELECT id, `name`,details ,price ,`image`,`object`, category,brand,`color` FROM ' . $this->table . ' WHERE id = ?';
        // prepare statement
        $stmt = $this->conn->prepare($query);
        // bind id
        $stmt->bindParam(1, $this->id);

        // Excute query
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set properties
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->details = $row['details'];
        $this->price = $row['price'];
        $this->image = $row['image'];
        $this->ob = $row['object'];
        $this->category = $row['category'];
        $this->brand  = $row['brand'];
        $this->color  = $row['color'];
        
    }
    // update post
    public function update()
    {
        $query = "UPDATE products
            SET `name`=:names,details=:details,price=:price,`object` =:objects,category = :category,brand=:brand,`color`=:color
            WHERE ID =:id";

        // Prepare statement
        $stmt = $this->conn->prepare($query);

        // Clean data
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->details = htmlspecialchars(strip_tags($this->details));
        $this->price = htmlspecialchars(strip_tags($this->price));
        $this->ob = htmlspecialchars(strip_tags($this->ob));
        $this->category = htmlspecialchars(strip_tags($this->category));
        $this->brand = htmlspecialchars(strip_tags($this->brand));
        $this->color = htmlspecialchars(strip_tags($this->color));
        
        // Bind data
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':names', $this->name);
        $stmt->bindParam(':details', $this->details);
        $stmt->bindParam(':price', $this->price);
        $stmt->bindParam(':objects', $this->ob);
        $stmt->bindParam(':category', $this->category);
        $stmt->bindParam(':brand', $this->brand);
        $stmt->bindParam(':color', $this->color);
        
        if ($stmt->execute()) {
            return true;
        }
        // Print error if something goes wrong
        printf("Error: %s.\n", $stmt->error);

        return false;

    }

    function update_img()
    {
        $query = "UPDATE products 
        SET `IMAGE`=:images
        WHERE ID =:id";
        // $this->id = 'HN7859';
        $stmt = $this->conn->prepare($query);
        $this->images = htmlspecialchars(strip_tags($this->image));
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':images', $this->image);
        if ($stmt->execute()) {
            return true;
        }
        printf("Error: %s.\n", $stmt->error);
        return false;
    }
     // Delete post
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
}
