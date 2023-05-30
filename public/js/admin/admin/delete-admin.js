function destroyAdmin(event, props) {
    // console.log(props.getAttribute('data-url'));
    const modalDestroyToggle = document.querySelector('#modal-destroy');
    modalDestroyToggle.checked = true;
    const url = props.getAttribute('data-url');
    const modalForm = document.querySelector('.modal form#modalDestroyAdmin');
    modalForm.setAttribute('action', url);
}

const btnSubmitDestroy = document.querySelector('.modal form#modalDestroyAdmin button[type=submit]');
btnSubmitDestroy.addEventListener('click', function(e){
    const modalDestroyToggle = document.querySelector('#modal-destroy');
    modalDestroyToggle.checked = false;
});

const btnCancelDestroy = document.querySelector('.modal form#modalDestroyAdmin label#btn-cancel');
btnCancelDestroy.addEventListener('click', function(e){
    const modalForm = document.querySelector('.modal form#modalDestroyAdmin');
    modalForm.removeAttribute('action');
});