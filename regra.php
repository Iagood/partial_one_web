
<?php
/*<União Metropolitana de Educação e Cultura>
*<Bacharelado em Sistemas de Informação>
*<Programação Orientada a Objetos II>
*<Prof. Pablo Ricardo Roxo Silva>
*<Iago da Conceição Barbosa>
*/
if(isset($_POST['nota1'])) {

    return logicaMediaAritmetica();

} elseif (isset($_POST['valor_mes'])) {

    return validarMes();
}
else {
    return verificarInteiros();
}

/////// LÓGICA PARA MÉDIA ARITMÉTICA //////
function logicaMediaAritmetica()
{
    $nota1 = $_POST['nota1'];
    $nota2 = $_POST['nota2'];
    $nota3 = $_POST['nota3'];

    $media = ($nota1 +$nota2 + $nota3) / 3;
    $media_formatada =  number_format($media, 2, ',', ' ');
    echo "A média obtida pela notas foi: " . $media_formatada . "<br>";

    if($media_formatada >= 7) {
        echo "O aluno foi aprovado!";
    }
    else if ($media_formatada < 7 && $media_formatada >= 4) {
        echo "O aluno está em recuperação! <br>";
    }
    else {
        echo "O aluno está reprovado! <br>";
    }
    echo '<br> <a href="index.php"> Voltar </a>';
}

///////// LÓGICA PARA VALIDAR MÊS ////////
function validarMes()
{
    $valorMes = $_POST['valor_mes'];
    $textoMes = strtoupper($_POST['texto_mes']);
    $mesCorreto = 'Mês incorreto!';
    $arrayMes = [
    1 => 'Janeiro',
    2 => 'Fevereiro',
    3 => 'Março',
    4 =>'Abril',
    5 =>'Maio',
    6 =>'Junho',
    7 =>'Julho',
    8 => 'Agosto',
    9 => 'Setembro',
    10 => 'Outubro',
    11 => 'Novembro',
    12 => 'Dezembro'
    ];

    foreach($arrayMes as $key => $mes) {
        if($key == $valorMes && strtoupper($mes) == $textoMes)
            $mesCorreto = 'Mês correto!';
    }
    echo $mesCorreto;
    echo '<br> <a href="index.php"> Voltar </a>';
}

/////// LÓGICA PARA VERIFICAR INTEIROS E DIVISÍVEIS PELO PRIMEIRO PARÂMETRO /////////
function verificarInteiros()
{
    $valor1 = $_POST['valor1'];
    $valor2 = $_POST['valor2'];


    for ($i = 1; $i <= $valor1 ; $i ++) {
        if ($i % $valor2 == 0) {
            echo $i . " - ";
        }
    }

    echo '<br> <a href="index.php"> Voltar </a>';
}

?>