var response = ""

$('#cep').focusout(async () => {
    let cep_value = $('#cep').val()

    if (cep_value.length === 9) {
        await retrieveDataViaCep(cep_value)
        responseInsideInput()
        response.erro ? alert("CEP informado não existe") : $('#numero').focus()
    }
})

retrieveDataViaCep = async (cep) => {
    let request = await fetch(`https://viacep.com.br/ws/${cep}/json/`)
    response = await request.json()
}

responseInsideInput = () => {
    $('#uf').val(response.uf)
    $('#cidade').val(response.localidade)
    $('#bairro').val(response.bairro)
    $('#logradouro').val(response.logradouro)
}
