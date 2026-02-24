<?php

namespace Symfony\Config\Framework\Messenger\BusConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DefaultMiddlewareConfig 
{
    private $enabled;
    private $allowNoHandlers;
    private $allowNoSenders;
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
    public function allowNoHandlers($value): static
    {
        $this->_usedProperties['allowNoHandlers'] = true;
        $this->allowNoHandlers = $value;
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
    public function allowNoSenders($value): static
    {
        $this->_usedProperties['allowNoSenders'] = true;
        $this->allowNoSenders = $value;
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
        if (array_key_exists('allow_no_handlers', $value)) {
            $this->_usedProperties['allowNoHandlers'] = true;
            $this->allowNoHandlers = $value['allow_no_handlers'];
            unset($value['allow_no_handlers']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_no_senders', $value)) {
            $this->_usedProperties['allowNoSenders'] = true;
            $this->allowNoSenders = $value['allow_no_senders'];
            unset($value['allow_no_senders']);
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
        if (isset($this->_usedProperties['allowNoHandlers'])) {
            $output['allow_no_handlers'] = $this->allowNoHandlers;
        }
        if (isset($this->_usedProperties['allowNoSenders'])) {
            $output['allow_no_senders'] = $this->allowNoSenders;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
