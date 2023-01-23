// ------------------ MODAIS DO ADMINISTRADOR ----------------------//
// MODAL DE MAIS INFORMAÇÕES SOBRE O USUÁRIO
$('#maisInformacoes').on('show.bs.modal', (e) => {
    var opener = e.relatedTarget
    let user = JSON.parse($(opener).attr('user'))
    $('#userId').text(`ID: ${user.id}`)
    $('#userNomeCompleto').text(`Nome Completo: ${user.nome_completo}`)
    $('#userCPF').text(`CPF: ${user.cpf}`)
    $('#userEmail').text(`Email: ${user.email}`)
    $('#dataUsuarioCriado').text(`Data de criação do usuário: ${user.created_at}`)

    if(!user.cns)
    {
        $('#userCNS').addClass('d-none')
        return
    }
    $('#userCNS').text(`CNS: ${user.cns} `).removeClass('d-none')
})

//MODAL PARA O ADMINISTRADOR ATUALIZAR USUÁRIO
$('#editUser').on('show.bs.modal', (e) => {
    var opener = e.relatedTarget

    let user = JSON.parse($(opener).attr('user'))

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

//MODAL PARA O ADMINISTRADOR DELETAR VACINA
$('#excluirVacina').on('show.bs.modal', (e) =>{
    var opener = e.relatedTarget

    vacina_id = $(opener).attr('vacina_id')
    vacina_nome = $(opener).attr('vacina_nome')

    $('#vacina_nome').text(vacina_nome)
    $('#delete_vacina_id').val(vacina_id)
})

// ------------------ MODAIS DO PROFISSIONAL ----------------------//

//MODAL PARA O PROFISSIONAL EDITAR A VACINA
$('#editarVacina').on('show.bs.modal', (e) => {
    var opener = e.relatedTarget

    let vacina = JSON.parse($(opener).attr('vacina'))

    $('#vacina_id').val(vacina.id)
    $('#e_nome').val(vacina.nome)
    $('#e_laboratorio').val(vacina.laboratorio)
    $('#e_descricao').val(vacina.descricao)
    $('#e_idade_minima').val(vacina.idade_minima)
})

