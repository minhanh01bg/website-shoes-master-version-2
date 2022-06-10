<?php
class post_wishlist
{
    private $conn;
    private $table = 'wishlist';

    public $id;
    public $user_id;
    public $pid;
    public $name;
    public $price;
    public $image;
    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function read()
    {
        $query = "SELECT id,`user_id`,`name`,`pid`,price,`image` FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        if ($stmt->execute()) {
            return $stmt;
        }
    }
    public function read_single()
    {
        $query = 'SELECT id,`user_id`,`name`,`pid`,price,`image` FROM ' . $this->table . ' WHERE id = ?';
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
        $this->user_id = $row['user_id'];
        $this->price = $row['price'];
        $this->image = $row['image'];
        $this->pid = $row['pid'];
    }
    // update post
   
    function update_img()
    {
        $query = "UPDATE wishlist 
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
