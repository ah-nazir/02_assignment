<?php

$tuition_fee = 1700;
$commission = ($tuition_fee > 20000) ? 0.25 * $tuition_fee : 
              (($tuition_fee > 10000) ? 0.20 * $tuition_fee : 
              (($tuition_fee > 7000) ? 0.15 * $tuition_fee :"Invalid"
              ));
echo "For a tuition fee of $tuition_fee, the commission is $commission";
