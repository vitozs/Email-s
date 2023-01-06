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

   
</head>
<body>

    <header class='display-4 text-center'>
        Email sender <i class="bi bi-envelope"></i>
    </header>

    <div class='container mt-5 w-50'>
        <div class='box'>
            <form action="enviar_email.php" method='post'>

                <div class='row gx-0'>
                    <div class="col-6">
                        <input name='de' class='form-control' type="text" placeholder='De:' >
                    </div>
                    <div class="col-6">
                        <input name='para' class='form-control' type="text" placeholder='Para:'>
                    </div>
                </div>
                
                <input name='assunto' class='form-control' type="text" placeholder='Assunto:'>
                <textarea name='mensagem' class='form-control' type="textarea" placeholder='Mensagem:' style='resize: none; height:300px;'></textarea>
                <div class="d-grid gap-2">
                    <button type='submit' class='btn btn-success btn-lg'>Send <i class="bi bi-send"></i></button>
                </div>
                
            </form>               
        </div>

    </div>

</body>
</html>