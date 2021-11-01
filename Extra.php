
<!DOCTYPE HTML>
<html>  
<body>

<form action="index.php" method="post">
<h1>Valor do saque: </h1><input type="number" name="saque"><br>
<input type="submit" value="Sacar">

</form>

</body>
</html>
<?php
$saque = intval($_POST['saque']);
$vAux = $saque; 
$nota100 = 0;
$nota50 = 0;
$nota10 = 0;
$nota5 = 0;
$nota2 = 0;
$nota1 = 0;
$resto = 0;

if($saque != 0)
{
        
        if($vAux >= 100){
            $nota100=intval($vAux/100);
            $resto = $vAux % 100;
            $vAux = $resto;
            if($vAux >= 50){
                $nota50=intval($vAux/50);
                $resto = $vAux % 50;
            }
            $vAux = $resto;
            if($vAux >= 10){
                $nota10=intval($vAux/10);
                $resto = $vAux % 10;
            }
            $vAux = $resto;
            if($vAux >= 5){
                $nota5=intval($vAux/5);
                $resto = $vAux % 5;
            }
            $vAux = $resto;
            if($vAux >= 2){
                $nota2=intval($vAux/2);
                $resto = $vAux % 2;
            }
            $vAux = $resto;
            if($vAux >= 1){
                $nota1=intval($vAux/1);
                $resto = $vAux % 1;
            }
            $vAux = $resto;
        }

        if($vAux >= 50){
            $nota50=intval($vAux/50);
            $resto = $vAux % 50;

            $vAux = $resto;
            if($vAux >= 10){
                $nota10=intval($vAux/10);
                $resto = $vAux % 10;
            }
            $vAux = $resto;
            if($vAux >= 5){
                $nota5=intval($vAux/5);
                $resto = $vAux % 5;
            }
            $vAux = $resto;
            if($vAux >= 2){
                $nota2=intval($vAux/2);
                $resto = $vAux % 2;
            }
            $vAux = $resto;
            if($vAux >= 1){
                $nota1=intval($vAux/1);
                $resto = $vAux % 1;
            }
            $vAux = $resto;
        }

        if($vAux >= 10){
            $nota10=intval($vAux/10);
            $resto = $vAux % 10;
            $vAux = $resto;
            if($vAux >= 5){
                $nota5=intval($vAux/5);
                $resto = $vAux % 5;
            }
            $vAux = $resto;
            if($vAux >= 2){
                $nota2=intval($vAux/2);
                $resto = $vAux % 2;
            }
            $vAux = $resto;
            if($vAux >= 1){
                $nota1=intval($vAux/1);
                $resto = $vAux % 1;
            }
        }

            if($vAux >= 5){
                $nota5=intval($vAux/5);
                $resto = $vAux % 5;
                $vAux = $resto;
                if($vAux >= 2){
                    $nota2=intval($vAux/2);
                    $resto = $vAux % 2;
                }
                $vAux = $resto;
                if($vAux >= 1){
                    $nota1=intval($vAux/1);
                    $resto = $vAux % 1;
                }
            }

            if($vAux >= 2){
                $nota2=intval($vAux/2);
                $resto = $vAux % 2;
                $vAux = $resto;
                if($vAux >= 1){
                    $nota1=intval($vAux/1);
                    $resto = $vAux % 1;
                }
            }

            if($vAux >= 1){
                $nota1=intval($vAux/1);
                $resto = $vAux % 1;
            }

}

$qtdnota = intval($nota100)+intval($nota50)+intval($nota10)+intval($nota5)+intval($nota2)+intval($nota1);
echo("<h3>*Cédulas Disponíveis (R$): 100, 50, 10, 5, 2, 1.</br></br>");

echo("<h3>Valor do saque: ".$saque."</br></br>");

echo("Quantidade de Cédulas: ".$qtdnota."</br></br>");
echo("Distribuição de Cédulas: </br>");
echo($nota100." Cédula(s) de  R$ 100 </br>");
echo($nota50." Cédula(s) de  R$ 50 </br>");
echo($nota10." Cédula(s) de  R$ 10 </br>");
echo($nota5." Cédula(s) de  R$ 5 </br>");
echo($nota2." Cédula(s) de  R$ 2 </br>");
echo($nota1." Cédula(s) de  R$ 1 </br></h3>");


