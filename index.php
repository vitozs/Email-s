<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">


   
</head>
<body>

    <header class='display-1 text-center'>
        Email sender
    </header>

    <div class='container mt-5 w-50'>

        <form action="enviar_email.php" method='post'>

            <div class='row gx-0'>
                <div class="col-6">
                    <input name='de' class='form-control' type="text" placeholder='De:' style="border-radius:0px;">
                </div>
                <div class="col-6">
                    <input name='para' class='form-control' type="text" placeholder='Para:' style="border-radius:0px;">
                </div>
            </div>
            
            <input name='assunto' class='form-control' type="text" placeholder='Assunto:' style="border-radius:0px;">
            <textarea name='mensagem' class='form-control' type="textarea" placeholder='Mensagem:' style='resize: none; height:300px; border-radius:0px;'></textarea>
            <button type='submit' class='btn btn-success btn-lg'>Enviar</button>

        </form>
    </div>

</body>
</html>