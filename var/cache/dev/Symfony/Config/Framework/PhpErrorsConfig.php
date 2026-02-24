<?php

namespace Symfony\Config\Framework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PhpErrorsConfig 
{
    private $log;
    private $throw;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Use the application logger instead of the PHP logger for logging PHP errors.
     * @example "true" to use the default configuration: log all errors. "false" to disable. An integer bit field of E_* constants, or an array mapping E_* constants to log levels.
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function log(mixed $value): static
    {
        $this->_usedProperties['log'] = true;
        $this->log = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Throw PHP errors as \ErrorException instances.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function throw($value): static
    {
        $this->_usedProperties['throw'] = true;
        $this->throw = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('log', $value)) {
            $this->_usedProperties['log'] = true;
            $this->log = $value['log'];
            unset($value['log']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('throw', $value)) {
            $this->_usedProperties['throw'] = true;
            $this->throw = $value['throw'];
            unset($value['throw']);
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
        if (isset($this->_usedProperties['log'])) {
            $output['log'] = $this->log;
        }
        if (isset($this->_usedProperties['throw'])) {
            $output['throw'] = $this->throw;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
