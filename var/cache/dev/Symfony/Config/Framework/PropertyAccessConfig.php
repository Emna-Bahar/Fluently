<?php

namespace Symfony\Config\Framework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PropertyAccessConfig 
{
    private $enabled;
    private $magicCall;
    private $magicGet;
    private $magicSet;
    private $throwExceptionOnInvalidIndex;
    private $throwExceptionOnInvalidPropertyPath;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default true
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
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function magicCall($value): static
    {
        $this->_usedProperties['magicCall'] = true;
        $this->magicCall = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function magicGet($value): static
    {
        $this->_usedProperties['magicGet'] = true;
        $this->magicGet = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function magicSet($value): static
    {
        $this->_usedProperties['magicSet'] = true;
        $this->magicSet = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function throwExceptionOnInvalidIndex($value): static
    {
        $this->_usedProperties['throwExceptionOnInvalidIndex'] = true;
        $this->throwExceptionOnInvalidIndex = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function throwExceptionOnInvalidPropertyPath($value): static
    {
        $this->_usedProperties['throwExceptionOnInvalidPropertyPath'] = true;
        $this->throwExceptionOnInvalidPropertyPath = $value;
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
        if (array_key_exists('magic_call', $value)) {
            $this->_usedProperties['magicCall'] = true;
            $this->magicCall = $value['magic_call'];
            unset($value['magic_call']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('magic_get', $value)) {
            $this->_usedProperties['magicGet'] = true;
            $this->magicGet = $value['magic_get'];
            unset($value['magic_get']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('magic_set', $value)) {
            $this->_usedProperties['magicSet'] = true;
            $this->magicSet = $value['magic_set'];
            unset($value['magic_set']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('throw_exception_on_invalid_index', $value)) {
            $this->_usedProperties['throwExceptionOnInvalidIndex'] = true;
            $this->throwExceptionOnInvalidIndex = $value['throw_exception_on_invalid_index'];
            unset($value['throw_exception_on_invalid_index']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('throw_exception_on_invalid_property_path', $value)) {
            $this->_usedProperties['throwExceptionOnInvalidPropertyPath'] = true;
            $this->throwExceptionOnInvalidPropertyPath = $value['throw_exception_on_invalid_property_path'];
            unset($value['throw_exception_on_invalid_property_path']);
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
        if (isset($this->_usedProperties['magicCall'])) {
            $output['magic_call'] = $this->magicCall;
        }
        if (isset($this->_usedProperties['magicGet'])) {
            $output['magic_get'] = $this->magicGet;
        }
        if (isset($this->_usedProperties['magicSet'])) {
            $output['magic_set'] = $this->magicSet;
        }
        if (isset($this->_usedProperties['throwExceptionOnInvalidIndex'])) {
            $output['throw_exception_on_invalid_index'] = $this->throwExceptionOnInvalidIndex;
        }
        if (isset($this->_usedProperties['throwExceptionOnInvalidPropertyPath'])) {
            $output['throw_exception_on_invalid_property_path'] = $this->throwExceptionOnInvalidPropertyPath;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
