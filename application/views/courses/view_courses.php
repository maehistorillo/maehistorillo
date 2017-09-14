<div class="container-fluid">
	<div class="row" id="header">
		<div class="col-md-12">
			<h1>Student Management System</h1>
		</div>
	</div>
	<div class="row">
		<div class="col-md-3">
			<h2>MENU</h2>
		</div>
		<div class="col-md-9">
			<h3>Courses</h3>
			<!--<img class="img img-circle" src="<?php echo base_url('assets/images/koala.jpg');?>" alt="My favorite animal" height="200" />-->
			<div class="pull-right">
				<a href="<?php echo base_url('Courses/add_course');?>" class="btn btn-danger">New Course</a>
			</div>
			<table class="table table-striped ">
				<thead>
					<tr>
						<th>COURSE</th>
						<th>COURSE DESCRIPTION</th>
						<th>ACTION</th>
					</tr>
				</thead>
				<tbody>
				<?php
				foreach($courses as $s){
					echo '	<tr>	
								<td>'.$s['course_id'].'</td>
								<td>'.$s['course_description'].'</td>
								<td>
									<a href="'.base_url('courses/profile/'.$s['course_id']).'">View</a> |
									<a href="">Updated</a> |
									<a href="" class="delete">Delete</a>
								</td>
							</tr>
							';
				}
				?>
				</tbody>
			</table>		
		</div>		
	</div>
</div>

<script type="text/javascript">
$(document).ready(function(){
	$('.delete').click(function(){
		var ans = confirm("Do you want to delete this record?");
		if(ans==true){
			alert("Delete");
			//redirect to delete method
			//location.href = <?php echo base_url(); ?>";
		}
	});
});
</script>
