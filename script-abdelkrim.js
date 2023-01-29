/*------------------------------------------------------------------- Abdelkrim's part--------------------------------------------------------------------------------------------------------------- */

const menuIconButton = document.querySelector("[data-menu-icon-btn]")
const sidebar = document.querySelector("[data-sidebar]")

menuIconButton.addEventListener("click", () => {
  sidebar.classList.toggle("open")
})


const sideBarItems = Array.from(document.querySelectorAll('.sidebar-list-item'));

function makeElementActive(element){
  console.log('inside the make element active')
  sideBarItems.forEach((item,index)=>{
    if(item===element) {
       element.querySelector('.sidebar-link').classList.add('active')
       console.log(element.querySelector('.sidebar-link'));
       console.log(element.querySelector('.sidebar-link').querySelector('.sidebar-icon'))
       console.log(element.querySelector('.sidebar-link-text'))
       element.querySelector('.sidebar-link').querySelector('.sidebar-icon').classList.add('activated');
       element.querySelector('.sidebar-link-text').classList.add('activated');

      
    }
    else{
      element.querySelector('.sidebar-link').classList.remove('activated');
       element.querySelector('.sidebar-link').querySelector('.sidebar-icon').classList.remove('activated');
       element.querySelector('.sidebar-link-text').classList.remove('activated');
    }
  })
}

fetch('https://api.tomorrow.io/v4/timelines?location=40.75872069597532,-73.98529171943665&fields=temperature&timesteps=1h&units=metric&apikey=fm1KDI2uOx3QAEqywXTjxbM4DUEensk1').then(data=>data.json()).then(data=>console.log(data))

/*----------------------------------------------------------End of Abdelkrim's part--------------------------------------------------------------------------- */

/*------------------------------------------------------------------- Aziz's part--------------------------------------------------------------------------------------------------------------- */
$(document).ready(function(){
  // alert('hi');
  })

/*----------------------------------------------------------End of Aziz's part--------------------------------------------------------------------------- */
