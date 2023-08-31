<?php

    class model
    {
        public $connection='';
        public function __construct()
        {
                try 
            {
            $this->connection=new mysqli("localhost","root","","fruit_store");
        
            }
            catch(Exception $e)
            {
                die(mysqli_error($this->connection));
            }
        }

        
        //create a member to display all data
        public function showdata($table)
        {
            $select="select * from $table";
            $exe=mysqli_query($this->connection,$select);
            while($fetch=mysqli_fetch_array($exe))
            {
                $arr[]=$fetch;
            }
            return $arr;
        }

        
    }






?>