<?php

namespace Zorto\EmailTemplate\Plugin\Newsletter;

use Magento\Newsletter\Block\Adminhtml\Template\Edit;

class BlockEdit{
    public function afterGetForm(Edit $subject, $result)
    {
        return $subject->getLayout()->createBlock(
            \Zorto\EmailTemplate\Block\Adminhtml\Template\NewSletter\Edit\Form::class
        )->toHtml();
    }
}
