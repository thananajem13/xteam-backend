<?php
/* start second ques. */
// using switch
$grade = 99;
switch ($grade) {
    case $grade>80:
        echo 'Excellent';
        break;
    case $grade>65:
        echo 'Very good';
        break;
    case $grade>50:
        echo 'Good';
        break;
                
    default:
        echo 'Failed';
        break;
}
// using if
if($grade>80){
    echo 'Excellent';
}
elseif ($grade>65) {
    echo 'Very good';
}
elseif ($grade>50) {
    echo 'Good';
}
else{
    echo 'Failed';
}
/* end second ques. */

?>