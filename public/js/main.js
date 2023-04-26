const sidebar = document.querySelector('#sidebar');
const toggleSidebar = document.querySelector('#toggle-sidebar');
const toggleCloseSidebar = document.querySelector('#toggle-sidebar-close');
const navbar = document.querySelector('#navbar');

toggleSidebar.addEventListener('click', () => {
  sidebar.classList.toggle('translate-x-0');
});

toggleCloseSidebar.addEventListener('click', () => {
  sidebar.classList.toggle('translate-x-0');
});

function closeSidebar() {
  if (sidebar.classList.contains('translate-x-0')) {
    sidebar.classList.remove('translate-x-0');
  }
}