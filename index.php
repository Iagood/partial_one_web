<!DOCTYPE html>
<!--<União Metropolitana de Educação e Cultura>
<Bacharelado em Sistemas de Informação>
<Programação Orientada a Objetos II>
<Prof. Pablo Ricardo Roxo Silva>
<Iago da Conceição Barbosa> -->
    <html>
        <head></head>
        <body>
            <center>
                <h4> Média aritmética </h4>
                <form type="submit" method="post" action="regra.php">
                    <label for="nota1">Informe a primeira nota</label>
                    <input type="number" required min="0" max="10" step=".01" maxlength="2" name="nota1">
                    <br>
                    <br>
                    <label for="nota2">Informe a segunda nota</label>
                    <input type="number" required min="0" max="10" maxlength="2" step=".01" name="nota2">
                    <br>
                    <br>
                    <label for="nota3">Informe a terceira nota</label>
                    <input type="number" required min="0" max="10" maxlength="2" step=".01" name="nota3">
                    <br>
                    <br>
                    <button>Calcular média</button>
                </form>
                <hr>
                <h4> Validador de mês </h4>
                <form type="submit" method="post" action="regra.php">
                    <label for="valor_mes">Informe o valor</label>
                    <input type="number" required min="0" max="12" maxlength="2" name="valor_mes">
                    <br>
                    <br>
                    <label for="texto_mes">Informe do texto</label>
                    <input type="text" required name="texto_mes">
                    <br>
                    <br>
                    <button>Validar mês</button>
                </form>
                <hr>
                <h4>Verificar naturais</h4>
                <form type="submit" method="post" action="regra.php">
                <label for="valor1">Informe o primeiro valor </label>
                    <input type="number" required min="0" maxlength="2" name="valor1">
                    <br>
                    <br>
                    <label for="valor2">Informe o segundo valor </label>
                    <input type="number" required min="0" maxlength="2"  name="valor2">
                    <br>
                    <br>
                    <button>Verificar</button>
                </form>
            </center>
        </body>
    </html>