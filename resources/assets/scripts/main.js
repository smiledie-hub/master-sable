// import external dependencies
import 'jquery';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import ourPartners from './routes/our-partners';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
    aboutUs,
    ourPartners,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
