@extends('frontend.layouts.app')
@section('frontendcontent')
<section class="contactbanner">
	<div class="containercenter container">
		<div class="row">
			<div class="col-lg-6">
				<div class="contactbanner-content">
					<h1 class="bannerheading">{{$contact['slider_heading']}}</h1>
					<p>{{$contact['slider_heading_content']}}</p>
				</div>
			</div>
		</div>
		<div class="gx-0 cd row">
			<div class="col-lg-8 col-md-6 col-12">
				<div class="form">
					<h3 class="subtitle">Dont be afraid man! say hello</h3>
					<form action="{{route('postServicesData')}}" method="post">
						@csrf
						<div class="gx-3 row">
							<div class="col-lg-6"><input placeholder="Name*" name="name" class="form-control" required="" type="text" /></div>
							<div class="col-lg-6"><input placeholder="Email*" name="email" class="form-control" required="" type="text" /></div>
						</div>
						<div class="gx-3 row">
							<div class="col-lg-6"><input placeholder="Phone*" name="phone" class="form-control" required="" type="text" /></div>
							<div class="col-lg-6">
								<select class="form-select form-control" name="subject">
									<option>frontend</option>
									<option>backtend</option>
									<option>html</option>
								</select>
							</div>
						</div>
						<div class="mt-3 col-lg-12"><textarea rows="7" class="form-control" placeholder="Summary"></textarea></div>
						<div class="mt-3 col-lg-12"><button type="submit" class="orangebtn contactbtn">submit</button></div>
					</form>
					@if (\Session::has('success'))
                    <div class="alert alert-success">
                       <span>  {!! \Session::get('success') !!}</span>
                        
                    </div>
                @endif
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-12">
				<div class="contactbanner-rightcontent">
					<ul>
						<li><img src="{{asset('assets/images/callicon.png')}}" alt="" /><a class="tel" href="tel:{{$contact['contactno']}}"> {{$contact['contactno']}}</a></li>
						<li><img src="{{asset('assets/images/emailicon.png')}}" alt="" /><a class="tel" href="emailto:{{$contact['email']}}"> {{$contact['email']}}</a></li>
						<li><img src="{{asset('assets/images/pointericon.png')}}" alt="" />{{$contact['address']}}</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="map-section">
	<div class="container">
		<div class="justify-content-center text-center row">
			<div class="col-lg-9">
				<h2 class="title">Find Us on Google Map</h2>
				<p class="desc">Your web presence is pivotal for your brand, aside from it serving as a point of service. Get started with an experienced website creation team</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-6 col-md-12 col-12">
				<iframe src="{{$contact['iframe_link']}}" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
			<div class="my-auto col-lg-6 col-md-12 col-12">
				<div class="address-content">
					<div class="address-content1">
						<div class="addresstitle">
							<img src="{{asset('assets/images/pk.svg')}}" alt="" />
							<h3 class="subtitle">Karachi,Pakistan</h3>
						</div>
						<p>
							Office 302, Building #32C Lane 8 Bukhari Commercial, <br />
							DHA Phase 6 Karachi, Pakistan<br />
							75500
						</p>
					</div>
					<div class="address-content1">
						<div class="addresstitle">
							<img src="{{asset('assets/images/usa.svg')}}" alt="" />
							<h3 class="subtitle">Texas,USA</h3>
						</div>
						<p>
							5900 Balcones Drive STE 100<br />
							Austin, TX<br />
							78731
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="calltoaction-section calltoaction-section2">
	<div class="container">
		<div class="justify-content-center text-center row">
			<div class="col-lg-8 col-12">
				<h2 class="title">Try Us For Your New Project</h2>
				<div class="mt-5"><a class="orangebtn" href="#">Start a Project</a></div>
			</div>
		</div>
	</div>
</section>
@endsection
