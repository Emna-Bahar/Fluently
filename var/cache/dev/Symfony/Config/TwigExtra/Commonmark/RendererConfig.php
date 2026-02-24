<?php

namespace Symfony\Config\TwigExtra\Commonmark;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class RendererConfig 
{
    private $blockSeparator;
    private $innerSeparator;
    private $softBreak;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function blockSeparator($value): static
    {
        $this->_usedProperties['blockSeparator'] = true;
        $this->blockSeparator = $value;
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
    public function innerSeparator($value): static
    {
        $this->_usedProperties['innerSeparator'] = true;
        $this->innerSeparator = $value;
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
    public function softBreak($value): static
    {
        $this->_usedProperties['softBreak'] = true;
        $this->softBreak = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('block_separator', $value)) {
            $this->_usedProperties['blockSeparator'] = true;
            $this->blockSeparator = $value['block_separator'];
            unset($value['block_separator']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('inner_separator', $value)) {
            $this->_usedProperties['innerSeparator'] = true;
            $this->innerSeparator = $value['inner_separator'];
            unset($value['inner_separator']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('soft_break', $value)) {
            $this->_usedProperties['softBreak'] = true;
            $this->softBreak = $value['soft_break'];
            unset($value['soft_break']);
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
        if (isset($this->_usedProperties['blockSeparator'])) {
            $output['block_separator'] = $this->blockSeparator;
        }
        if (isset($this->_usedProperties['innerSeparator'])) {
            $output['inner_separator'] = $this->innerSeparator;
        }
        if (isset($this->_usedProperties['softBreak'])) {
            $output['soft_break'] = $this->softBreak;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
