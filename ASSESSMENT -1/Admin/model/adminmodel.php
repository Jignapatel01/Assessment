
<?php
 class Adminmodel
{
    public $connection="";
    public function __Construct()
    {
        
        //database connection
        //Exception handling
        try
        {
            $this->connection=new mysqli("localhost","root","","fruit_store");
             //echo "connection successfully";
        }
        catch(Exception $e)
        {
            die(mysqli_error($this->connection));
        }
    }
    public function insertdata($data,$table)
    {   
        $column=array_keys($data);
        $column1=implode(",",$column);

        $value=array_values($data);
        $value1=implode("','",$value);

       $insert="insert into $table($column1)values('$value1')";
        $exe=mysqli_query($this->connection,$insert);
        return $exe;
    }


    public function showalldata($table)
    {
        $select="select * from  $table";
        $exe=mysqli_query($this->connection,$select);
        while($fetch=mysqli_fetch_array($exe))
        {
            $arr[]=$fetch;
        }
        return $arr;
    }

        //member function to edit
        public function editdata($table,$column,$id)
        {
            $edit="select * from $table where $column='$id'";
            $exe=mysqli_query($this->connection,$edit);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

        //member function to update a data
        public function updatedata($table,$fnm,$qty,$price,$column,$id)
        {
            $upd="update $table set Fruit_Name='$fnm',Qty='$qty',Price='$price' where $column='$id' ";
            $exe=mysqli_query($this->connection,$upd);
            return $exe;
        }

         
}

?>