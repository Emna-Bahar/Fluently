<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MakerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $rootNamespace;
    private $generateFinalClasses;
    private $generateFinalEntities;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'App'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function rootNamespace($value): static
    {
        $this->_usedProperties['rootNamespace'] = true;
        $this->rootNamespace = $value;
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
    public function generateFinalClasses($value): static
    {
        $this->_usedProperties['generateFinalClasses'] = true;
        $this->generateFinalClasses = $value;
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
    public function generateFinalEntities($value): static
    {
        $this->_usedProperties['generateFinalEntities'] = true;
        $this->generateFinalEntities = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function getExtensionAlias(): string
    {
        return 'maker';
    }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('root_namespace', $value)) {
            $this->_usedProperties['rootNamespace'] = true;
            $this->rootNamespace = $value['root_namespace'];
            unset($value['root_namespace']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('generate_final_classes', $value)) {
            $this->_usedProperties['generateFinalClasses'] = true;
            $this->generateFinalClasses = $value['generate_final_classes'];
            unset($value['generate_final_classes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('generate_final_entities', $value)) {
            $this->_usedProperties['generateFinalEntities'] = true;
            $this->generateFinalEntities = $value['generate_final_entities'];
            unset($value['generate_final_entities']);
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
        if (isset($this->_usedProperties['rootNamespace'])) {
            $output['root_namespace'] = $this->rootNamespace;
        }
        if (isset($this->_usedProperties['generateFinalClasses'])) {
            $output['generate_final_classes'] = $this->generateFinalClasses;
        }
        if (isset($this->_usedProperties['generateFinalEntities'])) {
            $output['generate_final_entities'] = $this->generateFinalEntities;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
