<?php
namespace Learning\Customform\Block;

class Result extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Learning\Customform\Model\CustomFormFactory $customFormFactory,
        array $data = []
    ) {
        $this->customFormFactory = $customFormFactory;
        parent::__construct($context, $data);
    }

    /**
     * @return array
     */
    public function getFormData()
    {
        $formData = $this->customFormFactory->create();
        $collection = $formData->getCollection();
        return $collection;
    }
}
