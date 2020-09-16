<?php

//A new start FinTech that focus on microfinance, the organization just want to have automate their process on loan disbursement and loan payment.


function LoanDisbursement($loan, 
                $termsOfPayment, 
                $serviceChargeAmount = 500, 
                $interestPercentageRate = 0.05 ){

    //loan payment amount
    $loanToPaymentAmount = $loan + ($loan * $interestPercentageRate);
    $amountToPayBaseOnTerm = $loanToPaymentAmount / $termsOfPayment  ;

    echo "\nThe total amount to pay is $loanToPaymentAmount. \nBased on the Contact your going to pay $amountToPayBaseOnTerm by $termsOfPayment times\n";
}


LoanDisbursement(5000, 6);
LoanDisbursement(10000, 6, 300, 0.2);
LoanDisbursement(15000, 12 , 1000 , 0.07);
?>