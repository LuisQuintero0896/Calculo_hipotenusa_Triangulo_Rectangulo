<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0,maximum-scale=1.0,minimum-scale=1.0">
        
        <title>Calculo Hipotenusa</title>
    </head>
        <body>
            
            <?php
                if(isset($_POST['btn']) && $_POST['btn'] == 'Calcular'){
                    $cateto_a = $_POST['cateto_a'];
                    $cateto_b = $_POST['cateto_b'];
                    $area = null;

                     if(!empty($cateto_a) or !empty($cateto_b)){
                         echo "<h2 align='center'> CALCULO DE LA HIPOTENUSA DEL TRIANGULO RECTANGULO</h2>";
                         $pitagoras = $cateto_a * $cateto_a + $cateto_b * $cateto_b;
                         $hipotenusa = sqrt($pitagoras);

                         echo "<br> Cateto A:" .$cateto_a;
                         echo "<br> Cateto B:" .$cateto_b;
                         echo "<br/><br/>";
                         echo "<br> El valor de la hipotenusa es: " .$hipotenusa;
                         echo "<br/><br/>";
                         echo "<a href='datos.html'>Regresar</a>";
                     }
                }
            ?>
                
                
        </body>
        </html>