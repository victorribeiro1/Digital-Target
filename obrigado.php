<!DOCTYPE html>
    <html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Obrigado!</title>

        <link rel="stylesheet" href="assets/scss/obrigado.css">

        <style>
            * {
                color: var(--cor-fundo);
            }
        </style>
    </head>
    <body>

    <?php
        //Import PHPMailer classes into the global namespace
        //These must be at the top of your script, not inside a function
        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\SMTP;
        use PHPMailer\PHPMailer\Exception;

        //Load Composer's autoloader
        require 'vendor/autoload.php';

        if (($_SERVER['REQUEST_METHOD'] === 'POST')) {
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

        try {
            //Server settings
                $mail->isSMTP();                                            //Send using SMTP
                $mail->CharSet = 'UTF-8';
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'victorribeiro.dev@gmail.com';                     //SMTP username
                $mail->Password   = 'zhyqwtlcyofnotqk';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
                $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('victorribeiro.dev@gmail.com', $_POST['nome']);
                $mail->addAddress('victorribeiro.dev@gmail.com', 'Consultoria');     //Add a recipient
                $mail->addReplyTo('victorribeiro.dev@gmail.com', 'Information');

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Formulário de Qualificação';
                $body = "
                Nome: ". $_POST['nome']. "<br />
                E-mail: ". $_POST['email']. "<br />
                Número: ". $_POST['numero']. "<br /><br />
                01): ". $_POST['pergunta1']. "<br />
                02): ". $_POST['pergunta2']. "<br />
                03): ". $_POST['pergunta3']. "<br />
                04): ". $_POST['pergunta4']. "<br />
                05-A): ".$_POST['pergunta5a']. "<br />
                05-B): ".$_POST['pergunta5b']. "<br />
                05-C): ".$_POST['pergunta5c']. "<br />
                05-D): ".$_POST['pergunta5d']. "<br />
                06): ". $_POST['pergunta6']. "<br />
                07): ". $_POST['pergunta7']. "<br />
                08): ". $_POST['pergunta8']. "<br />
                09): ". $_POST['pergunta9']. "<br />
                10): ". $_POST['pergunta10']. "<br />
                11): ". $_POST['pergunta11']. "<br />
                12): ". $_POST['pergunta12']. "<br />";

                $mail->Body = $body;

                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

                $mail->send();

                echo '

                <div class="obrigado">
                    <div class="obrigado__container">
                    <div class="obrigado__container__container-icone">
                            <div class="obrigado__container__container-icone__circulo"></div>
                            <svg class="icon obrigado__container__container-icone__icone">
                                <use xlink:href="assets/midias/icones/symbol-defs.svg#checkmark"></use>
                            </svg>
                        </div>
    
                        <p class="obrigado__container__texto">
                            <span class="obrigado__container__texto__linha">
                                Agradecemos por se cadastrar e preencher o formulário de qualificação.
                            </span>
        
                            <span class="obrigado__container__texto__linha">
                                <span class="obrigado__container__texto__linha__destaque">importante</span>: Estaremos analisando as informações e daremos o retorno por e-mail com a
                            </span>
    
                            <span class="obrigado__container__texto__linha">
                                aprovação ou não do envio da proposta de serviços para o seu negócio. 
                            </span>
                        </p>
        
                        <div class="obrigado__container__redes-sociais">
                            <p class="obrigado__container__redes-sociais__texto">Nossas redes sociais:</p>
                            <div class="obrigado__container__redes-sociais__container">
                                <a href="" class="obrigado__container__redes-sociais__container__link">
                                    <svg class="icon obrigado__container__redes-sociais__container__link__icone obrigado__container__redes-sociais__container__link__icone--1">
                                        <use xlink:href="assets/midias/icones/symbol-defs.svg#instagram"></use>
                                    </svg>
                            </a>
                                <a href="" class="obrigado__container__redes-sociais__container__link">
                                    <svg class="icon obrigado__container__redes-sociais__container__link__icone obrigado__container__redes-sociais__container__link__icone--2">
                                        <use xlink:href="assets/midias/icones/symbol-defs.svg#linkedin"></use>
                                    </svg>
                                </a>
                                <a href="" class="obrigado__container__redes-sociais__container__link">
                                    <svg class="icon obrigado__container__redes-sociais__container__link__icone obrigado__container__redes-sociais__container__link__icone--3">
                                        <use xlink:href="assets/midias/icones/symbol-defs.svg#facebook"></use>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>';

                } catch (Exception $e) {
                    // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }

            } else {
                echo '
                    <script>
                        window.location.href = "http://consultoria.digitaltarget.com.br";
                    </script>    
                ';
            }
        ?>
    </body>
</html>