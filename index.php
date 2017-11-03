<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <?php
        //0 1 2 3 5 8 13 21 34 55 89
            $nummerFibonacci = 0;
            $nummerOptel = 1;
            $nummerResultaat = 0;
            do{
                print "${nummerResultaat} => ";                
                $nummerResultaat = $nummerFibonacci + $nummerOptel;
                $nummerFibonacci = $nummerOptel;
                $nummerOptel = $nummerResultaat;
            }while ($nummerResultaat < 100);

        ?>
    </body>
</html>