<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset id="ini">
        <label for="ini"> <h1><b>Input Data</b></h1></label>
        <form method="GET" action="data.php">
                <table>
                    <tr>
                        <td><label for="nama">Nama </label></td>
                        <td>:</td>
                        <td><input type="text" name="nama" ></td>
                    </tr>
                    <tr>
                        <td><label for="email">E-Mail </label></td>
                        <td>:</td>
                        <td><input type="email" name="email"></td>
                    </tr>
                </table>
                <p><input type="submit" value="Proses Data" name="submit"></p> 
        </form>
    </fieldset>
</body>
</html>