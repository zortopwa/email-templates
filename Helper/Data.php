<?php
namespace Zorto\EmailTemplate\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
/**
 * EmailTemplate Data Helper
 *
 */
class Data extends AbstractHelper
{
    public function getEmailTemplateOptions(){
        return [
            'Email_Sales' => [
                ['value' => '', 'label' => ''],
                ['value' => 'new_order_001', 'label' => 'New Order 001'],
                ['value' => 'new_order_002', 'label' => 'New Order 002']
            ]
        ];
    }

    public function getNewsletterTemplateOptions(){
        return [
            'Email_Sales' => [
                ['value' => '', 'label' => ''],
                ['value' => 'new_order_001', 'label' => 'New Order 001'],
                ['value' => 'new_order_002', 'label' => 'New Order 002']
            ]
        ];
    }
}
