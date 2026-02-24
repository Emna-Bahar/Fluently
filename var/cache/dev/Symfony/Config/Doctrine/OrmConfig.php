<?php

namespace Symfony\Config\Doctrine;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'ControllerResolverConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Orm'.\DIRECTORY_SEPARATOR.'EntityManagerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class OrmConfig 
{
    private $defaultEntityManager;
    private $autoGenerateProxyClasses;
    private $enableLazyGhostObjects;
    private $enableNativeLazyObjects;
    private $proxyDir;
    private $proxyNamespace;
    private $controllerResolver;
    private $entityManagers;
    private $resolveTargetEntities;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultEntityManager($value): static
    {
        $this->_usedProperties['defaultEntityManager'] = true;
        $this->defaultEntityManager = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Auto generate mode possible values are: "NEVER", "ALWAYS", "FILE_NOT_EXISTS", "EVAL", "FILE_NOT_EXISTS_OR_CHANGED", this option is ignored when the "enable_native_lazy_objects" option is true
     * @default false
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function autoGenerateProxyClasses($value): static
    {
        $this->_usedProperties['autoGenerateProxyClasses'] = true;
        $this->autoGenerateProxyClasses = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Enables the new implementation of proxies based on lazy ghosts instead of using the legacy implementation
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableLazyGhostObjects($value): static
    {
        $this->_usedProperties['enableLazyGhostObjects'] = true;
        $this->enableLazyGhostObjects = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Enables the new native implementation of PHP lazy objects instead of generated proxies
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enableNativeLazyObjects($value): static
    {
        $this->_usedProperties['enableNativeLazyObjects'] = true;
        $this->enableNativeLazyObjects = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Configures the path where generated proxy classes are saved when using non-native lazy objects, this option is ignored when the "enable_native_lazy_objects" option is true
     * @default '%kernel.build_dir%/doctrine/orm/Proxies'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyDir($value): static
    {
        $this->_usedProperties['proxyDir'] = true;
        $this->proxyDir = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Defines the root namespace for generated proxy classes when using non-native lazy objects, this option is ignored when the "enable_native_lazy_objects" option is true
     * @default 'Proxies'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function proxyNamespace($value): static
    {
        $this->_usedProperties['proxyNamespace'] = true;
        $this->proxyNamespace = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default {"enabled":true,"auto_mapping":null,"evict_cache":false}
    */
    public function controllerResolver(array $value = []): \Symfony\Config\Doctrine\Orm\ControllerResolverConfig
    {
        if (null === $this->controllerResolver) {
            $this->_usedProperties['controllerResolver'] = true;
            $this->controllerResolver = new \Symfony\Config\Doctrine\Orm\ControllerResolverConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "controllerResolver()" has already been initialized. You cannot pass values the second time you call controllerResolver().');
        }
<<<<<<< HEAD
    
        return $this->controllerResolver;
    }
    
=======

        return $this->controllerResolver;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function entityManager(string $name, array $value = []): \Symfony\Config\Doctrine\Orm\EntityManagerConfig
    {
        if (!isset($this->entityManagers[$name])) {
            $this->_usedProperties['entityManagers'] = true;
            $this->entityManagers[$name] = new \Symfony\Config\Doctrine\Orm\EntityManagerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "entityManager()" has already been initialized. You cannot pass values the second time you call entityManager().');
        }
<<<<<<< HEAD
    
        return $this->entityManagers[$name];
    }
    
=======

        return $this->entityManagers[$name];
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function resolveTargetEntity(string $interface, mixed $value): static
    {
        $this->_usedProperties['resolveTargetEntities'] = true;
        $this->resolveTargetEntities[$interface] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('default_entity_manager', $value)) {
            $this->_usedProperties['defaultEntityManager'] = true;
            $this->defaultEntityManager = $value['default_entity_manager'];
            unset($value['default_entity_manager']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('auto_generate_proxy_classes', $value)) {
            $this->_usedProperties['autoGenerateProxyClasses'] = true;
            $this->autoGenerateProxyClasses = $value['auto_generate_proxy_classes'];
            unset($value['auto_generate_proxy_classes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('enable_lazy_ghost_objects', $value)) {
            $this->_usedProperties['enableLazyGhostObjects'] = true;
            $this->enableLazyGhostObjects = $value['enable_lazy_ghost_objects'];
            unset($value['enable_lazy_ghost_objects']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('enable_native_lazy_objects', $value)) {
            $this->_usedProperties['enableNativeLazyObjects'] = true;
            $this->enableNativeLazyObjects = $value['enable_native_lazy_objects'];
            unset($value['enable_native_lazy_objects']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('proxy_dir', $value)) {
            $this->_usedProperties['proxyDir'] = true;
            $this->proxyDir = $value['proxy_dir'];
            unset($value['proxy_dir']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('proxy_namespace', $value)) {
            $this->_usedProperties['proxyNamespace'] = true;
            $this->proxyNamespace = $value['proxy_namespace'];
            unset($value['proxy_namespace']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('controller_resolver', $value)) {
            $this->_usedProperties['controllerResolver'] = true;
            $this->controllerResolver = new \Symfony\Config\Doctrine\Orm\ControllerResolverConfig($value['controller_resolver']);
            unset($value['controller_resolver']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('entity_managers', $value)) {
            $this->_usedProperties['entityManagers'] = true;
            $this->entityManagers = array_map(fn ($v) => new \Symfony\Config\Doctrine\Orm\EntityManagerConfig($v), $value['entity_managers']);
            unset($value['entity_managers']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('resolve_target_entities', $value)) {
            $this->_usedProperties['resolveTargetEntities'] = true;
            $this->resolveTargetEntities = $value['resolve_target_entities'];
            unset($value['resolve_target_entities']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if ([] !== $value) {
            throw new InvalidConfigurationException(sprintf('The following keys are not supported by "%s": ', __CLASS__).implode(', ', array_keys($value)));
        }
    }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['defaultEntityManager'])) {
            $output['default_entity_manager'] = $this->defaultEntityManager;
        }
        if (isset($this->_usedProperties['autoGenerateProxyClasses'])) {
            $output['auto_generate_proxy_classes'] = $this->autoGenerateProxyClasses;
        }
        if (isset($this->_usedProperties['enableLazyGhostObjects'])) {
            $output['enable_lazy_ghost_objects'] = $this->enableLazyGhostObjects;
        }
        if (isset($this->_usedProperties['enableNativeLazyObjects'])) {
            $output['enable_native_lazy_objects'] = $this->enableNativeLazyObjects;
        }
        if (isset($this->_usedProperties['proxyDir'])) {
            $output['proxy_dir'] = $this->proxyDir;
        }
        if (isset($this->_usedProperties['proxyNamespace'])) {
            $output['proxy_namespace'] = $this->proxyNamespace;
        }
        if (isset($this->_usedProperties['controllerResolver'])) {
            $output['controller_resolver'] = $this->controllerResolver->toArray();
        }
        if (isset($this->_usedProperties['entityManagers'])) {
            $output['entity_managers'] = array_map(fn ($v) => $v->toArray(), $this->entityManagers);
        }
        if (isset($this->_usedProperties['resolveTargetEntities'])) {
            $output['resolve_target_entities'] = $this->resolveTargetEntities;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
