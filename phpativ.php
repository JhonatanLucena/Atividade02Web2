<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dev Web 2</title>
    <script>
    function procurarCidade() {
        document.getElementById("formDadastroDeAluno").submit();
    }
    </script>
</head>

<body>
    <form id="formDadastroDeAluno" method="POST" action="phpativ.php">
        <select id="estadoID" onchange="procurarCidade()" name="estado" class="form-control">
            <option value="0" selected>Escolher...</option>
            <option value="sp">São Paulo</option>
            <option value="ms">Mato Grosso do Sul</option>
        </select>
    </form>
    <select id="cidadeID" name="cidade" class="form-control">
        <?php
                if ($_POST) {
                if ($_POST["estado"] == "ms") {
                echo "<option value=\"corumba\">Corumbá</option>";
                echo "<option value=\"ladario\">Ladário</option>";
                } else if ($_POST["estado"] == "sp") {
                echo "<option value=\"andradina\">Andradina</option>";
                echo "<option value=\"ilhaSolteira\">Ilha Solteira</option>";
                echo "<option value=\"lorena\">Lorena</option>";
                }
                } else {
                echo "<option value=\"0\">Escolha o estado</option>";
                }
            ?>
    </select>

</body>

</html>