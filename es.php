<html>
    <head>
        <title> benzina</title>
    </head>
    <body>
       <?php
        require("include/libreria.php");
        $costo=3;
        $paese=$_GET['paese'];
        $litri=$_GET['litri'];
        $prezzo=prezzo($costo*$litri);
        echo"il prezzo senta sconto e" .$prezzo."<br>";
        $sconto1=sconto($b,$prezzo);
        echo"lo sconto e".$sconto1."<br>";
        $prezzos=$prezzo-$sconto1;
        echo"il prezzo con sconto e" .$prezzos."<br>";
       ?>
    </body>
</html>