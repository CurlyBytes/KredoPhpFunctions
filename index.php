<?php

//A new start FinTech that focus on microfinance, the organization just want to have automate their process on loan disbursement and loan payment.
$loan = 5000;
$serviceChargeAmount = 500;
$interestPercentageRate = 0.05;
$termsOfPayment = 6;

//loan payment amount
$loanToPaymentAmount = ($loan + ($loan * $interestPercentageRate));
$amountToPayBaseOnTerm = $loanToPaymentAmount / $termsOfPayment  ;

echo "The total amount to pay is $loanToPaymentAmount. \nBased on the Contact your going to pay $amountToPayBaseOnTerm by $termsOfPayment times";
?>