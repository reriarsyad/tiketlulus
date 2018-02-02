

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Welcome, <?php echo $_SESSION['nama'] ?>	      
					<small>Have Fun!</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url() ?>admin"><i class="fa fa-dashboard"></i> Admin</a></li>
				<li class="active">Home</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content container-fluid">

		<div class="box box-info">
						<div class="box-header with-border">
							<h3 class="box-title">Create User/Admin</h3>
						</div>
						<div class="box-body">
							<form action="<?php echo base_url() ?>crud/register" method="post">
								<div class="input-group form-group has-feedback">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input class="form-control" name="username" placeholder="Username" type="text">
								</div>
								<div class="input-group form-group has-feedback">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" name="password" placeholder="Password" type="password">
								</div>
								<div class="input-group form-group has-feedback">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" name="fullname" placeholder="Fullname" type="text">
								</div>
								<div class="form-group has-feedback">
									<label>Textarea</label>
									<textarea name="address" class="form-control" rows="3" placeholder="Address"></textarea>
								</div>
								<div class="input-group form-group has-feedback">
									<span class="input-group-addon"><i class="fa fa-phone"></i></span>
									<input class="form-control" name="phone" placeholder="phone" type="text">
								</div>
								<div class="form-group">
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="l">
											Laki Laki
										</label>
									</div>
									<div class="radio">
										<label>
											<input type="radio" name="gender" value="p">
											Perempuan
										</label>
									</div>
								</div>
								<div class="form-group">
									<label>Level</label>
									<select name="level" class="form-control">
										<option value="1">1 : Admin</option>
										<option value="2">2 : User</option>
									</select>
								</div>
								<button type="submit" class="btn btn-primary">Submit</button>
							</form>
						</div>
						<!-- /.box-body -->
					</div>

		<div class="box">
				<div class="box-header">
					<h3 class="box-title">User Database</h3>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
						<div class="row">
							<div class="col-sm-12">
								<table id="user-table" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
									<thead>
										<tr role="row">
											<th class="sorting_asc" aria-controls="user-table"  aria-sort="ascending" aria-label="Nomor: activate to sort column descending">
												No.
											</th>
											<th class="sorting" aria-controls="user-table" aria-label="Username: activate to sort column ascending">
												Username
											</th>
											<th class="sorting" aria-controls="user-table" aria-label="Password: activate to sort column ascending">
												Password
											</th>
											<th class="sorting" aria-controls="user-table" aria-label="Name: activate to sort column ascending">
												Name
											</th>
											<th>
												Address
											</th>
											<th class="sorting" aria-controls="user-table">
												Phone
											</th>
											<th class="sorting" aria-controls="user-table">
												Gender
											</th>
											<th class="sorting" aria-controls="user-table"  style="width: 20%;">
												Action
											</th>
										</tr>
									</thead>
									<tbody>
										<?php 
											$query = $this->db->get('user');

											$nomor = 1;

											if ($query->num_rows() > 0)
											{
												foreach ($query->result() as $row)
												{
													
										?>
										<tr role="row">
											<td><?php echo $nomor++?></td>
											<td><?php echo $row->username;?></td>
											<td><?php echo $row->password;?></td>
											<td><?php echo $row->fullname;?></td>
											<td><?php echo $row->address;?></td>
											<td><?php echo $row->phone;?></td>
											<td><?php echo $row->gender;?></td>
											<td>
												<a class="btn btn-warning btn-s" data-toggle="modal" data-target="#editModal" data-id="<?php echo $row->id;?>" data-username="<?php echo $row->username;?>" data-password="<?php echo $row->password;?>" data-fullname="<?php echo $row->fullname;?>" data-address="<?php echo $row->address;?>" data-phone="<?php echo $row->phone;?>" data-gender="<?php echo $row->gender;?>">
													<span class="fa fa-pencil"/>
													edit
												</a>
												<a class="btn btn-danger btn-s" href="<?php echo base_url('crud/hapusUser/').$row->id ?>">
													<span class="fa fa-trash"/>
													hapus
												</a>
											</td>
										</tr>
										<?php 
												}
											} ?>
									</tbody>
									<tfoot>
										<tr>
											<th>No.</th>
											<th>Username</th>
											<th>Password</th>
											<th>Fullname</th>
											<th>Address</th>
											<th>Phone</th>
											<th>Gender</th>
											<th>Action</th>
										</tr>
									</tfoot>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			
		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Edit User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="editForm" action="<?php echo base_url('crud/edit/')?>" method="post">
					<!-- <div class="input-group form-group has-feedback">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input id="id-text" class="form-control" disabled name="username" type="text">
						</div> -->
						<div class="input-group form-group has-feedback">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input id="username"class="form-control" name="username" placeholder="Username" type="text">
						</div>
						<div class="input-group form-group has-feedback">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input id="password"class="form-control" name="password" placeholder="Password" type="password">
						</div>
						<div class="input-group form-group has-feedback">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input id="fullname"class="form-control" name="fullname" placeholder="Fullname" type="text">
						</div>
						<div class="form-group has-feedback">
							<label>Textarea</label>
							<textarea id="address"name="address" class="form-control" rows="3" placeholder="Address"></textarea>
						</div>
						<div class="input-group form-group has-feedback">
							<span class="input-group-addon"><i class="fa fa-phone"></i></span>
							<input id="phone"class="form-control" name="phone" placeholder="phone" type="text">
						</div>
						<div class="form-group">
							<div class="radio">
								<label>
									<input type="radio" name="gender" id="gender-laki" value="l">
									Laki Laki
								</label>
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="gender" id="gender-perempuan" value="p">
									Perempuan
								</label>
							</div>
						</div>
						<div class="form-group">
							<label>Level</label>
							<select name="level" class="form-control">
								<option value="1">1 : Admin</option>
								<option value="2">2 : User</option>
							</select>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary submit">Edit</button>
				</div>
			</div>
		</div>
	</div>
