$('.check_password').click((event) => {
    changeInputType(event.target.checked)
})

function changeInputType(inputTypeText) {
    let inputTypeValue = ""
    inputTypeText ? inputTypeValue = "text" : inputTypeValue = "password"
    $('#password').prop("type", inputTypeValue)
    $('#c_password').prop("type", inputTypeValue)
    //$('.form-group #password, .form-group #c_password').each(()=>{
    //    $(this).prop("type",inputTypeValue)
    //})
}


