<?php
namespace DoctrineMongoODMModuleTest;

use Laminas\Mvc\Application;
use Laminas\Mvc\Service\ServiceManagerConfig;
use Laminas\ServiceManager\ServiceManager;

/**
 * Utility used to retrieve a freshly bootstrapped application's service manager
 *
 * @license MIT
 * @link    http://www.doctrine-project.org/
 * @author  Adam Homsi <adam.homsi@gmail.com>
 */
class ServiceManagerFactory
{
    /**
     * @return array
     */
    public static function getConfiguration()
    {
        $r = new \ReflectionClass(Application::class);
        $requiredParams = $r->getConstructor()->getNumberOfRequiredParameters();

        $configFile = $requiredParams == 1 ? 'TestConfigurationV3.php' : 'TestConfigurationV2.php';

        return include __DIR__ . '/../' . $configFile;
    }

    /**
     * Builds a new service manager
     *
     * @param  array|null     $configuration
     * @return ServiceManager
     */
    public static function getServiceManager(array $configuration = null)
    {
        $configuration        = $configuration ?: static::getConfiguration();
        $serviceManager       = new ServiceManager();
        $serviceManagerConfig = new ServiceManagerConfig(
            isset($configuration['service_manager']) ? $configuration['service_manager'] : []
        );
        $serviceManagerConfig->configureServiceManager($serviceManager);
        $serviceManager->setService('ApplicationConfig', $configuration);

        /** @var $moduleManager \Laminas\ModuleManager\ModuleManager */
        $moduleManager = $serviceManager->get('ModuleManager');
        $moduleManager->loadModules();

        return $serviceManager;
    }
}
