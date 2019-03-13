<?php
function isCorrect($str){
     for($i = 0; $i < strlen($str); $i++){
        switch ($str[$i]) {
            case "(":
                $st .= "(";
                break;
            case "{":
                $st .= "{";
                break;
			      case "[":
                $st .= "[";
                break;
            case ")":
                if ($st[strlen($st) - 1] == "("){
                    $st = substr($st, 0, strlen($st)-1);
                }
                break;
            case "}":
                if ($st[strlen($st) - 1] == "{"){
                    $st = substr($st, 0, strlen($st)-1);
                }
                break;
            case "]":
                if ($st[strlen($st) - 1] == "["){
                    $st = substr($st, 0, strlen($st)-1);
                }
                break;
                default;
        }
    }
    if (strlen($st) == 0){
        echo "true<br>";
    }
    else{
        echo "false<br>";
    }
}

	assert(isCorrect('') === true);
	assert(isCorrect('()') === true);
	assert(isCorrect('{(})[]') === true);
  ?>
