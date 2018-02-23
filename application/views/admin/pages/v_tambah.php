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
									<input class="form-control" name="firstname" placeholder="Firstnamename" type="text">
								</div>
								<div class="input-group form-group has-feedback">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input class="form-control" name="lastname" placeholder="Lastname" type="text">
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