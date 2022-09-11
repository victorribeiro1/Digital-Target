const faqs = document.querySelectorAll('.faq__conteudo__perguntas-respostas__pergunta-resposta')

let alturaPergunta;
let alturaResposta;

faqs.forEach(faq => {
    alturaPergunta = faq.firstElementChild.clientHeight + 20
    alturaResposta = faq.lastElementChild.clientHeight + 20
    
    faq.style.height = alturaPergunta + 'px'
    
    faq.addEventListener('click', () => {
        faq.classList.toggle('ativo')
        
        if (faq.classList.contains('ativo')) {
            faq.style.height = alturaPergunta + alturaResposta + 'px'
        } else {
            faq.style.height = alturaPergunta + 'px'
        }
    })
})

window.addEventListener('resize', () => {
    faqs.forEach(faq => {
        alturaPergunta = faq.firstElementChild.clientHeight + 20
        alturaResposta = faq.lastElementChild.clientHeight + 20
        
        faq.style.height = alturaPergunta + 'px'
        
        faq.addEventListener('click', () => {
            faq.classList.toggle('ativo')
            
            console.log(alturaResposta)
    
            if (faq.classList.contains('ativo')) {
                faq.style.height = alturaPergunta + alturaResposta + 'px'
            } else {
                faq.style.height = alturaPergunta + 'px'
            }
        })
    })
})