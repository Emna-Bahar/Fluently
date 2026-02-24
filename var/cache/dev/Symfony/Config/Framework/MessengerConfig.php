<?php

namespace Symfony\Config\Framework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'RoutingConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'SerializerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'TransportConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Messenger'.\DIRECTORY_SEPARATOR.'BusConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MessengerConfig 
{
    private $enabled;
    private $routing;
    private $serializer;
    private $transports;
    private $failureTransport;
    private $resetOnMessage;
    private $stopWorkerOnSignals;
    private $defaultBus;
    private $buses;
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
    public function routing(string $message_class, array $value = []): \Symfony\Config\Framework\Messenger\RoutingConfig
    {
        if (!isset($this->routing[$message_class])) {
            $this->_usedProperties['routing'] = true;
            $this->routing[$message_class] = new \Symfony\Config\Framework\Messenger\RoutingConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "routing()" has already been initialized. You cannot pass values the second time you call routing().');
        }
<<<<<<< HEAD
    
        return $this->routing[$message_class];
    }
    
=======

        return $this->routing[$message_class];
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default {"default_serializer":"messenger.transport.native_php_serializer","symfony_serializer":{"format":"json","context":[]}}
    */
    public function serializer(array $value = []): \Symfony\Config\Framework\Messenger\SerializerConfig
    {
        if (null === $this->serializer) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\Framework\Messenger\SerializerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "serializer()" has already been initialized. You cannot pass values the second time you call serializer().');
        }
<<<<<<< HEAD
    
        return $this->serializer;
    }
    
=======

        return $this->serializer;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @template TValue of string|array
     * @param TValue $value
     * @return \Symfony\Config\Framework\Messenger\TransportConfig|$this
     * @psalm-return (TValue is array ? \Symfony\Config\Framework\Messenger\TransportConfig : static)
     */
    public function transport(string $name, string|array $value = []): \Symfony\Config\Framework\Messenger\TransportConfig|static
    {
        if (!\is_array($value)) {
            $this->_usedProperties['transports'] = true;
            $this->transports[$name] = $value;
<<<<<<< HEAD
    
            return $this;
        }
    
=======

            return $this;
        }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (!isset($this->transports[$name]) || !$this->transports[$name] instanceof \Symfony\Config\Framework\Messenger\TransportConfig) {
            $this->_usedProperties['transports'] = true;
            $this->transports[$name] = new \Symfony\Config\Framework\Messenger\TransportConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "transport()" has already been initialized. You cannot pass values the second time you call transport().');
        }
<<<<<<< HEAD
    
        return $this->transports[$name];
    }
    
=======

        return $this->transports[$name];
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
     * Reset container services after each message.
     * @default true
     * @param ParamConfigurator|bool $value
     * @deprecated Option "reset_on_message" at "messenger" is deprecated. It does nothing and will be removed in version 7.0.
     * @return $this
     */
    public function resetOnMessage($value): static
    {
        $this->_usedProperties['resetOnMessage'] = true;
        $this->resetOnMessage = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|list<ParamConfigurator|int> $value
     *
     * @return $this
     */
    public function stopWorkerOnSignals(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['stopWorkerOnSignals'] = true;
        $this->stopWorkerOnSignals = $value;
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
    public function defaultBus($value): static
    {
        $this->_usedProperties['defaultBus'] = true;
        $this->defaultBus = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default {"messenger.bus.default":{"default_middleware":{"enabled":true,"allow_no_handlers":false,"allow_no_senders":true},"middleware":[]}}
    */
    public function bus(string $name, array $value = []): \Symfony\Config\Framework\Messenger\BusConfig
    {
        if (!isset($this->buses[$name])) {
            $this->_usedProperties['buses'] = true;
            $this->buses[$name] = new \Symfony\Config\Framework\Messenger\BusConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "bus()" has already been initialized. You cannot pass values the second time you call bus().');
        }
<<<<<<< HEAD
    
        return $this->buses[$name];
    }
    
=======

        return $this->buses[$name];
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
        if (array_key_exists('routing', $value)) {
            $this->_usedProperties['routing'] = true;
            $this->routing = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Framework\Messenger\RoutingConfig($v) : $v, $value['routing']);
            unset($value['routing']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('serializer', $value)) {
            $this->_usedProperties['serializer'] = true;
            $this->serializer = new \Symfony\Config\Framework\Messenger\SerializerConfig($value['serializer']);
            unset($value['serializer']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('transports', $value)) {
            $this->_usedProperties['transports'] = true;
            $this->transports = array_map(fn ($v) => \is_array($v) ? new \Symfony\Config\Framework\Messenger\TransportConfig($v) : $v, $value['transports']);
            unset($value['transports']);
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
        if (array_key_exists('reset_on_message', $value)) {
            $this->_usedProperties['resetOnMessage'] = true;
            $this->resetOnMessage = $value['reset_on_message'];
            unset($value['reset_on_message']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('stop_worker_on_signals', $value)) {
            $this->_usedProperties['stopWorkerOnSignals'] = true;
            $this->stopWorkerOnSignals = $value['stop_worker_on_signals'];
            unset($value['stop_worker_on_signals']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('default_bus', $value)) {
            $this->_usedProperties['defaultBus'] = true;
            $this->defaultBus = $value['default_bus'];
            unset($value['default_bus']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('buses', $value)) {
            $this->_usedProperties['buses'] = true;
            $this->buses = array_map(fn ($v) => new \Symfony\Config\Framework\Messenger\BusConfig($v), $value['buses']);
            unset($value['buses']);
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
        if (isset($this->_usedProperties['routing'])) {
            $output['routing'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Framework\Messenger\RoutingConfig ? $v->toArray() : $v, $this->routing);
        }
        if (isset($this->_usedProperties['serializer'])) {
            $output['serializer'] = $this->serializer->toArray();
        }
        if (isset($this->_usedProperties['transports'])) {
            $output['transports'] = array_map(fn ($v) => $v instanceof \Symfony\Config\Framework\Messenger\TransportConfig ? $v->toArray() : $v, $this->transports);
        }
        if (isset($this->_usedProperties['failureTransport'])) {
            $output['failure_transport'] = $this->failureTransport;
        }
        if (isset($this->_usedProperties['resetOnMessage'])) {
            $output['reset_on_message'] = $this->resetOnMessage;
        }
        if (isset($this->_usedProperties['stopWorkerOnSignals'])) {
            $output['stop_worker_on_signals'] = $this->stopWorkerOnSignals;
        }
        if (isset($this->_usedProperties['defaultBus'])) {
            $output['default_bus'] = $this->defaultBus;
        }
        if (isset($this->_usedProperties['buses'])) {
            $output['buses'] = array_map(fn ($v) => $v->toArray(), $this->buses);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
