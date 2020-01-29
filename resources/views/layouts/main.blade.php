<!DOCTYPE html>
<html lang="kiny">
@include('partials.head')
<body>
	<!-- Header Section -->
	@include('partials.header')
	<!-- Header Section end -->

    @yield('content')

	<!-- Footer Section -->
	@include('partials.footer')
	<!-- Footer Section end -->
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>
