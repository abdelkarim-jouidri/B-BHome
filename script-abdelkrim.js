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
      //  element.querySelector('.sidebar-icon').classList.add('active');
      //  element.querySelector('.sidebar-link-text').classList.add('active');
      
    }
    else{
      element.querySelector('.sidebar-link').classList.remove('active');
      //  element.querySelector('.sidebar-icon').classList.remove('active');
      //  element.querySelector('.sidebar-link-text').classList.remove('active');
    }
  })
}