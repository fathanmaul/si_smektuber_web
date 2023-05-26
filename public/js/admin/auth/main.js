const reveal = document.querySelector('.reveal');
const input = document.querySelector('input[type="password"]');

reveal.addEventListener('click', () => {
    if (input.type === 'password') {
        input.type = 'text';
        reveal.innerHTML = '<i class="fa-sharp fa-solid fa-eye"></i>';
    } else {
        input.type = 'password';
        reveal.innerHTML = '<i class="fa-sharp fa-solid fa-eye-slash"></i>';
    }
});


$("input#username").on({
    keydown: function (e) {
        if (e.which === 32)
            return false;
    },
    change: function () {
        this.value = this.value.replace(/\s/g, "");
    }
});

// const inputUsername = document.querySelector('input#username');
// inputUsername.addEventListener('keydown', (e) => {
//     if (e.which === 32)
//         return false;
// });