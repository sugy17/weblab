<!doctype html>
<html>
    

<head>
            <title>PHP Calculator</title>
</head>
    

<body>
    <center>
        <form method="post">
            <b style="font-size:25">Sugyan Anand 1cr17cs154</b><br><br>
            <table border="4">
                <caption>CALCULATOR</caption>
                <tr>
                    <th>Value 1:</th>
                    <td><input type="text" name="a" value = "<?php if (isset($_POST["cal"]) && isset($_POST["a"])) echo $_POST['a'];?>"></td>
                </tr>
                <tr>
                    <th>Value 2:</th>
                    <td><input type="text" name="b"  value =  "<?php if (isset($_POST["cal"])&& isset($_POST["b"])) echo $_POST["b"];?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input style="height: 100%;width: 100%;" type="submit" name="cal" value="CALCULATE"></td>
                </tr>
                <?php
                error_reporting(0);
                if (isset($_POST["cal"]) && is_numeric($_POST["a"]) && is_numeric($_POST["b"])) {
                    echo "<tr><th>Addition</th><td>" . ($_POST["a"] + $_POST["b"]) . "</td></tr>";
                    echo "<tr><th>Subtraction</th><td>" . ($_POST["a"] - $_POST["b"]) . "</td></tr>";
                    echo "<tr><th>Multiplication</th><td>" . ($_POST["a"] * $_POST["b"]) . "</td></tr>";
                    echo "<tr><th>Division</th><td>" . ($_POST["a"] / $_POST["b"]) . "</td></tr>";
                } else if (isset($_POST["cal"])) {
                    echo "<tr><th colspan=\"4\">Invalid Input</th></tr>";
                }
                ?>
            </table>
        </form>
    </center>
        
</body>

</html>