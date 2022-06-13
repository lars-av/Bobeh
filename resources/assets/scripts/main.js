// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

//page transition and animations
import barba from '@barba/core'
import gsap  from 'gsap'

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

import
  {faPerson,
  faScrewdriverWrench,
  faSeedling,
  faUserTie,
  faFileCircleCheck,
  faCircleCheck,
  faCircle,
  faArrowUpRightFromSquare,
  faPhone,
  faEnvelope,
  faHouseChimneyMedical,
  faUserLarge,
  faClock,
  faUser,
  faPeopleCarryBox,
  faHandHoldingHeart,
  faLocationPin,
} from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter,faPerson,faScrewdriverWrench,faSeedling,faUserTie,faFileCircleCheck, faCircleCheck, faCircle,faArrowUpRightFromSquare,faPhone,faEnvelope,faHouseChimneyMedical,faUserLarge,faClock,faUser,faPeopleCarryBox,
  faHandHoldingHeart,faLocationPin);

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

//page transitions
// FIX !!! page changes before transition, scroll to top after transition
window.addEventListener('load', () =>{

  const loader = document.querySelector('.loader')

  const loadingOut = (data) => {
    gsap.from(data.current.container, {
    })

    gsap.from(loader,{
      xPercent:0,
      duration: 0.25,
    },
    gsap.to(loader, {
      xPercent:-100,
      duration:0.25,
    })
    )
  }

  const loadingIn = (data) => {
    gsap.from(data.current.container ,{
    })
    gsap.to(loader, {
      duration: 0.45,
      delay: 0.75,
      ease: 'easeInOut',
      xPercent:-200,
    })
  }




  barba.init({
    schema: {
      prefix: 'data-barba',
      wrapper: 'wrapper',
      debug:true,
      sync: true,
    },
    transitions: [{
      name: 'load',
      to: {namespace: ['front-page','about-us','contact-us','houses','residents-and-relatives','caseworker']},

      before(data){
        gsap.from(data.next.container, {
          opacity:0,
        })
      loadingOut(data);
      },

      leave() {


      },

      beforeEnter(data){
        gsap.from(data.current.container, {
          opacity:0,
          duration: 0.5,
        })
      },

      enter(data) {
        loadingIn(data)
      },
    }],
  })
})

barba.hooks.enter((data) => {
  console.log(data);
});

