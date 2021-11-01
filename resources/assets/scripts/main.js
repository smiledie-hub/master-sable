// import external dependencies
import 'jquery';
import 'magnify/dist/js/jquery.magnify'
import 'lity/dist/lity.min'

import './form';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import catalog from './routes/catalog';
import aboutUs from './routes/about';
import ourPartners from './routes/our-partners';
import ourProduction from './routes/our-production';

/** Populate Router instance with DOM routes */
const routes = new Router({
    common,
    home,
    catalog,
    aboutUs,
    ourPartners,
    ourProduction,
});

// Load Events
jQuery(document).ready(() => {
    routes.loadEvents()
    $('.zoom').magnify();
});
