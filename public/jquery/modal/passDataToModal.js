// ------------------ MODAL DO ADMINISTRADOR ----------------------//
// MODAL DE MAIS INFORMAÇÕES SOBRE O USUÁRIO
$('#maisInformacoes').on('show.bs.modal', (e)  =>{
    var opener = e.relatedTarget

    let user = JSON.parse($(opener).attr('user'))

    $('#userId').text( `ID: ${user.id}`)
    $('#userNomeCompleto').text(`Nome Completo: ${user.nome_completo}`)
    $('#userCPF').text(`CPF: ${user.cpf}`)
    $('#userEmail').text(`Email: ${user.email}`)
    $('#dataUsuarioCriado').text(`Data de criação do usuário: ${user.created_at}`)
})

//MODAL PARA O ADMINISTRADOR ATUALIZAR USUÁRIO