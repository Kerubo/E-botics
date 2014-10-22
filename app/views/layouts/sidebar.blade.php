head>
	@include('includes.head')
</head>
<body>
<div class="container">

	<header class="row">
		@include('includes.header')
	</header>

	<div id="main" class="row">

		<!-- sidebar content -->
		<div id="sidebar" class="col-md-4">
			@include('includes.sidebar')
		</div>

		<!-- main content -->
		
			@yield Content
			<div class="body" class="col-md-4">
			@include('includes.body')

		</div>
		</div>

	</div>

	<footer class="row">
		@include('includes.footer')
	</footer>

</div>
</body>
</html>
