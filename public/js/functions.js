function copyTextValue(bf) {
    let text1 = bf.checked ? document.getElementById("permanent_address").value : '';
    document.getElementById("current_address").value = text1;
}

$(document).ready(function (){
    $('#patient_id').select2();
});







