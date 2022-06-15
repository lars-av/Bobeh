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
  faPersonCircleCheck,
  faFileCirclePlus,
  faCommentsDollar,
} from '@fortawesome/free-solid-svg-icons';

// add the imported icons to the library
library.add(faFacebook, faTwitter,faPerson,faScrewdriverWrench,faSeedling,faUserTie,faFileCircleCheck, faCircleCheck, faCircle,faArrowUpRightFromSquare,faPhone,faEnvelope,faHouseChimneyMedical,faUserLarge,faClock,faUser,faPeopleCarryBox,
  faHandHoldingHeart,faLocationPin, faPersonCircleCheck, faFileCirclePlus, faCommentsDollar);

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


  //active navigationLinks
  let navigationLinks = document.querySelectorAll('.navigation li')
console.log(navigationLinks)
console.log(window.location)


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
      delay: 0.45,
      ease: 'easeInOut',
      xPercent:-200,
    })
  }

    const afterLoaded= (data) => {
      console.log(data.next.container)
      const navigation = data.next.container.querySelector('.wrap-side-nav .side-nav')
      const content = data.next.container.querySelector('.wrap-side-content')
      console.log(navigation)

      gsap.fromTo(navigation, {
        opacity:0,
        duration:0.75,
        rotation: 0.5,
        xPercent: 30,
      },
      {
        opacity:1,
        duration:0.75,
        rotation:0,
        xPercent:0,

      }),

      gsap.fromTo(content,{
        opacity:0,
        duration:1,
        rotation: 0.5,
        xPercent: 30,

      },
      {
        opacity:1,
        duration:1,
        rotation:0,
        xPercent:0,
        ease: 'easeIn',

      }
      )
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

      before(){
    },

      leave(data) {

      const done = this.async()
      currentPage = [];
      currentPage.push(data.next.namespace.split('-').join(' '))
      document.getElementById('page-loader').textContent = currentPage[0]


      loadingOut(data);

      setTimeout( () => {
        done();
      }, 750)

      },

      beforeEnter(data){
        gsap.from(data.current.container, {
          opacity:0,
          duration: 0.5,
        })
      },

      enter(data) {
        loadingIn(data);
        const done = this.async()
        setTimeout( () => {
          done();
        }, 10)
      },
      afterEnter(data) {
        afterLoaded(data)
      },
    }],

  })
})

barba.hooks.leave(() => {

  let scrollX = 0
  let scrollY = 0

  if(history.scrollRestoration) {
    history.scrollRestoration = 'manual'
  }

  setTimeout( () => {
    window.scrollTo(scrollX, scrollY)
  },200)
});
console.log(window.href)
