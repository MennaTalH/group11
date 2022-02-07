
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <table width="300px">


        <?php

        for ($raw = 1; $raw <= 8; $raw++) {
            # code...
            echo '<tr>';
            for ($cols = 1; $cols <= 8; $cols++) {
                # code...


                if (($raw + $cols) % 2 == 0) {
                    // white ... 
                    echo '<td  height=35  width=35 bgcolor = #FFFFFF ></td>';
                } else {
                    // black .... 
                    echo '<td  height=35  width=35 bgcolor = #000000 ></td>';
                }
            }

            echo '</tr>';
        }

        ?>


    </table>

</body>

</html>
