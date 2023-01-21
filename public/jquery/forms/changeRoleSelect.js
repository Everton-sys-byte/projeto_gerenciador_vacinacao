$('#role').change(()=>{
    let value = $('#role').val()
    let form_group_CNS = $('.cns')
    value == 'profissional' ? form_group_CNS.removeClass('d-none') : form_group_CNS.addClass('d-none')
})

$('#e_role').change(()=>{
    let value = $('#e_role').val()
    let form_group_CNS = $('.cns')
    value == 'profissional' ? form_group_CNS.removeClass('d-none') : form_group_CNS.addClass('d-none')
})