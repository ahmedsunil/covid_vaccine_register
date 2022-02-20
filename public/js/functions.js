function copyTextValue(bf) {
    let text1 = bf.checked ? document.getElementById("permanent_address").value : '';
    document.getElementById("current_address").value = text1;
}
