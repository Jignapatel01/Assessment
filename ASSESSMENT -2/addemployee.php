<div class="container mt-5 mb-5">
 
    <div class="row">
        <h2 class="text-center">Add Employee Detail</h2>
        <div class="col-md-9 mx-auto">
        <form method="post" enctype="multipart/form-data">
         <div class="form-group mt-3">
            <label>FirstName:</label>
        <input type="text" name="fnm" placeholder="Enter firstname" required class="form-control"> 
        </div>  

        <div class="form-group mt-3">
            <label>LastName:</label>             
            <input type="text" name="lnm" placeholder="Enter lastname" required class="form-control"> 
            </div>   
         <div class="form-group mt-3">
            <label>Email:</label>
            <input type="text" name="em" placeholder="Enter email" required class="form-control"> 
            </div>   
                
         <div class="form-group mt-3">
            <label>Mobile:</label>
          <input type="text" name="mob" placeholder="Enter Mobile Number" required class="form-control"> 
          </div>   
    
          <div class="form-group mt-3">
            <label>Address:</label>
          <textarea name="address" placeholder="Address" required class="form-control"> </textarea>

          </div>   

          <div class="form-group mt-3">
            Male: <input type="radio" name="gender" value="male"> 
            Female: <input type="radio" name="gender" value="female"> 
             
         </div>  


         <div class="form-group mt-3">
            <label>Password:</label>
          <input type="password" name="pass" placeholder="Enter Password *" required class="form-control"> 
          </div> 

          
         <div class="form-group mt-3">
            <label> Confirm Password:</label>
          <input type="password" name="cpass" placeholder="Enter Confirm Password *" required class="form-control"> 
          </div> 


          <div class="form-group mt-3">
            <input type="submit" name="submit" value="Submit" class="btn btn-lg btn-outline-success">

        </div>
        </form>
        </div>
        
        

    </div>

</div>