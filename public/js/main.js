const sidebar = document.querySelector('#sidebar');
const toggleSidebar = document.querySelector('#toggle-sidebar');
const toggleCloseSidebar = document.querySelector('#toggle-sidebar-close');
const navbar = document.querySelector('#navbar');

toggleSidebar.addEventListener('click', () => {
  sidebar.classList.toggle('-translate-x-full');
});

toggleCloseSidebar.addEventListener('click', () => {
  sidebar.classList.toggle('-translate-x-full');
});

function closeSidebar() {
  if (!sidebar.classList.contains('-translate-x-full')) {
    sidebar.classList.add('-translate-x-full');
  }
}