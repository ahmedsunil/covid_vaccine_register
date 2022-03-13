function copyTextValue(bf) {
    let text1 = bf.checked ? document.getElementById("permanent_address").value : '';
    document.getElementById("current_address").value = text1;
}

$(document).ready(function (){
    $('#patient_id').select2();
});

$(document).ready(function(){
    $('.delete-link').click(function (e){
        e.preventDefault();
        $this = $(this);
        let form = $this.closest('form');

        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes!'
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    form.submit();
                }
            }
        })
    })
})
