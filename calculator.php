<?php
                function sum($x, $y) {
                    return $x + $y;
                }

                function substract($x, $y) {
                    return $x - $y;
                }

                function multiply($x, $y) {
                    return $x * $y;
                }

                function divide($x, $y) {
                    if ($x == 0 or $y == 0) {
                        print "Can't divide by zero!";
                    }
                    else  {
                        return $x / $y;
                    }
                }
                print "Task 2<br>";
                //echo "<br>Please"
                $op = $_GET['op'];
                switch($op) {
                    case "divide":  $opp = "/";
                        break;
                    case "sum" : $opp = "+";
                        break;
                    case "substract" : $opp = "-";
                        break;
                    case "multiply" : $opp = "x";
                        break;
                    default: echo ("Something happens!");
                }
                $x = $_GET['x'];
                $y = $_GET['y'];
                print "$x $opp $y = ";
                echo $op($x, $y);  
            ?>