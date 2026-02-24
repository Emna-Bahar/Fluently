<?php

namespace Symfony\Config\Monolog\HandlerConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class VerbosityLevelsConfig 
{
    private $vERBOSITYQUIET;
    private $vERBOSITYNORMAL;
    private $vERBOSITYVERBOSE;
    private $vERBOSITYVERYVERBOSE;
    private $vERBOSITYDEBUG;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'ERROR'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vERBOSITYQUIET($value): static
    {
        $this->_usedProperties['vERBOSITYQUIET'] = true;
        $this->vERBOSITYQUIET = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'WARNING'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vERBOSITYNORMAL($value): static
    {
        $this->_usedProperties['vERBOSITYNORMAL'] = true;
        $this->vERBOSITYNORMAL = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'NOTICE'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vERBOSITYVERBOSE($value): static
    {
        $this->_usedProperties['vERBOSITYVERBOSE'] = true;
        $this->vERBOSITYVERBOSE = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'INFO'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vERBOSITYVERYVERBOSE($value): static
    {
        $this->_usedProperties['vERBOSITYVERYVERBOSE'] = true;
        $this->vERBOSITYVERYVERBOSE = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'DEBUG'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function vERBOSITYDEBUG($value): static
    {
        $this->_usedProperties['vERBOSITYDEBUG'] = true;
        $this->vERBOSITYDEBUG = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('VERBOSITY_QUIET', $value)) {
            $this->_usedProperties['vERBOSITYQUIET'] = true;
            $this->vERBOSITYQUIET = $value['VERBOSITY_QUIET'];
            unset($value['VERBOSITY_QUIET']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('VERBOSITY_NORMAL', $value)) {
            $this->_usedProperties['vERBOSITYNORMAL'] = true;
            $this->vERBOSITYNORMAL = $value['VERBOSITY_NORMAL'];
            unset($value['VERBOSITY_NORMAL']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('VERBOSITY_VERBOSE', $value)) {
            $this->_usedProperties['vERBOSITYVERBOSE'] = true;
            $this->vERBOSITYVERBOSE = $value['VERBOSITY_VERBOSE'];
            unset($value['VERBOSITY_VERBOSE']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('VERBOSITY_VERY_VERBOSE', $value)) {
            $this->_usedProperties['vERBOSITYVERYVERBOSE'] = true;
            $this->vERBOSITYVERYVERBOSE = $value['VERBOSITY_VERY_VERBOSE'];
            unset($value['VERBOSITY_VERY_VERBOSE']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('VERBOSITY_DEBUG', $value)) {
            $this->_usedProperties['vERBOSITYDEBUG'] = true;
            $this->vERBOSITYDEBUG = $value['VERBOSITY_DEBUG'];
            unset($value['VERBOSITY_DEBUG']);
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
        if (isset($this->_usedProperties['vERBOSITYQUIET'])) {
            $output['VERBOSITY_QUIET'] = $this->vERBOSITYQUIET;
        }
        if (isset($this->_usedProperties['vERBOSITYNORMAL'])) {
            $output['VERBOSITY_NORMAL'] = $this->vERBOSITYNORMAL;
        }
        if (isset($this->_usedProperties['vERBOSITYVERBOSE'])) {
            $output['VERBOSITY_VERBOSE'] = $this->vERBOSITYVERBOSE;
        }
        if (isset($this->_usedProperties['vERBOSITYVERYVERBOSE'])) {
            $output['VERBOSITY_VERY_VERBOSE'] = $this->vERBOSITYVERYVERBOSE;
        }
        if (isset($this->_usedProperties['vERBOSITYDEBUG'])) {
            $output['VERBOSITY_DEBUG'] = $this->vERBOSITYDEBUG;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
