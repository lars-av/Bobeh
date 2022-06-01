console.log('I am resident and I work')

//Adding an active class

if (document.querySelectorAll('.anchor') && document.querySelectorAll('.anchor').length > 0 ){
  const links = document.querySelectorAll('.anchor')
  for (let i = 0 ; i < links.length ; i++ ) {
    links[i].addEventListener('click', function (e) {
      links.forEach(link => {
        link.classList.remove('active')
      })
      if (e.target.innerHTML === links[i].innerHTML) {
        e.target.classList.add('active')
      }
    })
  }
} else {
  console.log('we dont exist')
}

const sections = document.querySelectorAll('section')
for (let i = 0 ; i< sections.length ; i++) {

  window.addEventListener('scroll',function () {
  //  const activeSection =  sections.find(section =>  0< (section.getBoundingClientRect().y - window.innerHeight/2) < 250)
  //   console.log(activeSection)

    sections.forEach(section => {
    const sectionPos =  section.getBoundingClientRect()
    if ( sectionPos.y < window.innerHeight/3 && sectionPos.y > -10 ) {
      const links = document.querySelectorAll('.anchor')
      for(let i = 0 ; i< links.length; i++){
        if(links[i].parentElement.getAttribute('href') === ('#' + section.id) ) {
          links[i].classList.add('active')
        } else {
          links[i].classList.remove('active')
        }
      }
    }
   })

  })
}



