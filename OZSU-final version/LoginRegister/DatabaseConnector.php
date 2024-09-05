<?php
class Users {
    public $EmployeeId;
    public $name;
    public $email;
    public $password;
    public $company_position;
    public $AddDate;
    public $IsActive;


    public $conn;

    public function __construct(){
        $this->conn = mysqli_connect("localhost","root","123456789","ozsu");
        if($this->conn->connect_error){
            die("Bağlantı hatası: ".$this->conn->connect_error);
        }
    }

    public function GetUsers() {
        $queryAttachment = "";

        if (isset($this->email) AND !empty($this->email))
            $queryAttachment .= " AND email = '".htmlspecialchars($this->email)."' ";

        if (isset($this->password) AND !empty($this->password))
            $queryAttachment .= " AND password = '".htmlspecialchars($this->password)."' ";

        $sql = "
                SELECT * 
                FROM users
                WHERE
                    IsActive = 1
                ".$queryAttachment."
";
        $result = $this->conn->query($sql);
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    public function AddUser() {

        $name = htmlspecialchars($this->name);
        $email = htmlspecialchars($this->email);
        $password = htmlspecialchars($this->password);
        $company_position = htmlspecialchars($this->company_position);

        $sql = "
                INSERT INTO users (name, email, password,company_position) 
                VALUES ('$name', '$email', '$password','$company_position')
        ";
        $result = $this->conn->query($sql);

        if ($result) {
            return mysqli_insert_id($this->conn);
        } else {
            echo 'Ekleme hatası: ' . $this->conn->error;
            return false;
        }
    }
}
?>