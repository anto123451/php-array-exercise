<html>
    <head>
        <title>settiaman</title>
    </head>
    <body>
        <?php
        require("lib.php");

        $settimana=array('lunedi', 'mertedi', 'mercoledi', 'giovedi', 'venerdi', 'sabato', 'domenica');
        print_r($settimana);



        crea($settimana, $quota);
        print_r($quota);
        echo("<br>");

        $x=mediaa($quota);
        echo("la media è ");
        echo intval("$x");  // intval per arrotondare ma solo a schermo
        echo("<br>");

        $y=mag($quota);
        echo"il giorno con la quota più alta è : ".$settimana[$y] . "<br>";

        supera($quota, $settimana, $z);
        print_r($z);


        



















?>
    </body>
</html>