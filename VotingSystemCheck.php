<?php
//Program to check Voting validations

$age = 18;
$hasPVC = 1; 
$ward = 020;

//check validations
if ( $age < 18 ) { //check voter is greater than or equal to 18
    echo "Voter is not up to 18 years yet!";
}else if ($hasPVC != 1) { //check voter has PVC
    echo "Voter does not have a PVC";
} elseif ($ward != 020) { //check voter is in ward 020
    echo "Voter is not in ward 020";
} else {
    echo "Hurray! Voter can proceed to vote."; //if all conditions are met, voter can vote
}
?>