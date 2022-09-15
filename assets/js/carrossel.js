const palavras = [
    'clientes',
    'sucesso'
]

let count = 0

// setInterval(() => {
//     if (count <= 'cliente'.length) {
//         backspace()

//         count++
//     } else {
//         // alert('fim')
//     }
// }, 1000)

// setTimeout(() => {
    
// }, 1000)

// function novaLetra(palavra, ultimoCaractere) {
//     const carrossel = document.getElementById('carrossel')

//     let conteudoCarrossel = palavra.slice(0, ultimoCaractere)

//     carrossel.innerText = conteudoCarrossel
// }

// function backspace() {
//     const carrossel = document.getElementById('carrossel')

//     let conteudoCarrossel = carrossel.innerText
//     const ultimoCaractere = conteudoCarrossel.length - 1
//     conteudoCarrossel = conteudoCarrossel.slice(0, ultimoCaractere)

//     console.log(conteudoCarrossel)

//     carrossel.innerText = conteudoCarrossel
// }

// let index = 0

// if (index == 0) {
//     removerTodasAsLetras(palavras[index])
// }

function AdicionarTodasAsLetras(palavraOriginal) {

    for (const caractere of palavraOriginal) {
        const palavraFormada =+ caractere 
    }
    carrossel = palavraFormada 

    if (palavraFormada == palavraOriginal) {
        return 'pronto'
    }
}

function removerTodasAsLetras(palavraOriginal) {

    for (const caractere of palavraOriginal) {
        const palavraFormada =+ caractere 
    }
    carrossel = palavraFormada 

    if (palavraFormada == palavraOriginal) {
        return 'pronto'
    }
}

// while (true) {
//     if (document.getElementById('carrossel').innerText == '') {
//        AdicionarTodasAsLetras('clientes')
//     }
    
//     else if (document.getElementById('carrossel').innerText == 'clientes' || document.getElementById('carrossel').innerText == 'sucesso') {
//         removerTodasAsLetras('clientes')
//     }
// }