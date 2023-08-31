<div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">Add Fruit </h3>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="<?php echo $mainurl;?>/">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Add Fruit</li>
                </ol>
              </nav>
            </div>
            <div class="row">
              <div class="col-md-6 grid-margin stretch-card ms-5">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Add Fruit</h4>
                    <br>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Fruit Name</label>
                        <input type="text" name="fnm" class="form-control" id="exampleInputUsername1" placeholder="Fruit Name*" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Qty</label>
                        <input type="text" name="qty" class="form-control" id="exampleInputEmail1" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Price</label>
                        <input type="text" name="price" class="form-control" id="exampleInputEmail1" required>
                      </div>
                      
                      <button type="submit" name="Addfruit" class="btn btn-gradient-primary me-2">Add Fruit</button>
                      <button class="btn btn-light">Reset</button>
                    </form>
                  </div>
                </div>
              </div>