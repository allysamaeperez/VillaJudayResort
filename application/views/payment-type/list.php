<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?= base_url() ?>payment-type/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Payment Type</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Payment Type </th>
				    <th> Price </th>
				    <th> Details </th>
				   
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php
				if(isset($payment_types) && is_array($payment_types)):
					foreach ($payment_types as $rt) {
				?>
				  <tr>
				    <td> <?=$rt->payment_type ?> </td>
				    <td> <?=$rt->price ?>$ </td>
				    <td> <?=$rt->details ?> </td>
				   
				    <td class="td-actions">
				    	<a href="<?= base_url() ?>payment_type/edit/<?=$rt->payment_type?>" class="btn btn-small btn-primary"><i class="btn-icon-only icon-edit"> </i></a>
				    	<a href="<?= base_url() ?>payment_type/delete/<?=$rt->payment_type?>" onclick="return confirm('Are you sure ?')" class="btn btn-danger btn-small"><i class="btn-icon-only icon-remove"> </i></a>
				    </td>
				  </tr>
				<?php } ?>
				<?php endif; ?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>
