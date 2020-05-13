<?php
namespace ass1;//phan vung cua no
require_once "../library/connect.php";
class User
{
    public  $id;
    public $name;
    public $email;
    public $password;

    public static $table = "users";

    private $conn;

    public function __construct($id, $name, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = md5($password);

    }

    public function getConn(){
        if(is_null($this -> conn)){
            $this->conn = connect(labs6);
        }
        return $this->conn;
    }
    //xay dung DAO partern cho users
    public function getTable(){
        return self::$table;
    }
    public function getUsers(){
        $sql = "SELECT * FROM ".self::getTable();
        $rs = $this->getConn()->query($sql);
        return toArray($rs);
    }
    public function save(){
        $sql_text = "INSERT INTO ".self::getTable()." (id, name, email, password) VALUES (".$this->id."','".$this->email."','".$this->password."
        ') ON DUPLICATE KEYUPDATE name =  '".$this->name."','".$this->email."','".$this.$this->password."';'";
        $this->getConn()->query($sql_text);
    }
}