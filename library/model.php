<?php
namespace library;

abstract class Model{//chuyen lo thao tacc vs csdl
    protected $table;

    public abstract function all();
    public abstract function save();
    public abstract function find($id);
    public abstract function delete();
    public function getConn(){
        return connector::connector();
    }
    //xay dung DAO partern cho users
    public function getTable(){
        return $this->table;//de goi static thi dung self:: (ben java java:class)
    }

    public function toArray($rs){
        $data = [];
        if($rs->num_rows > 0){
            while ($row = $rs -> fetch_assoc()){
                $data[] = $row;
                //mỗi row mà 1 mảng có các key là các column
            }
            //var_dump($students);
        }
        //students là mang chứa các sinh viên
        return $data;
    }
}