<?php

    //------------------------Logical Statement---------------------------//

    //-------------------------- Question #2 ---------------------------//

    // 2- Write php script to make a calculator
    // Operations:
    // ● Addition
    // ● Subtraction
    // ● Multiplication
    // ● Division


    {
        function Cal($n1,$o,$n2)
        {
            switch($o)
                {
                    case '+':
                        echo "$n1 $o $n2 =".($n1 + $n2);
                        break;
                    case '-':
                        echo "$n1 $o $n2 =".($n1 - $n2);
                        break;
                    case '*':
                        echo "$n1 $o $n2 =".($n1 * $n2);
                        break;
                    case '/':
                        echo "$n1 $o $n2 =".($n1 / $n2);
                        break;
                    case '%':
                        echo "$n1 $o $n2 =".($n1 % $n2);
                        break;
                    default:
                        echo "Something wrong on operation";

                }
            echo "<br>";
        }

        //--------Case #1------>
            Cal(34,"-",12);
        //--------Case #1------>
            Cal(34,"+",12);
        //--------Case #1------>
            Cal(34,"*",12);
        //--------Case #1------>
            Cal(34,"/",12);
        //--------Case #1------>
            Cal(34,"%",12);
    }

    echo "<br><br><br>";
    //-------------------------- Question #2 ---------------------------//


//     3-Write php script to check if a person is eligible to vote
// Rule
// ● Minimum age required for voting is 18.
// ● You can use PHP Functions.
// ● You can use Decision Making Statements.


{
    function check($name,$age) //function has been declared
        {
    
            if ($age >= 18) {
                echo $name . ", you Are <b>ELIGIBLE</b> For Vote";
            } else {
                echo $name . ", you are <b>NOT ELIGIBLE</b> for vote. ";
            }
            echo "<br>";
        }


    //--------Case #1------>
        check("Suheib",19);

    //--------Case #2------>
        check("Ahmad",17);

    //--------Case #3------>
        check("Waleed",10);
}




echo "<br><br><br>";
//-------------------------- Question #3 ---------------------------//


// 4-Write php script to check whether a number is positive,
// negative or zero
// Rule
// ● You can use if else conditions.
// ● You should use appropriate PHP Operators.
// ● Also check if it is not a numeric value.

{
    function Weather($temp)
    {

       
        if ($temp > 0) 
        {
            echo $temp . " Positive number";
        } else if ($temp < 0) 
        {
            echo $temp . " Negative number ";
        } else if ($temp == 0) 
        {
            echo "zero";
        }
     echo "<br>";   
    }

    //--------Case #1------>
        Weather(19);

    //--------Case #2------>
        Weather(-17);

    //--------Case #3------>
        Weather(0);

}

?>