@extends('layouts.main')
@section('content')
    	<!-- Hero Section end -->
	<section class="hero-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="hs-text">
						<h2>Urashaka icyangombwa cyawe cyabuze?</h2>
						<p> Hano dufasha abantu kubona ibyangombwa byabo byabuze</p>
						<a href="#" class="site-btn sb-dark">Shakira <span><i class="fa fa-arrow-right"></i></span></a>
					</div>
				</div>
				<div class="col-lg-6">
					<form class="hero-form" method="GET" action="{{route('search')}}">
						@csrf
                        <h4>Ishakiro!</h4>
						<input type="text" name="names" placeholder="Amazina yawe">
                        <select name="type_id" id=""  placeholder="Ubwoko bw'icyangombwa">
							@foreach($types as $type)
							<option value="{{ $type->id }}">{{$type->name}}</option>
							@endforeach
                           
						</select>
						<input type="text" name="number" placeholder="Nimero y' icyangombwa">
                        {{-- <h6>Aho cyatangiwe</h6>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="district" id="" placeholder="Akarere">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="sector" id="" placeholder="Umurenge">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="cell" id="" placeholder="Akagali">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" name="village" id="" placeholder="Umudugudu">
                            </div>
                        </div> --}}
						<button class="site-btn">Reba ko tugifite!</button>
					</form>
				</div>
			</div>
		</div>
		<div class="hero-slider owl-carousel">
			<div class="hs-item set-bg" data-setbg="img/hero-slider/1.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/2.jpg"></div>
			<div class="hs-item set-bg" data-setbg="img/hero-slider/3.jpg"></div>
		</div>
	</section>
	<!-- Hero Section end -->

	<!-- Why Section end -->
	<section class="why-section spad" id="spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="icon-box-item">
						<div class="ib-text about">
							<h5>Turi bande?</h5>
							<p>
								iyi ni company nyarwanda ifite intego zo kumenyesha no  kumenyekanisha; ibi bikaba bikorwa hifadhishijwe ikoranabuhanga.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="icon-box-item">
						<div class="ib-text contact">
                            <h5>Tuvugishe</h5>
                            <div class="container">
                                <form action="{{route('message.store')}}" class="contact-form" method="post">
									@if(session('success'))
										<p class="alert alert-success"><span id="session_closer">x</span>{{ session('success') }}</p>
									@endif
									@csrf
                                    <div class="row">
										<input type="text" name="name" class="form-control" placeholder="Amazina" id="">
										@if($errors->has('name'))
                                <div class="a">
									<ul class="list-unstyled">
                                    @foreach ($errors->get('name') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                    </div>
                                    <div class="row">
										<input type="text" name="number" class="form-control" placeholder="Nimero ya telephone" id="">
										@if($errors->has('number'))
                                <div class="a">
                                    <ul class="list-unstyled">
                                    @foreach ($errors->get('number') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                    </div>
                                    <div class="row">
										<textarea class="form-control" placeholder="message yawe" name="message"></textarea>
										@if($errors->has('message'))
                                <div class="a">
                                    <ul class="list-unstyled">
                                    @foreach ($errors->get('message') as $message)
                                        <li class="text-danger">{{ $message }}</li>
                                    @endforeach
                                    </ul>
                                </div>
                                @endif
                                    </div>  
                                    <div class="row">
                                        <button class="ohereza-btn form-control">Ohereza</button>
                                    </div>
                                </form>
                            </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Why Section end -->
@endsection