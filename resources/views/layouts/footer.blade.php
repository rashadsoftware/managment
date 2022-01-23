        <!-- jQuery -->
        <script src="{{ asset('/') }}js/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="{{ asset('/') }}js/bootstrap.bundle.min.js"></script>

		@yield('js')
		
		<!-- AdminLTE App -->
		<script src="{{ asset('/') }}js/adminlte.min.js"></script>

		@yield('mix-js')

	</body>
</html>