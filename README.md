# Reclame Aqui EVF

Um sistema de feedback para alunos e professores, permitindo que os alunos enviem feedback sobre os professores, e que um administrador gerencie esse feedback.

## Funcionalidades

* **Autenticação de Usuário:** O sistema possui um sistema de login para alunos e um administrador.
* **Painel do Aluno:** Após o login, os alunos são redirecionados para um painel onde podem navegar para enviar feedback.
* **Envio de Feedback:** Os alunos podem enviar feedback para professores específicos através de um formulário.
* **Painel do Administrador:** O administrador tem um painel separado para gerenciar os feedbacks enviados pelos alunos.
* **Gerenciamento de Feedback:** O administrador pode visualizar, aceitar ou excluir o feedback enviado pelos alunos.
* **Visualização de Feedback:** Os feedbacks aceitos podem ser visualizados na plataforma.

## Como Configurar o Projeto

1.  **Banco de Dados:**
    * Crie um banco de dados MySQL chamado `projeto1`.
    * Crie as tabelas `alunos`, `professores`, `feedback_aluno`, e `feedback_aceitos`.

2.  **Configuração da Conexão:**
    * No arquivo `conexao.php`, atualize as credenciais do banco de dados (`$usuario`, `$senha`, `$database`, `$host`) se forem diferentes do padrão (usuário 'root', sem senha).

3.  **Hospedagem:**
    * Hospede os arquivos em um servidor web com suporte a PHP e MySQL (por exemplo, XAMPP, WAMP).

## Estrutura de Arquivos

* `Max - Teste.php`: Página inicial com formulários de login e cadastro.
* `autenticarAluno.php`: Processa o login do aluno e do administrador.
* `enviarCadastroAluno.php`: Processa o cadastro de novos alunos.
* `painel.php`: Painel do aluno.
* `painelADM.php`: Painel do administrador.
* `Teste.php`: Página para o aluno enviar feedback.
* `enviarFeedbackAluno2.php`: Processa o envio de feedback do aluno.
* `exibir2.php`: Página do administrador para visualizar e gerenciar os feedbacks pendentes.
* `Feedbacksaceitos.php`: Processa a aceitação de um feedback pelo administrador.
* `ExcluirFeedback.php`: Processa a exclusão de um feedback pelo administrador.
* `exibirfeedbacks.php`: Página para exibir os feedbacks aceitos.
* `feedbackprofessor.php`: Formulário para o professor enviar feedback sobre as salas.
* `logout.php`: Encerra a sessão do usuário.
* `conexao.php`: Arquivo de configuração da conexão com o banco de dados.
