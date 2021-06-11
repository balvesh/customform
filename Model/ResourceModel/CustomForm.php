<?php
namespace Learning\Customform\Model\ResourceModel;

class CustomForm extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('learning_customform_customform', 'customform_id');
    }
}

