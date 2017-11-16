<?php
include('./connection.php');

class items extends connection
{


    public function insert_user()
    {
        if (isset($_POST['insert_item'])) {

            if (!isset($_GET['update'])) {

                extract($_POST);

                $sql = $this->conn->prepare("INSERT INTO items (name,price,quantity,item_code,description) VALUES (?, ?, ?, ?, ?)");

                $sql->bind_param("siiss", $name, $price, $quantity, $item_code, $description);

                $sql->execute();

            }
        }
    }


    public function fetchdata($id=0)

    {

        if($id==0) {
            $sql = "select * from items";

            $result = $this->conn->query($sql) or die($this->conn->connect_error . "Data cannot inserted");
            return $result;

        }
        else{
            $query=$this->conn->prepare("SELECT name,price,quantity,item_code,description FROM items WHERE id=?");

            $query->bind_param("i",$id);
            $query->execute();

            $query->bind_result($name,$price,$quantity,$item_code,$description);

            $query->fetch();

            return ['name'=>$name,'price'=>$price,'quantity'=>$quantity,'item_code'=>$item_code,'description'=>$description];




        }

    }


    public function delete($id, $table)
    {

        $query = "DELETE FROM $table WHERE id = ?";

        $sql = $this->conn->prepare($query);

        $sql->bind_param("i",$id);


        if ($sql->execute()) {

            echo "Record deleted successfully";


        } else {
            echo "Error deleting record: " . $this->conn->error;
        }


    }


    function update()
    {
        if (isset($_POST['insert_item'], $_GET['update']) && !empty($_GET['update'])) {
            $id = $_GET['update'];

            extract($_REQUEST);

            $stmt = $this->conn->prepare("UPDATE items SET name = ?, price = ?, quantity = ?, item_code = ?, description = ? WHERE id=?");

            $stmt->bind_param('siissi', $name, $price, $quantity, $item_code, $description, $id);

            $stmt->execute();

            if ($stmt->errno) {
                return false;
            } else {
                echo "record updated";
                return true;


            }

        }
    }


}


?>