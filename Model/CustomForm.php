<?php
namespace Learning\Customform\Model;

class CustomForm extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'learning_customform_customform';

    protected function _construct()
	{
		$this->_init('Learning\Customform\Model\ResourceModel\CustomForm');
	}

}

