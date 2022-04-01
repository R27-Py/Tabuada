<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Tabuada</title>
    </head>
    <body>
        <header>
            <h1>Digite um Numero para Obter a Tabuada</h1>
        </header>
        <main class="box">
            <div>
                <form action="index.php">
                    <div>
                        <input type="number" placeholder="Digite um numero"  name="num" id="num" >
                    </div>
                    <input type="submit" value="Enviar">
                </form>
                <div>
                    <?php
                        if (!empty($_GET['num'])) 
                        {
                            echo"<hr>";
                            echo"<br>";
                            $number = $_GET['num'];
                            for ($i=1; $i <=10 ; $i++) { 
                                echo"$number x $i = ".$i*$number.PHP_EOL;
                                echo"<br><br>";
                            }
                        }
                    ?>
                </div>
            </div>
        </main>
        <footer>
            <h3>Copyright &copy; 2022</h3>
        </footer>
    </body>
</html>