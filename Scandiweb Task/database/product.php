<?php
//use to fetch product data
class product{
    public $db=null;

    public function __construct(dbConnection $db){
        if (!isset($db->con))return null;
        $this->db=$db;
    }

    //fetch product data using getData
    public function getData($table='addproduct'){
        $result=$this->db->con->query("SELECT*FROM {$table}");
        
        $resultArray=array();

        //fetch product data one by one
        while ($item=mysqli_fetch_array($result,MYSQLI_ASSOC)){
            $resultArray[]=$item;
        }
        return $resultArray;
    }

    // inserting data using insertData
    public function insertData(){

        if (isset($_GET['save'])){
            $sku=$_GET['sku'];
            $name=$_GET['name'];
            $price=$_GET['price'];
            $type=$_GET['type'];
            
            if($_GET['size'] != ""){
                $special=$_GET['size'];
            }
            elseif($_GET['weight'] != ""){
                $special=$_GET['weight'];
            }
            elseif($_GET['width'] !="" or $_GET['height'] !="" or $_GET['length'] !="" ){
                $special=$_GET['height'] . "x" . $_GET['width'] . "x" .  $_GET['length'] . "x";
            }
            
            $result=$this->db->con->query ("INSERT INTO addproduct (sku,name,price,special,type) VALUES ('$sku','$name','$price','$special','$type');");

            header("Location:../scandiweb task/index.php?success.php");
        }
    }
    
    //deleting data using deleteData
    public function deleteData(){
            if(isset($_GET['checkbox'])){
                foreach($_GET['checkbox'] as $deleteid){
                    $result=$this->db->con->query("DELETE FROM addproduct WHERE id=".$deleteid);
                    header("Location:../scandiweb task/index.php?success.php");
                }
            }
    }
}