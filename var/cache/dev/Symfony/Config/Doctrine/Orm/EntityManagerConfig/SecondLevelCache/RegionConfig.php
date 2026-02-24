<?php

namespace Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache;

require_once __DIR__.\DIRECTORY_SEPARATOR.'RegionConfig'.\DIRECTORY_SEPARATOR.'CacheDriverConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class RegionConfig 
{
    private $cacheDriver;
    private $lockPath;
    private $lockLifetime;
    private $type;
    private $lifetime;
    private $service;
    private $name;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @template TValue of string|array
     * @param TValue $value
     * @default {"type":null}
     * @return \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig : static)
     */
    public function cacheDriver(string|array $value = []): \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['cacheDriver'] = true;
            $this->cacheDriver = $value;
<<<<<<< HEAD
    
            return $this;
        }
    
=======

            return $this;
        }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (!$this->cacheDriver instanceof \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig) {
            $this->_usedProperties['cacheDriver'] = true;
            $this->cacheDriver = new \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "cacheDriver()" has already been initialized. You cannot pass values the second time you call cacheDriver().');
        }
<<<<<<< HEAD
    
        return $this->cacheDriver;
    }
    
=======

        return $this->cacheDriver;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default '%kernel.cache_dir%/doctrine/orm/slc/filelock'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lockPath($value): static
    {
        $this->_usedProperties['lockPath'] = true;
        $this->lockPath = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 60
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lockLifetime($value): static
    {
        $this->_usedProperties['lockLifetime'] = true;
        $this->lockLifetime = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function type($value): static
    {
        $this->_usedProperties['type'] = true;
        $this->type = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 0
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function lifetime($value): static
    {
        $this->_usedProperties['lifetime'] = true;
        $this->lifetime = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function name($value): static
    {
        $this->_usedProperties['name'] = true;
        $this->name = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('cache_driver', $value)) {
            $this->_usedProperties['cacheDriver'] = true;
            $this->cacheDriver = \is_array($value['cache_driver']) ? new \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig($value['cache_driver']) : $value['cache_driver'];
            unset($value['cache_driver']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('lock_path', $value)) {
            $this->_usedProperties['lockPath'] = true;
            $this->lockPath = $value['lock_path'];
            unset($value['lock_path']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('lock_lifetime', $value)) {
            $this->_usedProperties['lockLifetime'] = true;
            $this->lockLifetime = $value['lock_lifetime'];
            unset($value['lock_lifetime']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('type', $value)) {
            $this->_usedProperties['type'] = true;
            $this->type = $value['type'];
            unset($value['type']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('lifetime', $value)) {
            $this->_usedProperties['lifetime'] = true;
            $this->lifetime = $value['lifetime'];
            unset($value['lifetime']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('name', $value)) {
            $this->_usedProperties['name'] = true;
            $this->name = $value['name'];
            unset($value['name']);
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
        if (isset($this->_usedProperties['cacheDriver'])) {
            $output['cache_driver'] = $this->cacheDriver instanceof \Symfony\Config\Doctrine\Orm\EntityManagerConfig\SecondLevelCache\RegionConfig\CacheDriverConfig ? $this->cacheDriver->toArray() : $this->cacheDriver;
        }
        if (isset($this->_usedProperties['lockPath'])) {
            $output['lock_path'] = $this->lockPath;
        }
        if (isset($this->_usedProperties['lockLifetime'])) {
            $output['lock_lifetime'] = $this->lockLifetime;
        }
        if (isset($this->_usedProperties['type'])) {
            $output['type'] = $this->type;
        }
        if (isset($this->_usedProperties['lifetime'])) {
            $output['lifetime'] = $this->lifetime;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['name'])) {
            $output['name'] = $this->name;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
