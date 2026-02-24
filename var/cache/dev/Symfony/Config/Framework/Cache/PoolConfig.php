<?php

namespace Symfony\Config\Framework\Cache;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PoolConfig 
{
    private $adapters;
    private $tags;
    private $public;
    private $defaultLifetime;
    private $provider;
    private $earlyExpirationMessageBus;
    private $clearer;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function adapters(mixed $value): static
    {
        $this->_usedProperties['adapters'] = true;
        $this->adapters = $value;
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
    public function tags($value): static
    {
        $this->_usedProperties['tags'] = true;
        $this->tags = $value;
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
    public function public($value): static
    {
        $this->_usedProperties['public'] = true;
        $this->public = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Default lifetime of the pool
     * @example "300" for 5 minutes expressed in seconds, "PT5M" for five minutes expressed as ISO 8601 time interval, or "5 minutes" as a date expression
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultLifetime($value): static
    {
        $this->_usedProperties['defaultLifetime'] = true;
        $this->defaultLifetime = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Overwrite the setting from the default provider for this adapter.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function provider($value): static
    {
        $this->_usedProperties['provider'] = true;
        $this->provider = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @example "messenger.default_bus" to send early expiration events to the default Messenger bus.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function earlyExpirationMessageBus($value): static
    {
        $this->_usedProperties['earlyExpirationMessageBus'] = true;
        $this->earlyExpirationMessageBus = $value;
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
    public function clearer($value): static
    {
        $this->_usedProperties['clearer'] = true;
        $this->clearer = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('adapters', $value)) {
            $this->_usedProperties['adapters'] = true;
            $this->adapters = $value['adapters'];
            unset($value['adapters']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('tags', $value)) {
            $this->_usedProperties['tags'] = true;
            $this->tags = $value['tags'];
            unset($value['tags']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('public', $value)) {
            $this->_usedProperties['public'] = true;
            $this->public = $value['public'];
            unset($value['public']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('default_lifetime', $value)) {
            $this->_usedProperties['defaultLifetime'] = true;
            $this->defaultLifetime = $value['default_lifetime'];
            unset($value['default_lifetime']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('provider', $value)) {
            $this->_usedProperties['provider'] = true;
            $this->provider = $value['provider'];
            unset($value['provider']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('early_expiration_message_bus', $value)) {
            $this->_usedProperties['earlyExpirationMessageBus'] = true;
            $this->earlyExpirationMessageBus = $value['early_expiration_message_bus'];
            unset($value['early_expiration_message_bus']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('clearer', $value)) {
            $this->_usedProperties['clearer'] = true;
            $this->clearer = $value['clearer'];
            unset($value['clearer']);
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
        if (isset($this->_usedProperties['adapters'])) {
            $output['adapters'] = $this->adapters;
        }
        if (isset($this->_usedProperties['tags'])) {
            $output['tags'] = $this->tags;
        }
        if (isset($this->_usedProperties['public'])) {
            $output['public'] = $this->public;
        }
        if (isset($this->_usedProperties['defaultLifetime'])) {
            $output['default_lifetime'] = $this->defaultLifetime;
        }
        if (isset($this->_usedProperties['provider'])) {
            $output['provider'] = $this->provider;
        }
        if (isset($this->_usedProperties['earlyExpirationMessageBus'])) {
            $output['early_expiration_message_bus'] = $this->earlyExpirationMessageBus;
        }
        if (isset($this->_usedProperties['clearer'])) {
            $output['clearer'] = $this->clearer;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
