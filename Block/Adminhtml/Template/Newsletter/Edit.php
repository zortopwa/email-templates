<?php

namespace Zorto\EmailTemplate\Block\Adminhtml\Template\Newsletter;

use Magento\Backend\Block\Widget;

class Edit extends Widget
{

    /**
     * @var \Magento\Backend\Block\Widget\Button\ButtonList
     */
    protected $buttonList;

    /**
     * @var \Magento\Backend\Block\Widget\Button\ToolbarInterface
     */
    protected $toolbar;

    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Block\Widget\Button\ButtonList $buttonList,
        \Magento\Backend\Block\Widget\Button\ToolbarInterface $toolbar,
        array $data = []
    ) {
        $this->buttonList = $buttonList;
        $this->toolbar = $toolbar;
        parent::__construct($context, $data);
    }

    /**
     * {@inheritdoc}
     */
    public function canRender(\Magento\Backend\Block\Widget\Button\Item $item)
    {
        return !$item->isDeleted();
    }

    /**
     * @return Edit
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
        $this->toolbar->pushButtons($this, $this->buttonList);
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
