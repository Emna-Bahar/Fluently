<?php

namespace Symfony\Config\Framework\Notifier;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AdminRecipientConfig 
{
    private $email;
    private $phone;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function email($value): static
    {
        $this->_usedProperties['email'] = true;
        $this->email = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function phone($value): static
    {
        $this->_usedProperties['phone'] = true;
        $this->phone = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('email', $value)) {
            $this->_usedProperties['email'] = true;
            $this->email = $value['email'];
            unset($value['email']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('phone', $value)) {
            $this->_usedProperties['phone'] = true;
            $this->phone = $value['phone'];
            unset($value['phone']);
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
        if (isset($this->_usedProperties['email'])) {
            $output['email'] = $this->email;
        }
        if (isset($this->_usedProperties['phone'])) {
            $output['phone'] = $this->phone;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
