Sugyan Anand 1cr17cs154<br><br>
<?php
    function displayMatrix($name,$mat,$r,$c){
        echo "Matrix $name is:<br><table>";
        for($i = 0;$i < $r;$i++){
            echo "<tr>";
            for($j = 0;$j < $c ; $j++)
                echo '<td style="text-align:center;">'.$mat[$i][$j]."</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
    $a = [[1,2,3],[4,5,6],[7,8,9]];
    $b = [[7,8,9],[4,5,6],[1,2,3]];
    $r1 =count($a);
    $c1 =count($a[0]);
    $r2 =count($b);
    $c2 =count($b[0]);
    
    displayMatrix("A",$a,$r1,$c1);
    displayMatrix("B",$b,$r2,$c2);
    
    for($i = 0;$i < $c1;$i++)
        for($j = 0;$j < $r1 ; $j++)
            $transA[$i][$j] = $a[$j][$i];
    displayMatrix("Transpose of A",$transA,$r1,$c1);

    if($r1==$r2 && $c1==$c2){
        for($i = 0;$i < $r1;$i++)
            for($j = 0;$j < $c1 ; $j++)
                $add[$i][$j] = $a[$i][$j]+$b[$i][$j];
        displayMatrix("A+B",$add,$r1,$c1);
    }
    else  echo "Cannot perform A+B<br><br>";

    if($c1!=$r2){
        for($i = 0;$i < $r1;$i++)
            for($j = 0,$mul[$i][$j]=0;$j < $c2 ; $j++,$mul[$i][$j]=0)
                for($k = 0;$k < $r2 ; $k++)
                    $mul[$i][$j]+=$a[$i][$k]*$b[$k][$j];
        displayMatrix("A*B",$mul,$r1,$c2);
    }
    else  echo "Cannot perform A*B<br><br>";
    
?>
    