<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/Customers/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url(" admin/Customer/edit") ?>" method="post"
							enctype="multipart/form-data" >

                            <input type="hidden" name="id" value="<?php echo $Customer->Customer_id?>" />

							<div class="form-group">
								<label for="Customer_name">name*</label>
								<input class="form-control <?php echo form_error('Customer_name') ? 'is-invalid':'' ?>"
								 type="text" name="Customer_name" placeholder="Customer name" value="<?php echo $Customer->Customer_name ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Customer_name') ?>
								</div>
							</div>

							<div class="form-group">
                                <label for="Customer_address">Address*</label>
								<input class="form-control <?php echo form_error('Customer_address') ? 'is-invalid':'' ?>"
								 type="text" name="Customer_address" placeholder="Customer Address" value="<?php echo $Customer->Customer_address ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('Customer_address') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
					</div>


				</div>
				<!-- /.container-fluid -->

				<!-- Sticky Footer -->
				<?php $this->load->view("admin/_partials/footer.php") ?>

			</div>
			<!-- /.content-wrapper -->

		</div>
		<!-- /#wrapper -->

		<?php $this->load->view("admin/_partials/scrolltop.php") ?>

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
