const obrigatorios = document.querySelectorAll('[obrigatorio]')
const range = document.querySelector('input[type="range"]')
const botao = document.querySelector('input[type="submit"]')
const perguntas5 = document.querySelectorAll('[pergunta5] input')

range.value = 1

function cancelarEvento() {
    botao.addEventListener('click', (evt) => {
        evt.preventDefault()
    })
}

function limparErros() {
    const erros = document.querySelectorAll('.erro')
    erros.forEach(erro => {
        erro.classList.remove('erro')
    })
}

function todosObrigatoriosEstaoPreenchidos() {
    let preenchidos = true
    
    obrigatorios.forEach(obrigatorio => {
        if(obrigatorio.value == '' || obrigatorio.value.length <= 3) {
            obrigatorio.classList.add('erro')

            preenchidos = false
        }
    })

    return preenchidos
}

function perguntaCincoRespondida() {
    let respondidas = true

    if (perguntas5[0].checked == false && perguntas5[1].checked == false && perguntas5[2].checked == false && perguntas5[3].value == '') {
        document.querySelector('[pergunta5]').classList.add('erro')

        respondidas = false
    }

    return respondidas
}

function enviarFormulario() {
    document.querySelector('form').submit()
}

botao.addEventListener('click', () => {
    limparErros()
    if (todosObrigatoriosEstaoPreenchidos() && perguntaCincoRespondida()) {
            document.querySelector('[name="pergunta5a"]').value = (perguntas5[0].checked ? 'Sim' : 'Não')
            document.querySelector('[name="pergunta5b"]').value = (perguntas5[1].checked ? 'Sim' : 'Não')
            document.querySelector('[name="pergunta5c"]').value = (perguntas5[2].checked ? 'Sim' : 'Não')

            setTimeout(() => {
                enviarFormulario()
            }, 100)
    }
})

cancelarEvento()