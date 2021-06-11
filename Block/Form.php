<?php
namespace Learning\Customform\Block;

class Form extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getFormAction()
    {
        return $this->getUrl('customform/index/submit', ['_secure' => true]);
    }
}
