<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Lateral com Barra de Pesquisa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        /* Estilo do container principal */
        .container {
            display: flex;
            height: 100vh;
        }

        /* Estilo da guia lateral */
        .sidebar {
            width: 250px;
            background-color: #222;
            padding: 20px;
            color: #fff;
        }

        .sidebar a {
            text-decoration: none;
            color: #fff;
            display: block;
            padding: 10px;
            margin-bottom: 10px;
            background-color: #333;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .sidebar a:hover {
            background-color: #555;
        }

        /* Estilo da área de conteúdo */
        .content {
            flex-grow: 1;
            padding: 20px;
            background-color: #fff;
        }

        /* Estilo da barra de pesquisa */
        .search-bar {
            position: relative;
            margin-bottom: 20px;
            width: 80%;
        }

        .search-bar input[type="text"] {
            width: 100%;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ccc;
            border-radius: 25px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .search-bar input[type="text"]:focus {
            border-color: #ff7f50;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            outline: none;
        }

        .search-bar i {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            font-size: 18px;
            color: #aaa;
        }

        /* Estilo do formulário de perfil do estudante */
        .student-profile {
            display: none;
            background-color: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
        }

        .student-profile h2 {
            margin-top: 0;
        }

        .student-profile label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        .student-profile input {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .container {
                flex-direction: column;
            }

            .sidebar {
                width: 100%;
                height: auto;
            }
        }
    </style>
    <!-- Ícones do FontAwesome para adicionar ícones à barra de pesquisa -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
    <!-- Guia lateral -->
    <div class="sidebar">
        <h2>Menu</h2>
        <a href="#funcionalidade1" onclick="showStudentProfile()">Perfil do Aluno</a>
        <a href="#funcionalidade2">Perfil do Professor</a>
        <a href="#funcionalidade3">Visualizar Pais</a>
    </div>

    <!-- Área de conteúdo -->
    <div class="content">
        <!-- Barra de pesquisa com ícone de lupa -->
        <div class="search-bar">
            <i class="fas fa-search"></i>
            <input type="text" placeholder="Barra de pesquisa....">
        </div>

        <!-- Conteúdo adicional padrão -->
        <h1>Bem-vindo ao sistema</h1>
        <p>Selecione uma funcionalidade no menu à esquerda ou use a barra de pesquisa para encontrar algo específico.</p>

        <!-- Formulário de perfil do estudante -->
        <div id="studentProfile" class="student-profile">
            <h2>Perfil do Estudante</h2>
            <label for="nome">Nome do Estudante</label>
            <input type="text" id="nome" name="nome" placeholder="Digite o nome do estudante">
            
            <label for="idade">Idade</label>
            <input type="text" id="idade" name="idade" placeholder="Digite a idade">
            
            <label for="turma">Turma</label>
            <input type="text" id="turma" name="turma" placeholder="Digite a turma">
            
            <label for="matricula">Matrícula</label>
            <input type="text" id="matricula" name="matricula" placeholder="Digite o número de matrícula">
        </div>
    </div>
</div>

<script>
    // Função para exibir o perfil do estudante
    function showStudentProfile() {
        // Ocultar o conteúdo inicial
        document.querySelector('h1').style.display = 'none';
        document.querySelector('p').style.display = 'none';
        
        // Exibir o formulário de perfil do estudante
        document.getElementById('studentProfile').style.display = 'block';
    }
</script>

</body>
</html>
