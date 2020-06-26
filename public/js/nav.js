var nav_btn=document.querySelector('.mobile-btn');
var nav=document.querySelector('.mobile');
var cl=document.querySelector('#main');
var about=document.querySelector('.abt-menu');
var down_btn=document.querySelector('.fa-chevron-circle-down');
var up_btn=document.querySelector('.fa-chevron-circle-up');

function opensidenav()
{
    nav.classList.add('open');
    
}
function closesidenav(){
    nav.classList.remove('open');
    
}
function icon_change()
{
    $(document).on("click",".fa-chevron-circle-down", function (e) {
        $(".fa-chevron-circle-down").addClass("fa-chevron-circle-up");
        $(".fa-chevron-circle-down").removeClass("fa-chevron-circle-down");
        $(".abt-menu").slideDown();
        e.stopPropagation();
    });
      
      $(document).on("click", ".fa-chevron-circle-up", function (e1) {
          $(".fa-chevron-circle-up").addClass("fa-chevron-circle-down");
          $(".fa-chevron-circle-up").removeClass("fa-chevron-circle-up");
          $(".abt-menu").slideUp();
    });    
}
function user_icon()
{
    $(document).on("click",".fa-chevron-circle-down", function (e) {
        $(".fa-chevron-circle-down").addClass("fa-chevron-circle-up");
        $(".fa-chevron-circle-down").removeClass("fa-chevron-circle-down");
        $(".user-menu").slideDown();
        e.stopPropagation();
    });
      
      $(document).on("click", ".fa-chevron-circle-up", function (e1) {
          $(".fa-chevron-circle-up").addClass("fa-chevron-circle-down");
          $(".fa-chevron-circle-up").removeClass("fa-chevron-circle-up");
          $(".user-menu").slideUp();
    });    
}

nav_btn.addEventListener('click',opensidenav);
cl.addEventListener('click',closesidenav);
