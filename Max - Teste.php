<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <?php session_start(); // Inicie a sessão ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reclame aqui EVF</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <script>
    function Aluno(form) {
        const nome = form.nome.value.trim();
        const senha = form.senha.value.trim();

        if (nome === '') {
            alert("Preencha o campo Nome!");
            return false;
        }

        if (senha === '') {
            alert("Preencha o campo Senha!");
            return false;
        }

        return true; // O formulário é válido
    }
</script>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: radial-gradient(ellipse at top, #294380, transparent),
            radial-gradient(ellipse at bottom, #69d2cd, transparent),
            radial-gradient(circle at 10%, #b9f1d6, transparent);
        }

        .aviso {
            margin: 20px auto;
            padding: 10px;
            border: 1px solid #4caf50; /* Cor da borda para sucesso */
            border-radius: 5px;
            background-color: #e7f9e7; /* Fundo verde claro */
            color: #2e652e; /* Texto verde escuro */
            width: 80%;
            text-align: center;
        }

        .error {
            border-color: #f44336; /* Cor da borda para erro */
            background-color: #f8d7da; /* Fundo vermelho claro */
            color: #721c24; /* Texto vermelho escuro */
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

.button-container a {
  color: #3b82f6; /* light-blue-light */
  border: 2px solid transparent;
  display: inline-flex;
  align-items: center;
  margin-right: 20px;
  padding: 10px;
  background-color: #f3f4f6; /* light-secondary */
  box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.05);
  border-radius: 9999px;
  font-size: 14px;
  text-align: center;
  transition: all 0.2s ease;
}

.button-container a:last-child {
  margin-right: 0;
}

.button-container a:hover {
  color: black;
  border-color: #3b82f6; /* light-blue-light */
  box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
}

.button-container a svg {
  width: 20px;
  height: 20px;
  fill: currentColor;
}

/* Dark Mode Styles */
@media (prefers-color-scheme: dark) {
  .button-group {
    background-color: #1f2937; /* box-dark */
    box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.5),
      0px 2px 4px -1px rgba(0, 0, 0, 0.3);
  }

  .button-container {
    box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
  }

  .button-container a {
    color: #9ca3af; /* gray-400 */
    background-color: #374151; /* button-curved-default-dark */
    box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1), 0px 1px 2px rgba(0, 0, 0, 0.06);
  }

  .button-container a:hover,
  .button-container a:focus,
  .button-container a:active {
    background-color: #4b5563; /* button-curved-pressed-dark */
    box-shadow: 0px 4px 6px -1px rgba(0, 0, 0, 0.1),
      0px 2px 4px -1px rgba(0, 0, 0, 0.06);
  }
}
footer {
            background-color: #000000;
            color: white;
            text-align: center;
            padding: 22px 0;
            font-size: 14px;
        }
        
    </style>
</head>
<body class="bg-blue-900 text-white">
    <header class="flex justify-between items-center p-4 bg-black">
        <div class="text-3xl font-bold">Portal do Aluno</div>
        <div class="button-container">
            <a title="Go to about me page" href="#">
                <svg>
                    <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"></path>
                </svg>
            </a>
        </div>
    </header>
    <main class="text-center py-12">
        <h1 class="text-3xl font-bold mb-4">Iniciar Acesso</h1>
        <div class="flex justify-center mb-8">
            <button class="bg-blue-700 text-white px-6 py-2 rounded-l-full">Aluno</button>
            <button class="bg-white text-blue-700 px-6 py-2 rounded-r-full">Professor</button>
        </div>

        <div class="flex justify-center space-x-4">
            <div class="bg-white text-black p-6 rounded-lg w-80">
                <div class="bg-teal-700 text-white px-2 py-1 rounded-full inline-block mb-4">LOGIN</div>
                <ul class="text-left mb-4">
                    <form method="POST" action="autenticarAluno.php">
                        <h2 class="text-xl font-bold mb-4">Nome:</h2>
                        <input type="text" name="nome" placeholder="Digite aqui" style="border: 1px solid transparent; border-radius: 8px; padding: 8px; width: 100%; transition: border-color 0.3s;">
                        
                        <h2 class="text-xl font-bold mb-4">Senha:</h2>
                        <input type="password" name="senha" placeholder="Digite aqui" style="border: 1px solid transparent; border-radius: 8px; padding: 8px; width: 100%; transition: border-color 0.3s;">
                        <?php  if (isset($_SESSION['mensagem_login'])) {
                            echo '<div class="aviso error">' . $_SESSION['mensagem_login'] . '</div>';
                            unset($_SESSION['mensagem_login']); // Limpa a mensagem após exibi-la
                        }
                        ?>
                        
                        <p>
                            <br>
                            <center><input type="submit" value="Login" class="bg-blue-700 text-white px-4 py-2 rounded"></center>
                        </p>
                    </form>
                </ul>
            </div>

            <div class="bg-white text-black p-6 rounded-lg w-80">
                <div class="bg-teal-700 text-white px-2 py-1 rounded-full inline-block mb-4">CADASTRO</div>
                <ul class="text-left mb-4">
                    <form method="POST" action="enviarCadastroAluno.php"  onsubmit="return Aluno(this);">
                        <h2 class="text-xl font-bold mb-4">Nome:</h2>
                        <input type="text" name="nome" placeholder="Digite aqui" style="border: 1px solid transparent; border-radius: 8px; padding: 8px; width: 100%; transition: border-color 0.3s;">
                        
                        <h2 class="text-xl font-bold mb-4">Senha:</h2>
                        <input type="password" name="senha" placeholder="Digite aqui" style="border: 1px solid transparent; border-radius: 8px; padding: 8px; width: 100%; transition: border-color 0.3s;">
                        
                        <?php
                        // Mensagem de cadastro deve aparecer apenas aqui
                        if (isset($_SESSION['mensagem_cadastro'])) {
                            echo '<div class="aviso' . (strpos($_SESSION['mensagem_cadastro'], 'Erro') !== false ? ' error' : '') . '">' . $_SESSION['mensagem_cadastro'] . '</div>';
                            unset($_SESSION['mensagem_cadastro']); // Limpa a mensagem após exibi-la
                        }
                        ?>
                        
                        <p>
                            <br>
                            <center><input type="submit" value="Cadastrar" class="bg-blue-700 text-white px-4 py-2 rounded"></center>
                        </p>
                    </form>
                </ul>
            </div>
        </div>

    </main>
    <footer>
    Todos os direitos reservados a P.A.W. 2024</footer>
</body>
</html>
