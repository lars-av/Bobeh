// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import caseworker from './routes/caseworker';
import residentsAndRelatives from './routes/residents-and-relatives'
// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core';
// import the Facebook and Twitter icons
import { faFacebook, faTwitter } from '@fortawesome/free-brands-svg-icons';

import {faPerson,faScrewdriverWrench,faSeedling} from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter,faPerson,faScrewdriverWrench,faSeedling);

// tell FontAwesome to watch the DOM and add the SVGs when it detects icon markup
dom.watch();
/** Populate Router instance with DOM routes */
const routes = new Router({
  // All pages
  common,
  // Home page
  home,
  // About Us page, note the change from about-us to aboutUs.
  aboutUs,
  //caseworker
  caseworker,
  //residents and relatives page
  residentsAndRelatives,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());
