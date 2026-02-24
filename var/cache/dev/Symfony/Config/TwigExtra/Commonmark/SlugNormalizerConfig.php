<?php

namespace Symfony\Config\TwigExtra\Commonmark;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SlugNormalizerConfig 
{
    private $instance;
    private $maxLength;
    private $unique;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function instance(mixed $value): static
    {
        $this->_usedProperties['instance'] = true;
        $this->instance = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 255
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxLength($value): static
    {
        $this->_usedProperties['maxLength'] = true;
        $this->maxLength = $value;
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
     *
     * @return $this
     */
    public function unique(mixed $value): static
    {
        $this->_usedProperties['unique'] = true;
        $this->unique = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('instance', $value)) {
            $this->_usedProperties['instance'] = true;
            $this->instance = $value['instance'];
            unset($value['instance']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('max_length', $value)) {
            $this->_usedProperties['maxLength'] = true;
            $this->maxLength = $value['max_length'];
            unset($value['max_length']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('unique', $value)) {
            $this->_usedProperties['unique'] = true;
            $this->unique = $value['unique'];
            unset($value['unique']);
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
        if (isset($this->_usedProperties['instance'])) {
            $output['instance'] = $this->instance;
        }
        if (isset($this->_usedProperties['maxLength'])) {
            $output['max_length'] = $this->maxLength;
        }
        if (isset($this->_usedProperties['unique'])) {
            $output['unique'] = $this->unique;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
