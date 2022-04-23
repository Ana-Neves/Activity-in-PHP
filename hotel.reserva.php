<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel XYZ</title>
</head>

<body class="geral-reserva">
    <header class="topo-reserva">
        <h1>Hotel California</h1>
    </header>
    <main class="corpo-reserva">
        <h2 class="subtitulo-reserva">Faça sua reserva</h2>
        <section class="conteudo-form">
            <form name="form1" class="form-text" action="../controller/reserva.controller.php" method="post">
                <table class="tabela">
                    <div>
                        <p>Nome: </p><label><input class="button" type="text" name="textnome" placeholder="Ana Neves" required></label>
                    </div>
                    <div>
                        <p>Email: </p><label><input class="button" type="email" name="textemail" placeholder="exemplo@gmail.com" required></label>
                    </div>
                    <div>
                        <p>Telefone: </p><label><input class="button" type="text" name="texttelefone" placeholder="9999-9999" required></label>
                    </div>
                    <div>
                        <p>RG: </p><label><input class="button" type="number" name="textrg" placeholder="" required></label>
                    </div>
                    <div>
                        <p>Dias de Reserva: </p><label><input class="button" name="textdias" type="number" placeholder="0" required></label>
                    </div>
                    <br>
                    <p> Escolha o tipo da reserva </p>
                    <select name="textReserva" class="button">
                        <option name="double" value="Suíte Double Master">Suíte Double Master: R$ 150,00 a diária</option>
                        <option name="familia" value="Suíte Família">Suíte Família: R$ 180,00 a diária.</option>
                        <option name="single" value="Suíte Single">Suíte Single: R$ 100,00 a diária.</option>
                    </select>
                    <br><br>
                    <h4>Confirme sua compra</h4>
                    <input type="submit" class="button2" value="Efetuar Reserva">
                    <input type="reset" class="button2" value="Limpar Campos">
                </table>
            </form>
        </section>
    </main>
    <footer class="rodape">
        <h3>Direitos reservados a Hoteis XYZ.</h3>
    </footer>

</body>

</html>