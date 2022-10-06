<?php
declare(strict_types=1);


use PayPal\EBLBaseComponents\DoExpressCheckoutPaymentResponseDetailsType;
use PayPal\EBLBaseComponents\PaymentInfoType;

final class PayPalUsage
{
    public function usePayPalMethod(): void
    {
        $checkout = new DoExpressCheckoutPaymentResponseDetailsType();
        $checkout->PaymentInfo[] = new PaymentInfoType();
    }
}
