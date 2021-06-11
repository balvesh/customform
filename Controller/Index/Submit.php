<?php
namespace Learning\Customform\Controller\Index;

use Magento\Framework\Controller\ResultFactory; 

class Submit extends \Magento\Framework\App\Action\Action
{
    /**
        * @var \Magento\Framework\View\Result\PageFactory
        */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Learning\Customform\Model\CustomFormFactory $customFormFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->customFormFactory = $customFormFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * 
     */
    public function execute()
    {
        $post = (array) $this->getRequest()->getPost();

        if (!empty($post)) {
            // Save
            $formModel  = $this->customFormFactory->create();
    
            $formModel->setData('name', $post['name']);
            $formModel->setData('email', $post['email']);
            $formModel->setData('created_at', date('Y-m-d h:i:sa'));
            $formModel->save();
    
            // Success
            $this->messageManager->addSuccessMessage('Form Saved !');
            $resultRedirect = $this->resultFactory->create(ResultFactory::TYPE_REDIRECT);
            $resultRedirect->setUrl($this->_redirect->getRefererUrl());
            return $resultRedirect;
        }
        // Render page
        $this->_view->loadLayout();
        $this->_view->renderLayout();
    }
}
