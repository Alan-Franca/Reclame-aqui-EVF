<html>
<head>
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
        }   
        .input {
            border: 2px solid transparent;
            width: 15em;
            height: 2.5em;
            padding-left: 0.8em;
            outline: none;
            overflow: hidden;
            background-color: #F3F3F3;
            border-radius: 10px;
            transition: all 0.5s;
        }

        .input:hover,
        .input:focus {
            border: 2px solid #4A9DEC;
            box-shadow: 0px 0px 0px 7px rgb(74, 157, 236, 20%);
            background-color: white;
        }
      
        .button-container {
            display: flex;
            width: auto;
            padding: 15px;
            border-radius: 10px;
            justify-content: end;
        }

     

        .button-container a:last-child {
            margin-right: 0;
        }

        .button-container a:hover {
            background-color: #0056b3;
            transform: scale(1.05);
        }

        .button-container a svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        @media (prefers-color-scheme: dark) {
            .button-container {
                box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            }

            .button-container a {
                color: white;
                background-color: #374151;
                box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 1px 2px rgba(0, 0, 0, 0.06);
            }

            .button-container a:hover,
            .button-container a:focus,
            .button-container a:active {
                background-color: #4b5563;
                box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.1),
                    0px 2px 4px -1px rgba(0, 0, 0, 0.06);
            }
        }

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
  <?php session_start(); ?>
    <header class="flex justify-between items-center p-4 bg-black">
        <div class="text-3xl font-bold">Portal do Aluno</div>

        <div class="dropdown relative">
            <a class="dropbtn flex items-center cursor-pointer">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
                <span class="ml-2"><?php echo $_SESSION['nome']; ?></span>
            </a>
            <div class="dropdown-content absolute right-0 bg-white text-black mt-2 rounded shadow-lg">
                <a href="javascript:history.back()">Pagina Inicial</a>
                <a href="logout.php">Sair</a>
            </div>
        </div>
    </header>
      
    <main class="text-center py-12">
        <h1 class="text-3xl font-bold mb-4">Feedback sobre os professores</h1>
       
        <div style="display: flex; justify-content: center; align-items: center; min-height: 70vh; width: 100%">
            <div style="width: 80%; max-width: 1200px; margin: 0 auto;">
                <div class="bg-white text-black p-6 rounded-lg w-full flex flex-col">
                    <div class="bg-teal-700 text-white px-2 py-1 rounded-full inline-block mb-4">Feedback</div>
                    <div style="flex-grow: 1; overflow: auto;">
                    <?php
                        $conexao = mysqli_connect("localhost", "root", "", "projeto1");
                        if (!$conexao) {
                            die("Erro de conexão: " . mysqli_connect_error());
                        }

                        $sql = "SELECT  id_feedback , fa.feedback, p.id_professor, p.nome AS nome_professor
                                FROM feedback_aceitos fa
                                JOIN professores p ON fa.id_professor = p.id_professor";

                        $resultado = mysqli_query($conexao, $sql);

                        if (mysqli_num_rows($resultado) > 0) {
                            echo "<style>
                            table {
                                width: 90%;
                                max-width: 1600px;
                                table-layout: auto;
                                margin: auto;
                                border-collapse: collapse;
                                background-color: white;  
                                color: black;
                                overflow-wrap: break-word;
                            }

                            th, td {
                                border: 1px solid black;
                                padding: 14px;
                                text-align: left;
                                word-wrap: break-word;
                                white-space: normal;
                                overflow-wrap: break-word;
                                font-size: 18px;
                            }

                            th {
                                background-color: #f2f2f2;
                            }

                            button {
                                padding: 12px 24px;
                                font-size: 16px;
                            }

                            </style>";

                            echo "<table border='1'>
                            <tr>
                                <th style='width: 10%;'>ID do Professor</th>
                                <th style='width: 25%;'>Nome do Professor</th>
                                <th style='width: 40%;'>Feedback</th>
                        
                            </tr>";

                            while ($row = mysqli_fetch_assoc($resultado)) {
                                echo "<tr>";
                                echo "<td>" . $row["id_professor"] . "</td>";
                                echo "<td>" . $row["nome_professor"] . "</td>";
                                echo "<td>" . $row["feedback"] . "</td>";
                       
 echo "</tr>";
                                      // Verificar se existe uma mensagem na sessão

                               



                            }
                            echo "</table>";
                        } else {
                            echo "Nenhum feedback encontrado.";
                        }

                        mysqli_close($conexao);
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer>
        <p>&copy; Todos os direitos reservados a P.A.W. 2024</p>
    </footer>
</body>
</html>
