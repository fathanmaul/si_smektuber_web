function destroyArticle(event, props){
    event.preventDefault();
    const modalToggle = document.querySelector('#my-modal');
    const url = props.getAttribute('href');
    console.log(url);
    const modal = document.querySelector('#modal-delete');
    modalToggle.checked = true;
    modal.querySelector('form').setAttribute('action', url);
}
