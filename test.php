<?php

$tuition_fee = 18000;
$commission = ($tuition_fee > 20000) ? 0.25 * $tuition_fee : 
              (($tuition_fee > 10000) ? 0.20 * $tuition_fee : 
              (($tuition_fee > 7000) ? 0.15 * $tuition_fee : 
              (($tuition_fee >= 0) ? "Invalid Data" : 
              "Invalid Data")));
echo "For a tuition fee of $tuition_fee, the commission is $commission";
