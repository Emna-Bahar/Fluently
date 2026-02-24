<?php

namespace Symfony\Config\Doctrine;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Dbal'.\DIRECTORY_SEPARATOR.'TypeConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Dbal'.\DIRECTORY_SEPARATOR.'ConnectionConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DbalConfig 
{
    private $defaultConnection;
    private $types;
    private $driverSchemes;
    private $connections;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultConnection($value): static
    {
        $this->_usedProperties['defaultConnection'] = true;
        $this->defaultConnection = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @template TValue of string|array
     * @param TValue $value
     * @return \Symfony\Config\Doctrine\Dbal\TypeConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Doctrine\Dbal\TypeConfig : static)
     */
    public function type(string $name, string|array $value = []): \Symfony\Config\Doctrine\Dbal\TypeConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['types'] = true;
            $this->types[$name] = $value;
<<<<<<< HEAD
    
            return $this;
        }
    
=======

            return $this;
        }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (!isset($this->types[$name]) || !$this->types[$name] instanceof \Symfony\Config\Doctrine\Dbal\TypeConfig) {
            $this->_usedProperties['types'] = true;
            $this->types[$name] = new \Symfony\Config\Doctrine\Dbal\TypeConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "type()" has already been initialized. You cannot pass values the second time you call type().');
        }
<<<<<<< HEAD
    
        return $this->types[$name];
    }
    
=======

        return $this->types[$name];
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function driverScheme(string $scheme, mixed $value): static
    {
        $this->_usedProperties['driverSchemes'] = true;
        $this->driverSchemes[$scheme] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @template TValue of mixed
     * @param TValue $value
     * @return \Symfony\Config\Doctrine\Dbal\ConnectionConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Doctrine\Dbal\ConnectionConfig : static)
     */
    public function connection(string $name, mixed $value = []): \Symfony\Config\Doctrine\Dbal\ConnectionConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['connections'] = true;
            $this->connections[$name] = $value;
<<<<<<< HEAD
    
            return $this;
        }
    
=======

            return $this;
        }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (!isset($this->connections[$name]) || !$this->connections[$name] instanceof \Symfony\Config\Doctrine\Dbal\ConnectionConfig) {
            $this->_usedProperties['connections'] = true;
            $this->connections[$name] = new \Symfony\Config\Doctrine\Dbal\ConnectionConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "connection()" has already been initialized. You cannot pass values the second time you call connection().');
        }
<<<<<<< HEAD
    
        return $this->connections[$name];
    }
    
=======

        return $this->connections[$name];
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('default_connection', $value)) {
            $this->_usedProperties['defaultConnection'] = true;
            $this->defaultConnection = $value['default_connection'];
            unset($value['default_connection']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('types', $value)) {
            $this->_usedProperties['types'] = true;
            $this->types = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Doctrine\Dbal\TypeConfig($v) : $v, $value['types']);
            unset($value['types']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('driver_schemes', $value)) {
            $this->_usedProperties['driverSchemes'] = true;
            $this->driverSchemes = $value['driver_schemes'];
            unset($value['driver_schemes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('connections', $value)) {
            $this->_usedProperties['connections'] = true;
            $this->connections = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Doctrine\Dbal\ConnectionConfig($v) : $v, $value['connections']);
            unset($value['connections']);
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
        if (isset($this->_usedProperties['defaultConnection'])) {
            $output['default_connection'] = $this->defaultConnection;
        }
        if (isset($this->_usedProperties['types'])) {
            $output['types'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Doctrine\Dbal\TypeConfig ? $v->toArray() : $v, $this->types);
        }
        if (isset($this->_usedProperties['driverSchemes'])) {
            $output['driver_schemes'] = $this->driverSchemes;
        }
        if (isset($this->_usedProperties['connections'])) {
            $output['connections'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Doctrine\Dbal\ConnectionConfig ? $v->toArray() : $v, $this->connections);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
