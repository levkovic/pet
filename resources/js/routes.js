import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';

export default {
	mode: 'history',

	linkActiveClass: "font-bold",

	routes: [
		{
			path: '/',
			component: Logo
		},
		{
			path: '/logo-symbol',
			component: LogoSymbol
		},
	]
}
