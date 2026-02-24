<?php

namespace Symfony\Config\Framework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'HtmlSanitizer'.\DIRECTORY_SEPARATOR.'SanitizerConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HtmlSanitizerConfig 
{
    private $enabled;
    private $sanitizers;
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
    public function sanitizer(string $name, array $value = []): \Symfony\Config\Framework\HtmlSanitizer\SanitizerConfig
    {
        if (!isset($this->sanitizers[$name])) {
            $this->_usedProperties['sanitizers'] = true;
            $this->sanitizers[$name] = new \Symfony\Config\Framework\HtmlSanitizer\SanitizerConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "sanitizer()" has already been initialized. You cannot pass values the second time you call sanitizer().');
        }
<<<<<<< HEAD
    
        return $this->sanitizers[$name];
    }
    
=======

        return $this->sanitizers[$name];
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
        if (array_key_exists('sanitizers', $value)) {
            $this->_usedProperties['sanitizers'] = true;
            $this->sanitizers = array_map(fn ($v) => new \Symfony\Config\Framework\HtmlSanitizer\SanitizerConfig($v), $value['sanitizers']);
            unset($value['sanitizers']);
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
        if (isset($this->_usedProperties['sanitizers'])) {
            $output['sanitizers'] = array_map(fn ($v) => $v->toArray(), $this->sanitizers);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
