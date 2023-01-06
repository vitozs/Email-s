<?php


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    use PHPMailer\PHPMailer\SMTP;

    require './Lib/PHPMailer/src/Exception.php';
    require './Lib/PHPMailer/src/PHPMailer.php';
    require './Lib/PHPMailer/src/SMTP.php';

    class Mensagem{
        private $de = null;
        private $para = null;
        private $assunto = null;
        private $mensagem = null;
        private $aviso = null;
        private $erro = false;

        public function __set($atr, $val){
            $this->$atr = $val;
        }

        public function __get($atr){
            return $this->$atr;
        }
    }

    $mensagem = new Mensagem();

    $mensagem->__set('de', $_POST['de']);
    $mensagem->__set('para', $_POST['para']);
    $mensagem->__set('assunto', $_POST['assunto']);
    $mensagem->__set('mensagem', $_POST['mensagem']);
    
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function


    //Load Composer's autoloader
    require 'vendor/autoload.php';

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    if($_POST['de'] != '' || $_POST['para'] != '' || $_POST['assunto'] != ''|| $_POST['mensagem'] != ''){
        try {
            //Server settings
            //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'emailsender2023@gmail.com';                     //SMTP username
            $mail->Password   = 'sfjerqqbqyroxvog';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
            //Recipients
            $mail->setFrom($mensagem->__get('de'), $mensagem->__get('de'));
            $mail->addAddress($mensagem->__get('para'));     //Add a recipient
            //$mail->addAddress($mensagem->__get('de'));               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
    
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $mensagem->__get('assunto');
            $mail->Body    = $mensagem->__get('mensagem');
            //$mail->AltBody = $mensagem->__get('mensagem');
    
            $mail->send();
            $mensagem->aviso = 'Mensagem enviada com sucesso!';
            $mensagem->erro = false;
        } catch (Exception $e) {
             $mensagem->aviso = "A mensagem não pode ser enviada! Erro: {$mail->ErrorInfo}";
             $mensagem->erro = true;

        }
    }else{
        $mensagem->aviso = 'Preencha todos os campos!';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">

    <link rel="stylesheet" href="estilo.css">

    <script src='teste.js'></script>

   
</head>
<body>

    <header class='display-4 text-center'>
        Email sender <i class="bi bi-envelope"></i>
    </header>

    <div class='container mt-5 w-50'>

        <? if($mensagem->erro = false){?>
        <div class='display-1 text-success'>
            Mensagem enviada!
        </div>
        <p>
            <?= $mensagem->aviso ?>
        </p>
        <?}?>

        <? if($mensagem->erro = true){?>
        <div class='display-1 text-danger'>
            Ops...
        </div>
        <p>
            <?= $mensagem->aviso ?>
        </p>
        <?}?>
        

    </div>



</body>
</html>