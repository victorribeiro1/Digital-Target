const palavras = ['Mais reconhecimento de marca', 'Mais tráfego', 'Mais clientes', 'Mais resultados']

let contadorPalavra = 0
let contadorLetra = 0

const novaLetra = () => {
    const informacao = document.querySelector('#informacao')
    
    palavraDaVez = palavras[contadorPalavra]

    if (contadorLetra < palavraDaVez.length) {
        const letraDaVez = palavraDaVez.split('')[contadorLetra]
    
        contadorLetra++
    
        informacao.innerText += letraDaVez
    } else {
        if(contadorPalavra + 1 == palavras.length) contadorPalavra = 0
        else ++contadorPalavra
        
        contadorLetra = 0
        informacao.innerText = ''
    }
}

setInterval(novaLetra, 200)