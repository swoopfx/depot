<?php
namespace Support\Form\Factory;

use Laminas\ServiceManager\FactoryInterface;
use Laminas\ServiceManager\ServiceLocatorInterface;
use Support\Form\SupportWYSIWYGForm;

/**
 *
 * @author otaba
 *        
 */
class SupportWYSIWYGformFactory implements FactoryInterface
{

    /**
     */
    public function __construct()
    {
        
        // TODO - Insert your code here
    }

    /**
     * (non-PHPdoc)
     *
     * @see \Laminas\ServiceManager\FactoryInterface::createService()
     *
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        
        $form = new SupportWYSIWYGForm();
        return $form;
    }
}

