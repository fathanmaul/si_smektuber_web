function resetMajor(){
    const valueMajor = document.querySelector('select[name="major_accepted"]').value;
    if(valueMajor){
        document.querySelector('select[name="major_accepted"]').value = 'null';
    }
}

const btn = document.querySelector('#btn_submit');
btn.addEventListener('click', function(e){
    const modalToggle = document.querySelector('input#my-modal');
            modalToggle.checked = false;
});