<?php
namespace Learning\Customform\Model\ResourceModel\CustomForm;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{

    /**
     * @var string
     */
    protected $_idFieldName = 'customform_id';

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            \Learning\Customform\Model\CustomForm::class,
            \Learning\Customform\Model\ResourceModel\CustomForm::class
        );
    }
}

