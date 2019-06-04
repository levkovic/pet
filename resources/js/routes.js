import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import NotFound from './components/NotFound';
import Colors from './components/Colors';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import SiteStats from './components/SiteStats';

let LoadersAndAnimations = () => import(/* webpackChunkName: "loaders-and-animations.bundle" */ './components/LoadersAndAnimations');

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
		{
			path: '/colors',
			component: Colors
		},
		{
			path: '/mascot',
			component: Mascot
		},
		{
			path: '/illustrations',
			component: Illustrations
		},
		{
			path: '/loadersandanimations',
			component: LoadersAndAnimations
		},
        {
            path: '/site-stats',
            component: SiteStats
        }
	]
}
