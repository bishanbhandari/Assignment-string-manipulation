<?php
$spell="   AbRaCAdABRa   ";
$trimmer=trim($spell);
$lower=strtolower($trimmer);
if($lower=="abracadabra")
{
    
    echo" spell is correct";
}
else{
    echo" wizarding world is still at risk!";
}
?>