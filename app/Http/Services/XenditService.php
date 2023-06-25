<?php 

namespace App\Http\Services;

use Xendit\Balance;
use Xendit\Xendit;
use Xendit\PaymentChannels;

class XenditService {

    private static function start() {
        Xendit::setApiKey(env("XENDIT_API_KEY"));
    }

    /**
     * Saldo Anda mewakili uang di akun cash Xendit dan Holding Anda.
     * @return string
     */
    public static function getBalance() {
        XenditService::start();
        return Balance::getBalance("CASH", [
            "currency" => "IDR"
        ]);
    }

    public static function getPayment() {
        XenditService::start();
        return PaymentChannels::list();
    }
}