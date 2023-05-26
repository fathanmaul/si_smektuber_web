const btnShow = document.querySelector('#btn-show');
btnShow.addEventListener('click', showModal);
function showModal(event) {
    event.preventDefault();
    const modalShowToggle = document.querySelector('input#modal-confirm-edit');
    modalShowToggle.checked = true;
}

const btnSubmit = document.querySelector('button#submitButton');
btnSubmit.addEventListener('click', submitForm);
function submitForm(event) {
    event.preventDefault();
    const form = document.querySelector('form#formEdit');
    form.submit();
    const modalShowToggle = document.querySelector('input#modal-confirm-edit');
    modalShowToggle.checked = false;
}