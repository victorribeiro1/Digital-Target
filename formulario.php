<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulário de qualificação</title>

        <link rel="stylesheet" href="assets/scss/formulario.css">
    </head>
    <body>

    <?php
        if (($_SERVER['REQUEST_METHOD'] !== 'POST')) {
            echo '
                // <script>
                //     window.location.href = "http://consultoria.digitaltarget.com.br";
                // </script>    
            ';
        }
    ?>

        <div class="formulario">
            <header class="formulario__header">
                <div class="formulario__header__texto">
                    <p class="formulario__header__texto__paragrafo">
                        Solicitamos que leia atentamente a cada uma das perguntas e responda de maneira consciente e verdadeira. 
                        <span class="formulario__header__texto__paragrafo__destaque">Lembre-se</span>: você está dando passos importantes para o desenvolvimento do seu negócio.
                    </p>
                    <p class="formulario__header__texto__paragrafo">
                        Após o envio com as respostas, faremos a análise das informações e daremos o retorno em até 48 horas sobre a 
                        aprovação ou não para o envio da proposta de serviços para o seu negócio.
                    </p>
                    <p class="formulario__header__texto__paragrafo">
                        Em caso de aprovação, você receberá o e-mail com o pré-agendamento para uma reunião on-line via zoom
                    </p>
                </div>
            </header>

            <form id="formulario" action="obrigado.php" method="post" class="formulario__forms">
                <?php
                echo '
                    <input type="hidden" name="nome" value='.$_POST["nome"].'>    
                    <input type="hidden" name="email" value='.$_POST["email"].'>    
                    <input type="hidden" name="numero" value='.$_POST["numero"].'>
                ';
                ?>
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">01) De 1 a 10, onde 1 significa muito pouco e 10 significa muito. Qual o nível de comprometimento que você tem em melhorar os resultados do seu negócio?</h2>

                    <div class="formulario__forms__pergunta__container-range">
                        <div class="formulario__forms__pergunta__container-range__numeros">
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">1</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">2</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">3</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">4</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">5</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">6</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">7</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">8</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">9</span>
                            <span class="formulario__forms__pergunta__container-range__numeros__numero">10</span>
                        </div>

                        <input type="range" name="pergunta1" class="formulario__forms__pergunta__container-range__input" min="1" max="10" step="1">
                    </div>
                </div>

                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">02) Que tipo de negócio é o seu? (negócio local, e-commerce, vende produtos ou serviços)</h2>
                    <input type="text" name="pergunta2" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">03) Quanto fatura mensalmente?</h2>
                    <input type="text" name="pergunta3" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">04) Qual ou quais objetivo(s) definiu para os próximos 12 meses?</h2>
                    <input type="text" name="pergunta4" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>

                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">05) Quais os principais desafios que você tem nesse momento:</h2>
                    <div class="formulario__forms__pergunta__container-checkbox">
                        <div class="formulario__forms__pergunta__container-checkbox__opcao">
                            <input type="checkbox"  name="pergunta5a" id="pergunta3a" placeholder="pergunta3a" class="formulario__forms__pergunta__container-checkbox__opcao__checkbox"> <label for="pergunta3a" class="formulario__forms__pergunta__container-checkbox__opcao__label">pergunta 3 a</label>
                        </div>
                        
                        <div class="formulario__forms__pergunta__container-checkbox__opcao">
                            <input type="checkbox"  name="pergunta5b" id="pergunta3b" placeholder="pergunta3b" class="formulario__forms__pergunta__container-checkbox__opcao__checkbox"> <label for="pergunta3b" class="formulario__forms__pergunta__container-checkbox__opcao__label">pergunta 3 b</label>
                        </div>
                        
                        <div class="formulario__forms__pergunta__container-checkbox__opcao">
                            <input type="checkbox"  name="pergunta5c" id="pergunta3c" placeholder="pergunta3c" class="formulario__forms__pergunta__container-checkbox__opcao__checkbox"> <label for="pergunta3c" class="formulario__forms__pergunta__container-checkbox__opcao__label">pergunta 3 c</label>
                        </div>
                    </div>
                    <input type="text"      name="pergunta5d" placeholder="Outro" class="formulario__forms__pergunta__input">
                </div>

                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">06) É importante resolver o desafio apontando na pergunta anterior para a sua empresa?</h2>
                    <input type="text" name="pergunta6" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">07) Quais os benefícios você vê para o seu negócio no uso das estratégias digitais e anúncios patrocinados?</h2>
                    <input type="text" name="pergunta7" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">08) Ajudaria se você pudesse ter clientes, não só de uma compra, mas clientes de compras
                        recorrentes?</h2>
                    <input type="text" name="pergunta8" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">09) Qual o grau de importância em ter relatórios quinzenais ou mensais dos resultados obtidos com as estratégias e anúncios digitais, para auxiliar na tomada de decisão do seu negócio?</h2>
                    <input type="text" name="pergunta9" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">10) Estar mais bem avaliado pelos clientes, quando comparado aos concorrentes, é importante para o seu negócio?</h2>
                    <input type="text" name="pergunta10" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">11) Faz sentido para você ter uma empresa e profissionais que trabalham em parceria e com proximidade ao seu negócio?</h2>
                    <input type="text" name="pergunta11" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>
                
                <div class="formulario__forms__pergunta">
                    <h2 class="formulario__forms__pergunta__titulo">12) Qual a verba mensal destinada para anúncios?</h2>
                    <input type="text" name="pergunta12" placeholder="Insira sua resposta aqui" class="formulario__forms__pergunta__input">
                </div>

                <!-- <button type="submit" name="enviar" class="formulario__forms__botao">Enviar</button> -->
                <input type="submit" name="enviar" value="Enviar" class="formulario__forms__botao">
            </form>
        </div>
    </body>
</html>