<?php

namespace Symfony\Config\Framework\Messenger;

require_once __DIR__.\DIRECTORY_SEPARATOR.'TransportConfig'.\DIRECTORY_SEPARATOR.'RetryStrategyConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TransportConfig 
{
    private $dsn;
    private $serializer;
    private $options;
    private $failureTransport;
    private $retryStrategy;
    private $rateLimiter;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function dsn($value): static
    {
        $this->_usedProperties['dsn'] = true;
        $this->dsn = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Service id of a custom serializer to use.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function serializer($value): static
    {
        $this->_usedProperties['serializer'] = true;
        $this->serializer = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function options(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['options'] = true;
        $this->options = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Transport name to send failed messages to (after all retries have failed).
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function failureTransport($value): static
    {
        $this->_usedProperties['failureTransport'] = true;
        $this->failureTransport = $value;
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
     * @default {"service":null,"max_retries":3,"delay":1000,"multiplier":2,"max_delay":0}
     * @return \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig : static)
     */
    public function retryStrategy(mixed $value = []): \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['retryStrategy'] = true;
            $this->retryStrategy = $value;
<<<<<<< HEAD
    
            return $this;
        }
    
=======

            return $this;
        }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (!$this->retryStrategy instanceof \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig) {
            $this->_usedProperties['retryStrategy'] = true;
            $this->retryStrategy = new \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "retryStrategy()" has already been initialized. You cannot pass values the second time you call retryStrategy().');
        }
<<<<<<< HEAD
    
        return $this->retryStrategy;
    }
    
=======

        return $this->retryStrategy;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Rate limiter name to use when processing messages
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rateLimiter($value): static
    {
        $this->_usedProperties['rateLimiter'] = true;
        $this->rateLimiter = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('dsn', $value)) {
            $this->_usedProperties['dsn'] = true;
            $this->dsn = $value['dsn'];
            unset($value['dsn']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('serializer', $value)) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = $value['serializer'];
            unset($value['serializer']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('options', $value)) {
            $this->_usedProperties['options'] = true;
            $this->options = $value['options'];
            unset($value['options']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('failure_transport', $value)) {
            $this->_usedProperties['failureTransport'] = true;
            $this->failureTransport = $value['failure_transport'];
            unset($value['failure_transport']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('retry_strategy', $value)) {
            $this->_usedProperties['retryStrategy'] = true;
            $this->retryStrategy = \is_array($value['retry_strategy']) ? new \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig($value['retry_strategy']) : $value['retry_strategy'];
            unset($value['retry_strategy']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('rate_limiter', $value)) {
            $this->_usedProperties['rateLimiter'] = true;
            $this->rateLimiter = $value['rate_limiter'];
            unset($value['rate_limiter']);
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
        if (isset($this->_usedProperties['dsn'])) {
            $output['dsn'] = $this->dsn;
        }
        if (isset($this->_usedProperties['serializer'])) {
            $output['serializer'] = $this->serializer;
        }
        if (isset($this->_usedProperties['options'])) {
            $output['options'] = $this->options;
        }
        if (isset($this->_usedProperties['failureTransport'])) {
            $output['failure_transport'] = $this->failureTransport;
        }
        if (isset($this->_usedProperties['retryStrategy'])) {
            $output['retry_strategy'] = $this->retryStrategy instanceof \Symfony\Config\Framework\Messenger\TransportConfig\RetryStrategyConfig ? $this->retryStrategy->toArray() : $this->retryStrategy;
        }
        if (isset($this->_usedProperties['rateLimiter'])) {
            $output['rate_limiter'] = $this->rateLimiter;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
