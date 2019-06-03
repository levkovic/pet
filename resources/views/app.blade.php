<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<title>Title</title>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
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
						<section>
							<h5 class="mb-4">Brand</h5>
							<ul>
								<li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Colors</router-link></li>
							</ul>
						</section>

						<section>
							<h5 class="my -4">Doodles</h5>
							<ul>
								<li class="text-sm pb-4"><router-link class="text-black" to="/">Mascot</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Illustrations</router-link></li>
							</ul>
						</section>
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
