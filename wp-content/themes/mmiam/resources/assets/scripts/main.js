// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

import 'popper.js';
import 'slick-carousel/slick/slick.min';

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import lpprog from './routes/lp-program';
//import aboutUs from './routes/about';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  //aboutUs,
  lpprog,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
