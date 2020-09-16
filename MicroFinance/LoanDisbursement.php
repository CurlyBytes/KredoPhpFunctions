
<?php
function LoanDisbursement($loan, 
                $termsOfPayment, 
                $serviceChargeAmount = 500, 
                $interestPercentageRate = 0.05 ){



    if($termsOfPayment <= 0) {

        echo "Loan is not applicable, please supply Number of Terms. \n";
    }
    else{
        //loan payment amount
        $loanToPaymentAmount = $loan + ($loan * $interestPercentageRate);
        $amountToPayBaseOnTerm = $loanToPaymentAmount / $termsOfPayment ;

        echo "\nThe total amount to pay is $loanToPaymentAmount. \nBased on the Contact your going to pay $amountToPayBaseOnTerm by $termsOfPayment times\n";

    }

}
