<?php

namespace Overdose\ExtraLesson2\Controller\Customer;

use Magento\Framework\Controller\ResultFactory;

class Account extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\Controller\Result\JsonFactory
     */
    protected $resultJsonFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory)
    {
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }
    /**
     * View  page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $data = ['success:' => "true, customer_name: John Doe"];

        return $result->setData($data);
    }
}
