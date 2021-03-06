<?php if( ! defined( 'ACCESS' ) ) die( 'DIRECT ACCESS NOT ALLOWED' ); ?>
<?php element( 'header' ); ?>

<?php 
	$cars = $DB->query( "SELECT * FROM cars" );  
?>

<div class="row">
	  <div class="col-md-12 grid-margin">
	    <div class="card">
	      <div class="card-body">
	        <h1>New Car</h1>          
          <div class="card">
            <div class="card-body">              
              <form class="forms-sample" method="post">
                <input type="hidden" name="action" value="add_car">
                <div class="form-group row">
                  <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Model</label>
                  <div class="col-sm-9">
                    <input type="text" name="model_name" required class="form-control" id="exampleInputEmail2" placeholder="Model Name">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Plate Number</label>
                  <div class="col-sm-9">
                    <input type="text" name="plate_number" required class="form-control" id="exampleInputPassword2" placeholder="Plate Number">
                  </div>
                </div>
                <button type="submit" class="btn btn-success mr-2">Submit</button>
                <a class="btn btn-light" href="<?php echo SITE_URL ?>/?page=cars">Cancel</a>
              </form>
            </div>
          </div>
	      </div>
	    </div>
	  </div>
	</div>

<?php element( 'footer' ); ?>