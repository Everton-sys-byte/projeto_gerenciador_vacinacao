// ------------------ MODAL DO ADMINISTRADOR ----------------------//
// MODAL DE MAIS INFORMAÇÕES SOBRE O USUÁRIO
$('#maisInformacoes').on('show.bs.modal', (e) => {
    var opener = e.relatedTarget
    let user = JSON.parse($(opener).attr('user'))
    $('#userId').text(`ID: ${user.id}`)
    $('#userNomeCompleto').text(`Nome Completo: ${user.nome_completo}`)
    $('#userCPF').text(`CPF: ${user.cpf}`)
    $('#userEmail').text(`Email: ${user.email}`)
    $('#dataUsuarioCriado').text(`Data de criação do usuário: ${user.created_at}`)
    $(".cns").addClass('d-none')
})

//MODAL PARA O ADMINISTRADOR ATUALIZAR USUÁRIO
$('#editUser').on('show.bs.modal', (e) => {
    var opener = e.relatedTarget

    let user = JSON.parse($(opener).attr('user'))

    /*     console.log(user) */
    $("#id").val(user.id)
    $("#e_nome_completo").val(user.nome_completo)
    $("#e_cpf").val(user.cpf)
    $("#e_celular").val(user.celular)
    $("#e_data_nascimento").val(user.data_nascimento)
    $("#e_status").val(user.status)

    if (user.cns) {
        $("#e_role").val("profissional")
        $(".cns").removeClass('d-none')
        $("#e_cns").val(user.cns)
        return
    }
    $("#e_role").val("comum")
    $(".cns").addClass('d-none')
})
