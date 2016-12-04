<!DOCTYPE html>
<html>
<head>
	<title>Doctors List</title>
	<?php require_once __DIR__.'/templates/header.php'; ?>

	<?php echo link_tag('assets/css/booking.css') ?>
	<?php echo link_tag('assets/css/rating.css') ?>

	<script src="<?php echo base_url() ?>assets/js/main.js"></script>
</head>
<body>
	<?php require_once __DIR__."/templates/nav.php"; ?>

	<section id="content">
		<div class="container-fluid">
			<form id="frmBooking">
				<div class="row">
					<div class="panel panel-info">
						<div class="panel-heading text-center">
							<h3>Booking Transaction</h3>
						</div>
						<div class="panel-body">
							<div class="booking-header">
								<form>
									<div class="form-group row">
										<label for="dspBookingNo" class="col-sm-2">
											Booking No
										</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="dspBookingNo">	
										</div>
										<label for="BookingDate" class="col-sm-2">
											Booking Date
										</label>
										<div class="col-sm-4">
											<input type="text" class="form-control" id="BookingDate">	
										</div>
									</div>
									<div class="booking-detail">
										<div class="panel panel-info">
											<div class="panel-heading">
												<form>
													<div class="form-group row">
														<label for="DoctorsName" class="col-sm-3"> Doctors Name</label>
														<label for="ServiceName" class="col-sm-3"> Service Name</label>
														<label for="BookCount" class="col-sm-2"> Book Count</label>
														<label for="TotalAmount" class="col-sm-3"> Total Amount</label>
													</div>
													<div class="form-group row">
														<div class="col-sm-3">
															<input type="text" class="form-control" id="DoctorsName">	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="ServiceName">	
														</div>
														<div class="col-sm-2">
															<input type="text" class="form-control" id="BookCount">	
														</div>
														<div class="col-sm-3">
															<input type="text" class="form-control" id="TotalAmount">
														</div>
														<div class="col-sm-1">
															<button type="submit" class="btn btn-primary btnSubmit">Submit</button>
														</div>
													</div>
												</form>
											</div>
											<div class="panel-body">
												<form id = "booking-list text-left">
													<h4>List Booking Doctor</h4>
													</br>
													<div class="form-group row">
														<table class="table booking-list table-bordered table-responsive">
														    <thead>
														      <tr>
														        <th class="col-sm-3">DoctorName</th>
														        <th class="col-sm-3">ServiceName</th>
														        <th class="col-sm-2">Count</th>
														        <th class="col-sm-3">Total Amount</th>
														      </tr>
														    </thead>
														    <tbody>
														      <tr>
														        <td class="col-sm-3">John</td>
														        <td class="col-sm-3">Doe</td>
														        <td class="col-sm-3">1</td>
														        <td class="col-sm-3">2000000</td>
														      </tr>
														      <tr>
														        <td class="col-sm-3">Mary</td>
														        <td class="col-sm-3">Moe</td>
														        <td class="col-sm-3">3</td>
														        <td class="col-sm-3">35000000</td>
														      </tr>
														      <tr>
														        <td class="col-sm-3">July</td>
														        <td class="col-sm-3">Dooley</td>
														        <td class="col-sm-3">4</td>
														        <td class="col-sm-3">400000000</td>
														      </tr>
														    </tbody>
														</table>
													</div>
												</form>
											</div>
										</div>
									</div>
									<div class="form-group row text-left">
										<div class="row">
											<div class="col-sm-6"></div>
											<div class="col-sm-6">
												<div class="form-group row text-left">
													<label for="otherPayment" class="col-sm-4">
													Other Payment
													</label>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="otherPayment" disabled>	
													</div>
												</div>
												<div class="form-group row text-left">
													<label for="totalPayment" class="col-sm-4">
														Total Payment
													</label>
													<div class="col-sm-6">
														<input type="text" class="form-control" id="totalPayment" disabled>	
													</div>
												</div>
											</div>
										</div>
									</div>	
								</div>
							</div>
							<div class="panel-footer">
								<div class="row">
									<div class="col-sm-6">
										<h4>History User</h4>
										<table class="table booking-history">
										    <thead>
										      <tr>
										        <th>DoctorName</th>
										        <th>Total Booking</th>
										        <th>Total Amount</th>
										      </tr>
										    </thead>
										    <tbody>
										      <tr>
										        <td>John</td>
										        <td>100</td>
										        <td>2000000</td>
										      </tr>
										      <tr>
										        <td>Mary</td>
										        <td>22</td>
										        <td>35000000</td>
										      </tr>
										      <tr>
										        <td>July</td>
										        <td>3</td>
										        <td>400000000</td>
										      </tr>
										    </tbody>
										</table>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</form>
		</div>
		</div>
	</section>
	<footer>
		<?php require_once __DIR__.'/templates/chat.php'; ?>
	</footer>
</body>
</html>