<?php
    //pgm-9
    $states = "Missippi Alabama Texas Massachusetts Kansas";
    $statesArray =  explode(" ",$states);
    echo "<b>Sugyan Anand 1cr17cs154<br><br>Original Array</b><br>";
    foreach($statesArray as $key => $value)
        echo "statesArray[$key] = $value<br>";
    foreach($statesArray as $key => $value){
        if(preg_match("/.*xas$/",$value))
            $statesList[0] = $value;
        elseif(preg_match("/^k.*s$/i",$value))
            $statesList[1] = $value;
        elseif(preg_match("/^M.*s$/",$value))
            $statesList[2] = $value;
        elseif(preg_match("/.*a$/",$value))
            $statesList[3] = $value;
    }
    echo "<b>Resultant array is:</b><br>";
    for($key=0;$key<4;$key++)
        echo "statesList[$key] = $statesList[$key]<br>";
?>