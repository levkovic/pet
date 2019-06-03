<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Title</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="/css/app.css">
	</head>
	<body class="font-sans">
		<div id="app">
			<div class="container mx-auto">
				<header class="py-6">
					<h1>Here we go</h1>
				</header>

				<main class="flex">
					<aside class="w-1/5">
						<ul>
							<li><router-link to="/">Home</router-link></li>
							<li><router-link :to="{ name: 'about' }">About</router-link></li>
						</ul>
					</aside>

					<div class="primary">
						<router-view></router-view>
					</div>
				</main>
			</div>
		</div>

		<script src="/js/app.js"></script>
	</body>
</html>
