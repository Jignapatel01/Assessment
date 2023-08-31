<?php
require_once("model/adminmodel.php");



class Admincontroller extends Adminmodel
{
    public function __construct()
    {
        //logic
        
        parent::__construct();


    
        //show data in table
         $showfruit=$this->showalldata('add_fruititem');


        //insert data into addfruit
        if(isset($_POST["Addfruit"]))
        {
            $fnm=$_POST["fnm"];
            $qty=$_POST["qty"];
            $price=$_POST["price"];
            $data=array("Fruit_Name"=>$fnm,"Qty"=>$qty,"Price"=>$price);
            $addfruit=$this->insertdata($data,'add_fruititem');
            if($addfruit)
            {
                echo "<script>
                alert('thnks for inserted')
                window.location='Admin-addfruit';
                </script>";
            }
        }

        //edit data
        if(isset($_GET["edit"]))
        {
            $id=$_GET["edit"];
            $editdata=$this->editdata('add_fruititem','F_id',$id);
        }


        //update data
        if(isset($_POST["Update"]))
        {
            $fnm=$_POST["fnm"];
            $qty=$_POST["qty"];
            $price=$_POST["price"];
            $upd=$this->updatedata('add_fruititem',$fnm,$qty,$price,'F_id',$id);
            if($upd)
            {
                echo "<script>
                    alert('Updated Successfully')
                    window.location='Admin-viewfruit'; 
                </script>";
            }

        }

         
         

        // // load template routing
        if($_SERVER["PATH_INFO"])
        {   
            switch($_SERVER["PATH_INFO"])
            {
                // case '/':
                //     require_once("index.php");
                //     require_once("header.php");
                //     require_once("login.php");
                //     require_once("footer.php");
                //   break;


                case '/':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("dashboard.php");
                    require_once("footer.php");
                break;

                case '/Admin-addfruit':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("addfruit.php");
                    require_once("footer.php");
                break;

                case '/Admin-viewfruit':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("viewfruit.php");
                    require_once("footer.php");
                break;

                case '/Admin-updatefruititem':
                    require_once("index.php");
                    require_once("header.php");
                    require_once("sidebar.php");
                    require_once("updatefruititem.php");
                    require_once("footer.php");
                break;
                 
                // case '/Admin-managecategory':
                //     require_once("index.php");
                //     require_once("header.php");
                //     require_once("sidebar.php");
                //     require_once("managecategory.php");
                //     require_once("footer.php");
                // break;

                // case '/Admin-addcourse':
                //     require_once("index.php");
                //     require_once("header.php");
                //     require_once("sidebar.php");
                //     require_once("addcourse.php");
                //     require_once("footer.php");
                // break;
                 
                // case '/Admin-managecourse':
                //     require_once("index.php");
                //     require_once("header.php");
                //     require_once("sidebar.php");
                //     require_once("managecourse.php");
                //     require_once("footer.php");
                // break;

                default:
                    require_once("index.php");
                    require_once("header.php");
                    require_once("404.php");
                    require_once("footer.php");

            }
        }


    }
}
$obj=new Admincontroller;

?>