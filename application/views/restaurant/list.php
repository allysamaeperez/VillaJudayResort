<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<div class="account-container" style="display: none;" id="form">
				<div class="content clearfix">
					<form action="<?= base_url() ?>service/restaurant" method="post">
					
						<div class="add-fields">

							<div class="field">
								<label for="customer">Customer:</label>
								<select name="customer" required>
									<?php foreach ($customers as $customer) {
										echo '<option value="'.$customer->customer_id.'">'.$customer->customer_firstname.' '.$customer->customer_lastname.'</option>';
									 } ?>
								</select>
							</div> <!-- /restaurant -->

							<div class="field">
								<label for="restaurant_name">Restaurant:</label>
								<select name="restaurant" required>
									<?php foreach ($restaurants as $restaurant) {
										echo '<option value="'.$restaurant->restaurant_name.'">'.$restaurant->restaurant_name.'</option>';
									 } ?>
								</select>
							</div> <!-- /restaurant -->
							
							<div class="field">
								<label for="restaurant_checkin_date">Date:</label>
								<input type="date" name="date" required value="" placeholder="Date"/>
							</div> <!-- /date -->

							<div class="field">
								<label for="restaurant_details">Table Number:</label>
								<input type="text" name="table_num" placeholder="Table Number" /> 
							</div> <!-- /field -->

							<div class="field">
								<label for="table_count">Total Price:</label>
								<input type="text" name="price" required value="" placeholder="Total Price"/> 
							</div> <!-- /field -->

						</div> <!-- /login-fields -->
						
						<div class="login-actions">
							
							<button class="button btn btn-success btn-large">Add</button>
							
						</div> <!-- .actions -->
						
						
						
					</form>
				</div>
			</div>
			<hr>
			
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Firstname </th>
				    <th> Lastname</th>
				    <th> Phone Number </th>
				    <th> Departure Date </th>
				    <th> Arrival Date</th>
					<th> Room Type</th>
					<th> Guest</th>
				    <th class="td-actions", width="100"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
				if(isset($restaurants) && is_array($restaurants)){
					foreach ($restaurants as $rest) {
						// $emp->username
				?>
				  <tr>
				    <td> <?=$rest->firstname?> </td>
				    <td> <?=$rest->lastname?> </td>
				    <td> <?=$rest->phone_number?> </td>
				    <td> <?=$rest->departure_date?> </td>
				    <td> <?=$rest->arrival_date?> </td>
					<td> <?=$rest->room_type?> </td>
					<td> <?=$rest->guest?> </td>
				    <td class="td-actions"></i></a><a href="<?= base_url() ?>restaurant/delete/<?=$rest->firstname?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a></td>
				  </tr>
				<?php }} ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>