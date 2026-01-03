<DOCTYPE html>
    <html>
    <head>
        <title>Opdracht4 GET</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        
        <?php include "head.php";?>

            <form action="result.php" method="get">

                <input type="text" name="temp"> 

                <select name="from" id="form">
                    <option value="Fahrenheit">Fahrenheit</option>
                    <option value="Kelvin">Kelvin</option>
                    <option value="Celsius">Celsius</option>
                </select>
                >>
                <select name="to" id="to">
                    <option value="Fahrenheit">Fahrenheit</option>
                    <option value="Kelvin">Kelvin</option>
                    <option value="Celsius">Celsius</option>
                </select><br></br>

                <input type="submit" value="Submit" name="submit">

            </form>

        <?php include "footer.php";?>

    </body>

    </html>