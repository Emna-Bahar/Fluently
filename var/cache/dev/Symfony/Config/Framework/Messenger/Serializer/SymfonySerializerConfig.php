<?php

namespace Symfony\Config\Framework\Messenger\Serializer;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SymfonySerializerConfig 
{
    private $format;
    private $context;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Serialization format for the messenger.transport.symfony_serializer service (which is not the serializer used by default).
     * @default 'json'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function format($value): static
    {
        $this->_usedProperties['format'] = true;
        $this->format = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function context(string $name, mixed $value): static
    {
        $this->_usedProperties['context'] = true;
        $this->context[$name] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('format', $value)) {
            $this->_usedProperties['format'] = true;
            $this->format = $value['format'];
            unset($value['format']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('context', $value)) {
            $this->_usedProperties['context'] = true;
            $this->context = $value['context'];
            unset($value['context']);
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
        if (isset($this->_usedProperties['format'])) {
            $output['format'] = $this->format;
        }
        if (isset($this->_usedProperties['context'])) {
            $output['context'] = $this->context;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
