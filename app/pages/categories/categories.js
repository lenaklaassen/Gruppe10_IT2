function validateForm() {
    let category = document.forms['form-cat']['category'].value;
    if (category == "" || category == null){
        alert('Bitte gebe etwas ein!');
        return false;
    }
}