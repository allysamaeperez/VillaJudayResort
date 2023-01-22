<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>payment-type/add" method="post">
		
			<h1>Add Payment Type</h1>		
<?php if(isset($error)) {?>
			<div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert">×</button>
              <strong>Error!</strong> <?=$error?>
            </div>
<?php } ?>
			<div class="add-fields">

				<div class="field">
					<label for="room_type">Payment Type:</label>
					<input type="text" id="type" name="type" required value="" placeholder="Payment Type"/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="room_price">Price:</label>
					<input type="number" min="1" id="price" name="price" required value="" placeholder="Price"/>
					<i icon="icon-dollar"></i>
				</div> <!-- /field -->

				<div class="field">
					<label for="room_details">Details:</label>
					<input type="text" id="details" name="details" value="" placeholder="Details"/>
				</div> <!-- /field -->


			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Add</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>
