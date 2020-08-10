<?php
namespace Zorto\EmailTemplate\Block\Adminhtml\Template;

use Magento\Email\Block\Adminhtml\Template\Edit as OriginEdit;

class Edit extends OriginEdit
{

    /**
     * Template file
     *
     * @var string
     */
    protected $_template = 'Zorto_EmailTemplate::template/edit.phtml';

    /**
     * Prepare layout
     *
     * @return $this
     * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
     */
    protected function _prepareLayout()
    {
        $this->buttonList->add(
            'load_cloud',
            [
                'label' => __('Load Cloud Template'),
                'data_attribute' => [
                    'role' => 'cloud-template-load',
                ],
                'type' => 'button',
                'class' => 'save'
            ],
            0,
            0,
            null
        );
        return parent::_prepareLayout();
    }

    /**
     * Get the html element for load button load cloud
     *
     * @return string
     */
    public function getButtonLoadCloudHtml()
    {
        return $this->getChildHtml('load_cloud_button');
    }
}
