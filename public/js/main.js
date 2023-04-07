
const btnOpen = document.querySelector('#btnOpen');
const sidebar = document.querySelector('.sidebar');

btnOpen.addEventListener('click', () => {
  sidebar.classList.toggle('-ml-[300px]');
  console.log('Clicked');
});