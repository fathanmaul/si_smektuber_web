document.addEventListener("DOMContentLoaded", () => {
    sidebar.classList.add('-translate-x-full');
});


let sidebar_toggle = document.querySelector('.toggle-sidebar');
let sidebar = document.querySelector('.sidebar');
let main = document.querySelector('.main');
let open_sidebar = document.querySelector('#test');

let container = document.querySelector('.container');

container.addEventListener('click', () => {
    if (!sidebar.classList.contains('-translate-x-full')) {
        sidebar.classList.add('-translate-x-full');
    }
});

sidebar_toggle.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
});
open_sidebar.addEventListener('click', () => {
    sidebar.classList.toggle('-translate-x-full');
});