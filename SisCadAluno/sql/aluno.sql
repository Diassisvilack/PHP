$sql = "CREATE TABLE aluno (\n"

    . "    matricula INT PRIMARY KEY AUTO_INCREMENT,\n"

    . "    nome VARCHAR(100) NOT NULL,\n"

    . "    telefone VARCHAR(20),\n"

    . "    endereco VARCHAR(200),\n"

    . "    email VARCHAR(100) UNIQUE,\n"

    . "    curso VARCHAR(20) NOT NULL\n"

    . ");";