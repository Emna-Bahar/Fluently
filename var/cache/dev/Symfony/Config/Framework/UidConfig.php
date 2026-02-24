<?php

namespace Symfony\Config\Framework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class UidConfig 
{
    private $enabled;
    private $defaultUuidVersion;
    private $nameBasedUuidVersion;
    private $nameBasedUuidNamespace;
    private $timeBasedUuidVersion;
    private $timeBasedUuidNode;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function enabled($value): static
    {
        $this->_usedProperties['enabled'] = true;
        $this->enabled = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|7|6|4|1 $value
     * @return $this
     */
    public function defaultUuidVersion($value): static
    {
        $this->_usedProperties['defaultUuidVersion'] = true;
        $this->defaultUuidVersion = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 5
     * @param ParamConfigurator|5|3 $value
     * @return $this
     */
    public function nameBasedUuidVersion($value): static
    {
        $this->_usedProperties['nameBasedUuidVersion'] = true;
        $this->nameBasedUuidVersion = $value;
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
    public function nameBasedUuidNamespace($value): static
    {
        $this->_usedProperties['nameBasedUuidNamespace'] = true;
        $this->nameBasedUuidNamespace = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|7|6|1 $value
     * @return $this
     */
    public function timeBasedUuidVersion($value): static
    {
        $this->_usedProperties['timeBasedUuidVersion'] = true;
        $this->timeBasedUuidVersion = $value;
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
    public function timeBasedUuidNode($value): static
    {
        $this->_usedProperties['timeBasedUuidNode'] = true;
        $this->timeBasedUuidNode = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('enabled', $value)) {
            $this->_usedProperties['enabled'] = true;
            $this->enabled = $value['enabled'];
            unset($value['enabled']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('default_uuid_version', $value)) {
            $this->_usedProperties['defaultUuidVersion'] = true;
            $this->defaultUuidVersion = $value['default_uuid_version'];
            unset($value['default_uuid_version']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('name_based_uuid_version', $value)) {
            $this->_usedProperties['nameBasedUuidVersion'] = true;
            $this->nameBasedUuidVersion = $value['name_based_uuid_version'];
            unset($value['name_based_uuid_version']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('name_based_uuid_namespace', $value)) {
            $this->_usedProperties['nameBasedUuidNamespace'] = true;
            $this->nameBasedUuidNamespace = $value['name_based_uuid_namespace'];
            unset($value['name_based_uuid_namespace']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('time_based_uuid_version', $value)) {
            $this->_usedProperties['timeBasedUuidVersion'] = true;
            $this->timeBasedUuidVersion = $value['time_based_uuid_version'];
            unset($value['time_based_uuid_version']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('time_based_uuid_node', $value)) {
            $this->_usedProperties['timeBasedUuidNode'] = true;
            $this->timeBasedUuidNode = $value['time_based_uuid_node'];
            unset($value['time_based_uuid_node']);
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
        if (isset($this->_usedProperties['enabled'])) {
            $output['enabled'] = $this->enabled;
        }
        if (isset($this->_usedProperties['defaultUuidVersion'])) {
            $output['default_uuid_version'] = $this->defaultUuidVersion;
        }
        if (isset($this->_usedProperties['nameBasedUuidVersion'])) {
            $output['name_based_uuid_version'] = $this->nameBasedUuidVersion;
        }
        if (isset($this->_usedProperties['nameBasedUuidNamespace'])) {
            $output['name_based_uuid_namespace'] = $this->nameBasedUuidNamespace;
        }
        if (isset($this->_usedProperties['timeBasedUuidVersion'])) {
            $output['time_based_uuid_version'] = $this->timeBasedUuidVersion;
        }
        if (isset($this->_usedProperties['timeBasedUuidNode'])) {
            $output['time_based_uuid_node'] = $this->timeBasedUuidNode;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
