<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>User Management</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/jquery.dataTables.css' ?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/dataTables.bootstrap4.css' ?>">

</head>

<body>
	<div class="container mt-5">
		<h2>Data User</h2>
		<p>Anda dapat mengelola data user</p>
		<table class="table table-striped border" id="listUserTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Username</th>
					<th>Email</th>
					<th style="text-align: right;">Action</th>
				</tr>
			</thead>
			<tbody id="listUser">
				<!-- Untuk menampilkan datanya, menggunakan JQuery + AJAX -->
			</tbody>
		</table>
		<div><a href="javascript:void(0);" class="btn btn-success" data-toggle="modal" data-target="#addUserModal"><span class="fa fa-plus"></span> Add New</a></div><br>
	</div>
	<form id="saveUserForm" method="post">
		<div class="modal fade" id="addUserModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Add New User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Username*</label>
							<div class="col-md-10">
								<input type="text" name="username" id="username" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Email*</label>
							<div class="col-md-10">
								<input type="text" name="email" id="email" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Password*</label>
							<div class="col-md-10">
								<input type="text" name="password" id="password" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<form id="editUserForm" method="post">
		<div class="modal fade" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="editModalLabel">Edit Data User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Username*</label>
							<div class="col-md-10">
								<input type="text" name="usernameEdit" id="usernameEdit" class="form-control" required>
							</div>
						</div>
						<div class="form-group row">
							<label class="col-md-2 col-form-label">Email*</label>
							<div class="col-md-10">
								<input type="text" name="emailEdit" id="emailEdit" class="form-control" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="userId" id="userId" class="form-control">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
						<button type="submit" class="btn btn-primary">Yes</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<form id="deleteUserForm" method="post">
		<div class="modal fade" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
						<p>Are you sure to delete this record?</p>
					</div>
					<div class="modal-footer">
						<input type="hidden" name="deleteUserId" id="deleteUserId" class="form-control">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
						<button type="submit" class="btn btn-primary">Yes</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery-3.2.1.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/bootstrap.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/jquery.dataTables.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/dataTables.bootstrap4.js' ?>"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/crud_operation.js' ?>"></script>

</body>

</html>