<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class StimulusConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $controllerPaths;
    private $controllersJson;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function controllerPaths(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['controllerPaths'] = true;
        $this->controllerPaths = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default '%kernel.project_dir%/assets/controllers.json'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function controllersJson($value): static
    {
        $this->_usedProperties['controllersJson'] = true;
        $this->controllersJson = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function getExtensionAlias(): string
    {
        return 'stimulus';
    }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('controller_paths', $value)) {
            $this->_usedProperties['controllerPaths'] = true;
            $this->controllerPaths = $value['controller_paths'];
            unset($value['controller_paths']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('controllers_json', $value)) {
            $this->_usedProperties['controllersJson'] = true;
            $this->controllersJson = $value['controllers_json'];
            unset($value['controllers_json']);
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
        if (isset($this->_usedProperties['controllerPaths'])) {
            $output['controller_paths'] = $this->controllerPaths;
        }
        if (isset($this->_usedProperties['controllersJson'])) {
            $output['controllers_json'] = $this->controllersJson;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
