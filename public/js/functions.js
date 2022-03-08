function copyTextValue(bf) {
    let text1 = bf.checked ? document.getElementById("permanent_address").value : '';
    document.getElementById("current_address").value = text1;
}

$(document).ready(function (){
    $('#patient_id').select2();
});



$(document).ready(function(){
    $('.patient-delete').click(function (e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    let form = document.getElementById('delete-patient');
                    form.submit();
                }
            }
        })
    })
})

$(document).ready(function(){
    $('.staff-delete').click(function (e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    let form = document.getElementById('delete-staff');
                    form.submit();
                }
            }
        })
    })
})

$(document).ready(function(){
    $('.vaccination-delete').click(function (e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    let form = document.getElementById('delete-vaccination');
                    form.submit();
                }
                // Swal.fire(
                //     'Deleted!',
                //     'Your file has been deleted.',
                //     'success'
                // )

            }
        })
    })
})

$(document).ready(function(){
    $('.user-delete').click(function (e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    let form = document.getElementById('delete-user');
                    form.submit();
                }
            }
        })
    })
})

$(document).ready(function(){
    $('.vaccine-delete').click(function (e){
        e.preventDefault();
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                if (result.value) {
                    let form = document.getElementById('delete-vaccine');
                    form.submit();
                }
            }
        })
    })
})
