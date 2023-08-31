<?php
require_once("Model/model.php");

class controller extends model
{
    public function __construct()
    {
        parent::__construct();



        //display data
        $showall=$this->showdata('add_fruititem');

       

       




        if(isset($_SERVER["PATH_INFO"]))
        {
            switch($_SERVER["PATH_INFO"])
            {
                case '/':
                    require_once("index.php");
                    require_once("navigation.php");
                    require_once("content.php");
                    
                    break;

                case '/viewstock':
                    require_once("index.php");
                    require_once("navigation.php");
                    require_once("viewstock.php");
                    break;

               
                default:
                 require_once("index.php");
                 require_once("404.php");
            }
        }
  
    }

}
$obj=new controller();


?>