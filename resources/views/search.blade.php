@extends('layouts.main')
@section('content')
	<!-- Page top Section end -->
	<section class="page-top-section set-bg" data-setbg="img/page-top-bg/1.jpg">
		<div class="container">
		<h2>Twakuboneye <span>{{$cards->count()}}</span> Bisa nkibyawe!!!</h2>
			<nav class="site-breadcrumb">
				<a class="sb-item" href="#">Ahabanza</a>
				<span class="sb-item active">Ibyo dufite</span>
			</nav>
		</div>
	</section>
	<!-- Page top Section end -->

	<!-- About Section end -->
	<section class="about-section spad">
		<div class="container">
			@foreach ($cards as $card)
			<div class="row mb-10">
				<div class="col-md-6 col-xs-12 offset-md-3 offset-sm-1">
					
					<div class="card">
						<div class="card-header">{{$card->type->name}}</div>
						<div class="card-body">
							<p>Nimero: {{$card->number}}</p>
						</div>
						<div class="card-footer"><button class="btn btn-info form-control holder-box-displayer">Reba ugifite</button></div>
					</div>
				</div>
			</div>
			<div class="row holder-box disNone mt-10">
				<div class="card col-md-6 col-xs-12 offset-md-3 offset-sm-1 ">
					<p>Amazina y'ugifite:   {{$card->holding_name}}</p>
					<p>Nimero y'ugifite:    <a href="tel:{{$card->holding_number}}">{{$card->holding_number}}</a></p>
				</div>
			</div>
			<form action="{{route('success')}}" class="disNone successForm">
				@csrf
				<input type="hidden" name="name" id="name_input"/>
				<input type="hidden" name="card_number" id="card_input"/>
			</form>
			@endforeach
		</div>
	</section>
	<!-- About Section end -->
@endsection