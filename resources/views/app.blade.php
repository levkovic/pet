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
			<div class="container px-8">
				<header class="py-6" style="background: url('/images/splash.svg') no-repeat">
					<h1>
						<img src="/images/logo.svg" alt="Pet">
					</h1>
				</header>

				<main class="flex">
					<aside class="w-1/5  pt-8">
						<section class="mb-10">
							<h5 class="uppercase font-bold mb-3 text-base">Brand</h5>
							<ul>
								<li class="text-sm pb-4"><router-link class="text-black" to="/" exact>Logo</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/logo-symbol">Logo Symbol</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/colors">Colors</router-link></li>
							</ul>
						</section>

						<section>
							<h5 class="uppercase font-bold mb-3 text-base">Doodles</h5>
							<ul>
								<li class="text-sm pb-4"><router-link class="text-black" to="/mascot">Mascot</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/illustrations">Illustrations</router-link></li>
								<li class="text-sm pb-4"><router-link class="text-black" to="/loadersandanimations">Loaders and Animations</router-link></li>
							</ul>
						</section>

                        <section>
                            <h5 class="uppercase font-bold mb-3 text-base">Stats</h5>
                            <ul>
                                <li class="text-sm pb-4"><router-link class="text-black" to="/site-stats">Site Stats</router-link></li>
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
