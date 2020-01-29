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
			<div class="row">
				<table style="table table-striped table-responsive">
					<thead>
						<th>Ubwoko</th>
						<th>Amazina</th>
						<th>Nimero</th>						
					</thead>
					<tbody>
						@foreach ($cards as $card)
							<tr>
								<td>{{$card->type->name}}</td>
								<td>{{$card->holding_name}}</td>
								<td>{{$card->number}}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</section>
	<!-- About Section end -->
@endsection