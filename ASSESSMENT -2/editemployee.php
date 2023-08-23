<div class="container mt-5 mb-5">
 
    <div class="row">
        <h2 class="text-center">Edit Employee Detail</h2>
        <div class="col-md-9 mx-auto">
        <form method="post" enctype="multipart/form-data">
         <div class="form-group mt-3">
            <label>FirstName:</label>
        <input type="text" name="fnm" placeholder="Enter firstname"  value="<?php echo $editdata[0]["Firstname"] ?>" required class="form-control"> 
        </div>  

        <div class="form-group mt-3">
            <label>LastName:</label>             
            <input type="text" name="lnm" placeholder="Enter lastname" value="<?php echo $editdata[0]["Lastname"] ?>" required class="form-control"> 
            </div>   
         <div class="form-group mt-3">
            <label>Email:</label>
            <input type="text" name="em" placeholder="Enter email" value="<?php echo $editdata[0]["Email"] ?>" required class="form-control"> 
            </div>   
                
         <div class="form-group mt-3">
            <label>Mobile:</label>
          <input type="text" name="mob" placeholder="Enter Mobile Number" value="<?php echo $editdata[0]["Mobile"] ?>" required class="form-control"> 
          </div>   
    
          <div class="form-group mt-3">
            <label>Address:</label>
          <textarea name="address" placeholder="Address" required class="form-control"><?php echo $editdata[0]["Address"] ?> </textarea>

          </div>   

          <div class="form-group mt-3">
            Male: <input type="radio" name="gender" value="<?php echo $editdata[0]["Gender"] ?>"> 
            Female: <input type="radio" name="gender" value="<?php echo $editdata[0]["Gender"] ?>"> 
             
         </div>  


         <div class="form-group mt-3">
            <label>Password:</label>
          <input type="password" name="pass" placeholder="Enter Password *" value="<?php echo $editdata[0]["Password"] ?>" required class="form-control"> 
          </div> 

          
         <div class="form-group mt-3">
            <label> Confirm Password:</label>
          <input type="password" name="cpass" placeholder="Enter Confirm Password *" value="<?php echo $editdata[0]["ConfirmPassword"] ?>" required class="form-control"> 
          </div> 


          <div class="form-group mt-3">
            <input type="submit" name="update" value="Update" class="btn btn-lg btn-outline-success">

        </div>
        </form>
        </div>
        
        

    </div>

</div>