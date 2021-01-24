<b style="font-size: 28;">Sugyan Anand 1cr17cs154<br><br></b>
<?php
    function display($arr){
        foreach ($arr as $i){
            echo "<tr>";
            foreach ($i as $val)
                echo "<td>". $val."</td>"; 
            echo "</tr>";
        }
    }
    $a = [];
    $conn = mysqli_connect("localhost", "root", "", "weblab");
    if ($conn->connect_error)
        die("Connection failed: " . $conn->connect_error);
    $result = $conn->query("SELECT * FROM students");
    if($result->num_rows <= 0)
        $conn->close() && die("SELECTION SORT <br> Table is empty");
    while($row = $result->fetch_assoc())
        array_push($a,$row);
    echo "<table border='2'><caption>SELECTION SORT</caption><tr><th colspan=3>BEFORE SORTING</td></tr>";
    echo "<tr><th>USN</th><th>NAME</th><th>batch</th></tr>";
    display($a);
    $n=count($a);
    for ( $i = 0 ; $i< $n - 1 ; $i++ )
    {
        $pos= $i;
        for ( $j = $i+1 ; $j < $n ; $j++)
            if ( $a[$pos]['usn'] > $a[$j]['usn'])
                $pos = $j;
        $temp = $a[$pos];
        $a[$pos] = $a[$i];
        $a[$i] = $temp;
    }
    echo "<tr><th colspan=3>AFTER SORTING</td></tr>";
    echo "<tr><th>USN</th><th>NAME</th><th>batch</th></tr>";
    display($a);
    echo "</table>";
    $conn->close();
?>