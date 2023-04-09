<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" type="text/css" href="/css/adminpage.css">

    <!-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) -->


    <nav class="navbar navbar-dark" data-bs-theme="dark">
      <div class="container">

        <a class="navbar-brand" href="#">
          <img src="img/TicketIn.png" alt="TicketIn" width="120" height="26">
        </a>

        <a  href="{{ url('/login') }}"><button class="btn btn-outline-success btn-rounded-white" type="submit">Masuk</button></a>

      </div>
    </nav>

	<script>
		$(document).ready(function(){
			$(".menu-item").click(function(){
				$(".menu-item").removeClass("active");
				$(this).addClass("active");
				var content_url = $(this).data("content-url");
				$("#content").load(content_url);
			});
			// Load the default content on page load
			$("#content").load("dashboard.html");
		});
	</script>

  </head>

  <body>
	<div class="container-fluid">
		<div class="row">
			<!-- Left-side menu -->
			<div class="col-md-3 bg-dark">
				<div class="pt-4">
					<h4 class="text-light">Admin Panel</h4>
				</div>
				<ul class="list-group list-group-flush">
					<li class="list-group-item bg-dark text-light menu-item active" data-content-url="dashboard.html">Dashboard</li>
					<li class="list-group-item bg-dark text-light menu-item" data-content-url="users.html">Users</li>
					<li class="list-group-item bg-dark text-light menu-item" data-content-url="hotels.html">Hotel List</li>
					<li class="list-group-item bg-dark text-light menu-item" data-content-url="flights.html">Flight List</li>
				</ul>
			</div>
			<!-- Right-side content -->
			<div class="col-md-9">
				<div class="pt-4 pl-4">
					<h4>Welcome to the Admin Panel</h4>
				</div>
				<div class="p-4" id="content">
					<!-- Content will be loaded dynamically here -->
				</div>
			</div>
		</div>
	</div>



  </body>

  <footer class="text-white py-2">
    <div class="container mt-1 d-flex justify-content-center">
      <a class="navbar-brand" href="#">
        <img src="img/TicketIn.png" alt="Logo" width="100" height="22" class="d-inline-block align-text-top">
        2023
      </a>
    </div>
  </footer>

</html>
