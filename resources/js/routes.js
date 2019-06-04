import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import NotFound from './components/NotFound';

export default {
	mode: 'history',

	linkActiveClass: "font-bold",

	routes: [
		{
			path: '*',
			component: NotFound
		},
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
