<div class="main">
  <div class="main-inner">
    <div class="container">
      <div class="row">
        <div class="span12">
			<a href="<?= base_url() ?>departments/add" class="btn btn-small btn-primary"><i class="btn-icon-only icon-ok"></i>Add Department</a>
			<br><br>
			<table class="table table-striped table-bordered">
				<thead>
				  <tr>
				    <th> Department ID </th>
				    <th> Department Name </th>
				    <th> Department Budget </th>
				    <th class="td-actions"> Actions </th>
				  </tr>
				</thead>
				<tbody>
				<?php foreach($data1 as $user):?>
				<tr>
					<td><?php echo $user->firstname;?></td>
				</tr>
				<?php endforeach;?>
				</tbody>
			</table>
		</div>
	  </div>
	</div>
  </div>
</div>