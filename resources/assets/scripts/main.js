// import external dependencies
import 'jquery';

// Import everything from autoload
import './autoload/**/*'

//page transition and animations
import barba from '@barba/core'
import barbaPrefetch from '@barba/prefetch'
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
let currentPage = []

var links = document.querySelectorAll('a[href]');
		var cbk = function(e) {
    if(e.currentTarget.href === window.location.href) {
      e.preventDefault();
      e.stopPropagation();
    }
	};

	for(var i = 0; i < links.length; i++) {
		links[i].addEventListener('click', cbk);
	}


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
      delay: 0.35,
      ease: 'easeInOut',
      xPercent:-200,
    })
  }




  barba.use(barbaPrefetch)
  barba.init({
    schema: {
      prefix: 'data-barba',
      wrapper: 'wrapper',
      debug:true,
      sync: true,
    },
    transitions: [{
      name: 'load',
      to: {namespace: ['front-page','about-us','contact-us','houses','residents-and-relatives','caseworker','navigation']},

      before(data){
      const done = this.async()
      currentPage = [];
      currentPage.push(data.next.namespace.split('-').join(' '))
      document.getElementById('page-loader').textContent = currentPage[0]
      console.log(currentPage)
      loadingOut(data);
      setTimeout( () => {
        done();
      }, 500)
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
        loadingIn(data);
      },
    }],
  })
})

barba.hooks.beforeLeave(() => {
  let scrollX = 0
  let scrollY = 0

  if(history.scrollRestoration) {
    history.scrollRestoration = 'manual'
  }

  window.scrollTo(scrollX, scrollY)
});
