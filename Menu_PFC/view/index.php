<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="nada">

                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-4"></div>

                <div class="col-4 text-center">
                    <form id="login" method="" action="menu.php">
                        <label> LOGIN</label>
                        <br>
                        <input type="text" name="credencial" placeholder="Credencial">
                        <br><br>
                        <select name="funcao" id="opt">
                            <option value="adm">Admin</option>
                            <option value="func">Funcionario</option>
                        </select>
                        <input type="submit" value="Login">
                    </form>
                </div>

            <div class="col-4"></div>
        </div>
    </div>




    <script src="./js/jquery-3.4.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>