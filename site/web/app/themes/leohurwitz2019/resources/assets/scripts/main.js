// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import films from './routes/films';
import single from './routes/single';
import page from './routes/page';
import singleMovie from './routes/single-movie';
import singleInterview from './routes/single-movie';

/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  single,
  page,
  films,
  singleMovie,
  singleInterview,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
