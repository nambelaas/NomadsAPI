@extends('layouts.checkout')

@section('title','Checkout')

@section('content')
    <!-- Main -->
		<main>
			<section class="section-details-header"></section>
			<section class="section-details-content">
				<div class="container">
					<div class="row">
						<div class="col p-0">
							<nav>
								<ol class="breadcrumb">
									<li class="breadcrumb-item">Paket Travel</li>
									<li class="breadcrumb-item">Details</li>
									<li class="breadcrumb-item active">Checkout</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 pl-lg-0">
							<div class="card card-details">
								<h1>Who is Going?</h1>
								<p>Trip to Ubud, Bali, Indonesia</p>

								<div class="attendee">
									<table class="table table-responsive-sm text-center">
										<thead>
											<tr>
												<td>Picture</td>
												<td>Name</td>
												<td>Nationality</td>
												<td>Visa</td>
												<td>Passport</td>
												<td></td>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><img src="{{ url('frontend/images/ava1.png')}}" height="50" /></td>
												<td class="align-middle">Salman Seif</td>
												<td class="align-middle">ID</td>
												<td class="align-middle">N/A</td>
												<td class="align-middle">Active</td>
												<td class="align-middle">
													<a href="">
														<img src="{{ url('frontend/images/ic-remove.png')}}" height="17" />
													</a>
												</td>
											</tr>
											<tr>
												<td><img src="{{ url('frontend/images/ava1.png')}}" height="50" /></td>
												<td class="align-middle">Salman Seif</td>
												<td class="align-middle">ID</td>
												<td class="align-middle">N/A</td>
												<td class="align-middle">Active</td>
												<td class="align-middle">
													<a href="">
														<img src="{{ url('frontend/images/ic-remove.png')}}" height="17" />
													</a>
												</td>
											</tr>
										</tbody>
									</table>
								</div>

								<div class="member mt-3">
									<h2>Add Member</h2>
									<form action="#" class="row row-cols-lg-auto g-2 align-items-center">
										<div class="col-12">
											<label for="inputUsername" class="sr-only">Name</label>
											<div class="input-group">
												<input type="text" name="inputUsername" class="form-control mb-2 me-s-2" id="inputUsername" placeholder="Username" />
											</div>
										</div>

										<div class="col-12">
											<label for="inputVisa" class="sr-only">Visa</label>
											<select name="inputVisa" class="form-select custom-select mb-2 me-sm-2" id="inputVisa">
												<option value="Visa" selected>Visa</option>
												<option value="30 Days">30 Days</option>
												<option value="N/A">N/A</option>
											</select>
										</div>

										<div class="col-12">
											<label for="doePassport" class="sr-only">DoE Passpor</label>
											<div class="input-group mb-2 me-sm-2">
												<input type="text" class="form-control datepicker" id="doePassport" placeholder="DoE Passport" />
											</div>
										</div>

										<div class="col-12">
											<button type="submit" class="btn btn-add-now mt-3 px-4">Add Now</button>
										</div>
									</form>

									<div class="note px-2">
										<h3 class="mt-2 mb-0">Note</h3>
										<p class="disclaimer mb-0">You are only able to invite member that registered in Nomads</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-details card-right">
								<h2>Checkout Information</h2>
								<table class="trip-informations">
									<tr>
										<th width="50%">Members</th>
										<td width="50%" class="text-end">2 Person</td>
									</tr>
									<tr>
										<th width="50%">Additional Visa</th>
										<td width="50%" class="text-end">$ 190,00</td>
									</tr>
									<tr>
										<th width="50%">Trip Price</th>
										<td width="50%" class="text-end">$80,00 / Person</td>
									</tr>
									<tr>
										<th width="50%">Sub Total</th>
										<td width="50%" class="text-end">$280,00</td>
									</tr>
									<tr>
										<th width="50%">Total (+Unique)</th>
										<td width="50%" class="text-end text-total"><span class="text-blue">$279,</span><span class="text-orange">33</span></td>
									</tr>
								</table>
								<hr />
								<h2>Payment Instructions</h2>
								<p class="payment-instruction">Please Complete The Payment Before You Continue The Trip</p>
								<div class="bank">
									<div class="bank-item pb-3">
										<div class="row">
											<div class="col-2 me-2">
												<img src="{{ url('frontend/images/ic-bankcard.png')}}" class="bank-image" />
											</div>
											<div class="col-9">
												<div class="description">
													<h3>PT Nomads ID</h3>
													<p>
														Bank Central Asia
														<br />
														1112993810
													</p>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-2 me-2">
												<img src="{{ url('frontend/images/ic-bankcard.png')}}" class="bank-image" />
											</div>
											<div class="col-9">
												<div class="description">
													<h3>PT Nomads ID</h3>
													<p>
														Bank Central Asia
														<br />
														1112993810
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="join-container">
								<a href="{{ route('Checkout-success') }}" class="btn btn-join-now mt-3 py-2">I Have Made Payment</a>
							</div>
							<div class="text-center mt-3">
								<a href="{{ route('Detail') }}" class="text-muted">Cancel Booking</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/gijgo/css/gijgo.min.css')}}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/gijgo/js/gijgo.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".datepicker").datepicker({
            uiLibrary: "bootstrap4",
            icons: {
                rightIcon: '<img src="{{ url('frontend/images/ic-calendar.png')}}" />',
            },
        });
    });
</script>
@endpush