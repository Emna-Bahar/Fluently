<?php

namespace Symfony\Config\Doctrine\Orm\EntityManagerConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'EntityListeners'.\DIRECTORY_SEPARATOR.'EntityConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class EntityListenersConfig 
{
    private $entities;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function entity(string $class, array $value = []): \Symfony\Config\Doctrine\Orm\EntityManagerConfig\EntityListeners\EntityConfig
    {
        if (!isset($this->entities[$class])) {
            $this->_usedProperties['entities'] = true;
            $this->entities[$class] = new \Symfony\Config\Doctrine\Orm\EntityManagerConfig\EntityListeners\EntityConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "entity()" has already been initialized. You cannot pass values the second time you call entity().');
        }
<<<<<<< HEAD
    
        return $this->entities[$class];
    }
    
=======

        return $this->entities[$class];
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('entities', $value)) {
            $this->_usedProperties['entities'] = true;
            $this->entities = array_map(fn ($v) => new \Symfony\Config\Doctrine\Orm\EntityManagerConfig\EntityListeners\EntityConfig($v), $value['entities']);
            unset($value['entities']);
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
        if (isset($this->_usedProperties['entities'])) {
            $output['entities'] = array_map(fn ($v) => $v->toArray(), $this->entities);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
