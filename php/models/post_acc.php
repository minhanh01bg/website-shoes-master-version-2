<?php
class post_acc
{
    private $conn;
    private $table = 'users';

    public $id;
    public $address;
    public $name;
    public $email;
    public $password;
    public $user_type;
    // public $fullname;
    public $image;
    public $phone;
    public $birth;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function login()
    {
        $query = 'SELECT id,`address`, `name`,`email`, `password`, `user_type`,`image`,`phone`,`birth` FROM `' . $this->table . '` WHERE email = ? and password = ?';
        $stmt = $this->conn->prepare($query);
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->password = htmlspecialchars(strip_tags($this->password));
        $stmt->bindParam(1, $this->email);
        $stmt->bindParam(2, $this->password);
        // Excute query
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set properties
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->user_type = $row['user_type'];
        $this->image = $row['image'];
        $this->phone = $row['phone'];
        $this->birth = $row['birth'];
        $this->address = $row['address'];
    }
    public function read_single()
    {
        $query = 'SELECT id,`address`, `name`,`email`, `password`, `user_type`,`image`,`phone`,`birth` FROM `' . $this->table . '` WHERE id=?';
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $stmt->bindParam(1, $this->id);
        // Excute query
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        // set properties
        $this->id = $row['id'];
        $this->name = $row['name'];
        $this->email = $row['email'];
        $this->password = $row['password'];
        $this->user_type = $row['user_type'];
        $this->image = $row['image'];
        $this->phone = $row['phone'];
        $this->birth = $row['birth'];
        $this->address = $row['address'];
    }
    
    public function user()
    {
        $query = 'SELECT `address`,`name`,`email`,`birth`,`user_type` FROM `' . $this->table . '`';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
    public function update()
    {
        $query = 'UPDATE `' . $this->table . '` SET `name`=:name,  email=:email, `birth`=:birth,phone=:phone,address=:address 
        WHERE id=:id';
        $stmt = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $this->name = htmlspecialchars(strip_tags($this->name));
        $this->email = htmlspecialchars(strip_tags($this->email));
        $this->phone = htmlspecialchars(strip_tags($this->phone));
        $this->birth = htmlspecialchars(strip_tags($this->birth));
        $this->address = htmlspecialchars(strip_tags($this->address));
        $stmt->bindParam(":id",$this->id);
        $stmt->bindParam(":name",$this->name);
        $stmt->bindParam(":email",$this->email);
        $stmt->bindParam(":phone",$this->phone);
        $stmt->bindParam(":birth",$this->birth);
        $stmt->bindParam(":address",$this->address);
        // $stmt->bindParam(":id",$this->id);
        $stmt->execute();
        
    }
    function update_img()
    {
        $query = "UPDATE users 
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
}
