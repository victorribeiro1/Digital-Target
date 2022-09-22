const form2 = document.querySelector('#formulario form')
const inputs2 = document.querySelectorAll('#formulario input')
const botao2 = document.querySelector('button[type="submit"]')

function cancelarEvento2() {
    botao2.addEventListener('click', (evt) => {
        evt.preventDefault()
    })
}

function enviarFormulario2() {
    form2.submit()
}

function camposEstaoPreenchidos2() {
    let estaoPreenchidos = true

    if (inputs2[0].value == '') {
        inputs2[0].classList.add('erro')

        estaoPreenchidos = false
    }
    if (inputs2[1].value == '') {
        inputs2[1].classList.add('erro')

        estaoPreenchidos = false
    }
    if (inputs2[2].value == '') {
        inputs2[2].classList.add('erro')

        estaoPreenchidos = false
    }

    return estaoPreenchidos
}

function limparErros2() {
    const erros = document.querySelectorAll('.erro')
    erros.forEach(erro => {
        erro.classList.remove('erro')
    })
}

function emailTemDominio2() {
    let temDominio = true

    if (inputs2[1].value.split('@gmail.com').length != 2 && inputs2[1].value.split('@hotmail.com').length != 2 && inputs2[1].value.split('@hostgator.com').length != 2 && inputs2[1].value.split('@yahoo.com').length != 2) {
        inputs2[1].classList.add('erro')

        temDominio = false
    }

    return temDominio
}

function numeroTem13Digitos2() {
    let tem13Digitos = true
    if (inputs2[2].value.length < 13 || inputs2[2].value.length > 13) {
        inputs2[2].classList.add('erro')

        tem13Digitos = false
    }

    return tem13Digitos
}

function saoTodosNumeros2() {
    let saoTodosNumeros2 = true

    let numero = inputs2[2].value.split('-').join('')
    numero = +numero

    if (isNaN(numero)) {
        inputs2[2].classList.add('erro')

        saoTodosNumeros2 = false
    }

    return saoTodosNumeros2
}

function formatar2() {
    let numero = inputs2[2].value

    if (numero.length < 11) {
        if (inputs2[2].value.length == 2) {
            numero = inputs2[2].value
            inputs2[2].value = `${numero}-`
        }
    
        if (inputs2[2].value.length == 8) {
            numero = inputs2[2].value
            inputs2[2].value = `${numero}-`
        }
    } else if (numero.length > 13) {
    } else if (numero.length == 11) {
        numero = numero.replace('-', '')
        numero = numero.split('')

        numero.splice(2, 0, '-')
        if (numero[8] != '-') {
            numero.splice(8, 0, '-')
        } 

        inputs2[2].value = numero.join('')
    }
}

inputs2[2].addEventListener('keyup', () => {
    formatar2()
})

botao2.addEventListener('click', evento => {
    limparErros2()
    emailTemDominio2()
    numeroTem13Digitos2()
    saoTodosNumeros2()

    if (camposEstaoPreenchidos2() && emailTemDominio2() && numeroTem13Digitos2() && saoTodosNumeros2()) {
        enviarFormulario2()
    }
})

cancelarEvento2()