Задача №1<br>
<?php
    $a=5;
    $b=10;
    function calculateSum($a, $b) {
        $result = $a + $b;
        return $result;
	    }
	    echo calculateSum($a, $b);
        ?><br>

Задача №2<br>
<?php
    $myName = "Евгений";
        function calculateLength($myName) {
        $result=strlen($myName);
        return $result;
        }
        echo calculateLength($myName);
        ?><br>

Задача №3<br>
<?php
    $numbers = [2,4,6,7,10,12,14,16];
        function calculateAverage($numbers) {
		$result = array_sum($numbers)/count($numbers);
		return $result;
    	}
        echo calculateAverage($numbers);
        ?><br>

Задача №4 <br>
<?php
    $numbers = [5,12];
    function calculateLargest($numbers) {
        $result = max($numbers);
        return $result;
	    }
	    echo calculateLargest($numbers);
        ?><br>

Задача №5 <br>
<?php
     $txt1='Чем дальше';
     $txt2='тем интереснее';
     function concatenatStrings($txt1,$txt2) {
        $result = $txt1.','.$txt2;
        return $result;
        }
        echo concatenatStrings($txt1,$txt2);
        ?><br>

Задача №6 <br>
<?php
     $txt='Это было не сложно';
     function executeСapsluk($txt) {
        $result = mb_strtoupper($txt);
        return $result;
        }
        echo executeСapsluk($txt);
        ?><br>

Задача №7 <br>
<?php
    $str = 'Эти задачки очень интересные';
    $str2 ='очень';
    function findSubstring($str, $str2){
	    $result = strpos($str, $str2);
	    return $result;
        }
        echo findSubstring($str, $str2);
        ?><br>

Задача №8 <br>
<?php
    $a=15;
    $b=85;
    function calculate($a, $b) {
        $result = ($a + $b)/2;
        return $result;
	    }
	    echo calculate($a, $b);
        ?><br>

Задача №9 <br>
<?php
    $a=9;
    function calculateRoot($a) {
        $result = sqrt($a);
        return $result;
	    }
	    echo calculateRoot($a);
    ?><br>