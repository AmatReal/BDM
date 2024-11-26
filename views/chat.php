<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/chat.css">
    <?php include('../comp/header.php'); ?>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            
            <div class="col-md-3 col-lg-2 bg-light p-3">
                <h5>Contactos</h5>
                <ul class="list-group">
                    <li class="list-group-item">Usuario 1</li>
                    <li class="list-group-item">Usuario 2</li>
                </ul>
            </div>

            
            <div class="col-md-8 col-lg-8 p-3">
                <h5>Chat con Usuario 1</h5>
                <div class="chat-window">
                    <div class="message received">
                        <span>Hola, ¿cómo estás?</span>
                    </div>
                    <div class="message sent">
                        <span>¡Hola! Estoy bien, gracias.</span>
                    </div>
                    <div class="message received">
                        <span>¿Qué tal tu día?</span>
                    </div>
                </div>
                <div class="input-group mt-3">
                    <input type="text" class="form-control" placeholder="Escribe un mensaje...">
                    <div class="input-group-append">
                        <button class="btn" style="background-color: purple; color: white;" type="button">Enviar</button>
                    </div>
                </div>
            </div>

            
            <div class="col-md-1 col-lg-2"></div>
        </div>
    </div>
</body>
</html>
