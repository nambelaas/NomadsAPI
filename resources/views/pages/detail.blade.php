@extends('layouts.app')

@section('title','Detail Travel')

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
									<li class="breadcrumb-item active">Details</li>
								</ol>
							</nav>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-8 pl-lg-0">
							<div class="card card-details">
								<h1>Nusa Penida</h1>
								<p>Republic of Indonesia Raya</p>
								<div class="gallery">
									<div class="xzoom-container">
										<img src="frontend/images/NusaPenida_featured.png" class="xzoom" id="xzoom-default" xoriginal="frontend/images/NusaPenida_featured.png" />
									</div>
									<div class="xzoom-thumbs">
										<a href="frontend/images/NusaPenida_featured.png">
											<img src="frontend/images/NusaPenida_featured.png" class="xzoom-gallery" width="128" xpreview="frontend/images/NusaPenida_featured.png" />
										</a>
										<a href="frontend/images/NusaPenida_featured.png">
											<img src="frontend/images/NusaPenida_featured.png" class="xzoom-gallery" width="128" xpreview="frontend/images/NusaPenida_featured.png" />
										</a>
										<a href="frontend/images/NusaPenida_featured.png">
											<img src="frontend/images/NusaPenida_featured.png" class="xzoom-gallery" width="128" xpreview="frontend/images/NusaPenida_featured.png" />
										</a>
										<a href="frontend/images/NusaPenida_featured.png">
											<img src="frontend/images/NusaPenida_featured.png" class="xzoom-gallery" width="128" xpreview="frontend/images/NusaPenida_featured.png" />
										</a>
										<a href="frontend/images/NusaPenida_featured.png">
											<img src="frontend/images/NusaPenida_featured.png" class="xzoom-gallery" width="128" xpreview="frontend/images/NusaPenida_featured.png" />
										</a>
									</div>
								</div>
								<h1>Tentang Wisata</h1>
								<p>
									Nusa Penida is an island southeast of Indonesia's island Bali and a district of Klungkung Regency that includes the neighbouring small island of Nusa Lembongan and twelve even smaller islands. The Badung Strait separates
									the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres.
								</p>
								<p>It is drier than the nearby island of Bali. It is one of the major tourist attractions among the three Nusa islands and is rich in natural beauty.</p>
								<div class="features row">
									<div class="col-md-4">
										<div class="description">
											<img src="frontend/images/ic_event.png" alt="icon" class="features-image" />
											<div class="description">
												<h3>Featured Event</h3>
												<p>Tari Kecak</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 border-left">
										<div class="description">
											<img src="frontend/images/ic_language.png" alt="icon" class="features-image" />
											<div class="description">
												<h3>Language</h3>
												<p>Bahasa Indonesia</p>
											</div>
										</div>
									</div>
									<div class="col-md-4 border-left">
										<div class="description">
											<img src="frontend/images/ic_foods.png" alt="icon" class="features-image" />
											<div class="description">
												<h3>Foods</h3>
												<p>Local Foods</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="card card-details card-right">
								<h2>Members are going</h2>
								<div class="members my-2">
									<img src="frontend/images/Member 1.png" alt="" class="member-image mr-1" />
									<img src="frontend/images/Member 2.png" alt="" class="member-image mr-1" />
									<img src="frontend/images/Member 3.png" alt="" class="member-image mr-1" />
									<img src="frontend/images/Member 4.png" alt="" class="member-image mr-1" />
									<img src="frontend/images/Member 5.png" alt="" class="member-image mr-1" />
									<img src="frontend/images/Member 6.png" alt="" class="member-image mr-1" />
								</div>
								<hr />
								<h2>Trip Information</h2>
								<table class="trip-informations">
									<tr>
										<th width="50%">Date of Departure</th>
										<td width="50%" class="text-end">22 Aug 2021</td>
									</tr>
									<tr>
										<th width="50%">Duration</th>
										<td width="50%" class="text-end">4D, 3N</td>
									</tr>
									<tr>
										<th width="50%">Type of Trip</th>
										<td width="50%" class="text-end">Open Public</td>
									</tr>
									<tr>
										<th width="50%">Price</th>
										<td width="50%" class="text-end">$80,00/Person</td>
									</tr>
								</table>
							</div>
							<div class="join-container">
								<a href="{{ route('Checkout') }}" class="btn btn-join-now mt-3 py-2">Join Now</a>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/libraries/xzoom/xzoom.css')}}" />
@endpush

@push('addon-script')
<script src="{{ url('frontend/libraries/xzoom/xzoom.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".xzoom, .xzoom-gallery").xzoom({
            zoomWidth: 500,
            title: false,
            tint: "#333",
            xoffset: 15,
        });
    });
</script>
@endpush