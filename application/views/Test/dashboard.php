<div class="container">
<h3>Welcome <?php echo $this->session->userdata('username')?></h3>
<?php echo anchor("admin/categories","Add Categories",['class'=>'btn btn-primary']);?>
<?php echo anchor("admin/receipe","Add Receipe",['class'=>'btn btn-primary']);?>
<?php echo anchor("admin/blog","Add Blog",['class'=>'btn btn-primary']);?>

<table class="table table-hover">
	<thead>
		<tr>
			<th  scope="col">#</th>
			<th  scope="col">Category Name</th>
		</tr>
	</thead>
	<tbody>
		<tr class="table-active">
			<td>1</td>
			<td>1</td>
		</tr>
	</tbody>
</table>
</div>