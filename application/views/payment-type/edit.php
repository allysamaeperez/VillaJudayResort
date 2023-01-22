<div class="account-container" style="margin: 0 auto;">
	
	<div class="content clearfix">
		
		<form action="<?= base_url() ?>payment_type/edit/<?=$payment_type->payment_type?>" method="post">
		
			<h1>Edit Payment Type</h1>		
			
			<div class="add-fields">

				<div class="field">
					<label for="payment_type">Payment Type:</label>
					<input type="text" id="type" name="type" required value="<?=$payment_type->payment_type?>" placeholder="Payment Type" readonly/>
				</div> <!-- /field -->
				
				<div class="field">
					<label for="price">Price:</label>
					<input type="number" min="1" id="price" name="price" required value="<?=$payment_type->price?>" placeholder="Price"/>
					<i icon="icon-dollar"></i>
				</div> <!-- /field -->

				<div class="field">
					<label for="details">Details:</label>
					<input type="text" id="details" name="details" value="<?=$payment_type->details?>" placeholder="Details"/>
				</div> <!-- /field -->

			</div> <!-- /login-fields -->
			
			<div class="login-actions">
				
				<button class="button btn btn-success btn-large">Save</button>
				
			</div> <!-- .actions -->
			
			
			
		</form>
		
	</div> <!-- /content -->
	
</div> <!-- /account-container -->
<br>
