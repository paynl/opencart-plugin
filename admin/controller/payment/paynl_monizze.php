<?php

$dir = dirname(dirname(dirname(dirname(__FILE__))));
$autoload = $dir . '/Pay/Autoload.php';

require_once $autoload;

class ControllerPaymentPaynlMonizze extends Pay_Controller_Admin
{
    protected $_paymentOptionId = 3027;
    protected $_paymentMethodName = 'paynl_monizze';
    protected $_defaultLabel = 'Monizze';
}