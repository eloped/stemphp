<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>STEM Grupo XB</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
<section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">STEMphp</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
      </ul>
      </nav>
    </header>
    <section id="contenedor">
    <section  class="problema">
        <h2>Problema: Cálcular la densidad de la Tierra</h2>
        <p>Descripción:</p>
        <p>El radio de la Tierra es 6 378 km y su masa es 5.97E24 kg. <br>
        a) ¿Cuál es la densidad promedio de la Tierra?<br>
        b) Si el radio de la Tierra se redujera a una tercera parte y su masa no cambiará, cuál serı́a su densidad?<br>
        c) Si el radio de la Tierra y su masa se redujera a una
        tercera parte, ¿su densidad serı́a la misma? ¿por qué?</p>
    </section>
    <section class="formulas">
        <h2>Fórmulas</h2>
        Densidad = Masa/Volumen<br>
        Volumen=(4/3)pi*r*r*r
    </section>
    <section class="datos">
        <h2>Datos:</h2>
        m= 5.97E24 Kg. <br>
        r= 6378 Km.
    </section>
    <section class="calculos">
    <h2>Solución</h2>
        <p>a)La densidad de la Tierra es:<br>volumen= (4/3)*pi*(6378000)*(6378000)*(6378000)<br>
        densidad = 5.97E24 Kg/volumen (m3)
        </p>
        <p>b) r2=(1/3)*r = 6378000/3 =2126000 => vb= (4/3)*pi*(2126000)*(2126000)*(2126000)<br>
        densidad = 5.97E24 Kg/vb (m3)
        </p>
        <p>b) m2=(1/3)*m = 5.97E24/3 = 1.99e24<br>
        densidad = 1.99E24 Kg/vb (m3)
        </p>
    </section>
<?php
     function calcula_densidad(){
        $PI=3.141592;
        $masa= 5.97E24;
        $radio= 6378e3;
        $rb=$radio/3;
        $mc=$masa/3;
        $volumen= (4/3)*$PI*$radio*$radio*$radio;
        $densidad= $masa/$volumen;
        $vb=(4/3)*$PI*$rb*$rb*$rb;
        $densidadb=$masa/$vb;
        $densidadc=$mc/$vb;
        $resultado="<br>a) d= ".$densidad." <br>b) d(1/3)r= ".$densidadb." <br>c) d(1/3)myr= ".$densidadc;
        return $resultado;
     }
?>
    <section class="resultado">
        <h2>Resultado:</h2>
        <div id="resultadoA"></div>
        <?php
        print "<h1> resultado: <br>".calcula_densidad(). " kg/(metro cubico)</h1>";
        ?>
    </section>
    </section>
<footer class="pie">
     Creative Commons versión 4.0 SciSoft 2024
</footer>
</section>
</body>
</html>
