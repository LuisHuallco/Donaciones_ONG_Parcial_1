<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Menú Principal</title>
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        /* IMAGEN */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;

            background-image: url('assets/media/ong.png');
            background-size: cover;       
            background-position: center;  
            background-repeat: no-repeat; 
            background-attachment: fixed;
        }

        .menu-container {
    width: 60%;
    margin: 80px auto;
    
    background: rgba(255, 255, 255, 0.25);
    backdrop-filter: blur(8px);

    padding: 40px;
    text-align: center;

    border-radius: 20px;
    box-shadow: 0 0 25px rgba(0,0,0,0.20);
}


        h1 {
            font-size: 28px;
            margin-bottom: 35px;
            color: #333;
            font-weight: bold;
        }

        .menu-buttons {
            display: flex;
            justify-content: center;
            gap: 25px;
        }

        .menu-btn {
            padding: 12px 25px;
            background: #007bff;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: bold;
            font-size: 16px;
            transition: 0.3s;
        }

        .menu-btn:hover {
            background: #0056b3;
        }
    </style>
</head>

<body>

    <div class="menu-container">
        <h1>Gestión de Donaciones - Menú Principal</h1>

        <div class="menu-buttons">
            <a class="menu-btn" href="/ong_donaciones_mvc/views/donantes/lista.php">Donantes</a>
            <a class="menu-btn" href="/ong_donaciones_mvc/views/proyectos/lista.php">Proyectos</a>
            <a class="menu-btn" href="/ong_donaciones_mvc/views/donaciones/lista.php">Donaciones</a>
        </div>

    </div>

</body>
</html>
