
const btnOpen = document.querySelector('#btnOpen');
const sidebar = document.querySelector('.sidebar');
const btnClose = document.querySelector('#closeSidebar');


btnOpen.addEventListener('click', () => {
  sidebar.classList.toggle('-ml-[300px]');
});

btnClose.addEventListener('click', () => {
  sidebar.classList.add('-ml-[300px]');
});

if (isMobile()) {
  sidebar.classList.add('-ml-[300px]');
}

function isMobile() {
  if (navigator.userAgent.match(/Android/i)
    || navigator.userAgent.match(/webOS/i)
    || navigator.userAgent.match(/iPhone/i)
    || navigator.userAgent.match(/iPad/i)
    || navigator.userAgent.match(/iPod/i)
    || navigator.userAgent.match(/BlackBerry/i)
    || navigator.userAgent.match(/Windows Phone/i)) {
    return true;
  } return false;
}