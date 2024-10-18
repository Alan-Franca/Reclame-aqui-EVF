<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclame aqui EVF</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: radial-gradient(ellipse at top, #294380, transparent),
            radial-gradient(ellipse at bottom, #69d2cd, transparent),
            radial-gradient(circle at 10%, #b9f1d6, transparent);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        main {
            flex: 1;
        }

        .menu {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
            gap: 1rem;
        }

        .menu a {
            background-color: #3b82f6; /* Botão azul */
            color: white;
            padding: 12px 24px;
            border-radius: 9999px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .menu a:hover {
            background-color: #2563eb; /* Botão azul mais escuro ao passar o mouse */
        }

        /* Estilo do dropdown */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            right: 0;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 8px;
        }


        .dropdown:hover .dropdown-content,
        .dropdown-content:hover {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }

      
        footer {
            background-color: black;
            color: white;
            text-align: center;
            padding: 22px 0;
            font-size: 14px;
        }
    </style>
</head>
<body class="bg-blue-900 text-white">
  <?php  session_start(); ?>
    <header class="flex justify-between items-center p-4 bg-black">
        <div class="text-3xl font-bold">Portal do Aluno</div>

        <div class="dropdown relative">
            <a class="dropbtn flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2">  <?php     echo $_SESSION['nome']; ?></span>
            </a>
            <div class="dropdown-content absolute right-0 bg-white text-black mt-2 rounded shadow-lg">
            <a href="painelADM.php">Pagina Inicial</a>
                <a href="logout.php">Sair</a>
            </div>
        </div>
  </div>
      
    </header>

    <main class="text-center py-12">
        <h1 class="text-3xl font-bold mb-4">Área do ADM</h1>

        <!-- Menu de botões -->
        <div class="menu">
            <a href="exibir2.php">Feedback Solicitados</a>
            <a href="#">feedback salas </a>
            <a href="exibirfeedbacks.php">Feedbacks dos Alunos</a>
        </div>
    </main>

    <footer>
        Todos os direitos reservados a P.A.W. 2024
    </footer>
</body>
</html>
