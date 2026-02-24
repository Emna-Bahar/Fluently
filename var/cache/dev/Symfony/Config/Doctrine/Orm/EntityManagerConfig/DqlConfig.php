<?php

namespace Symfony\Config\Doctrine\Orm\EntityManagerConfig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class DqlConfig 
{
    private $stringFunctions;
    private $numericFunctions;
    private $datetimeFunctions;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @return $this
     */
    public function stringFunction(string $name, mixed $value): static
    {
        $this->_usedProperties['stringFunctions'] = true;
        $this->stringFunctions[$name] = $value;
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
    public function numericFunction(string $name, mixed $value): static
    {
        $this->_usedProperties['numericFunctions'] = true;
        $this->numericFunctions[$name] = $value;
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
    public function datetimeFunction(string $name, mixed $value): static
    {
        $this->_usedProperties['datetimeFunctions'] = true;
        $this->datetimeFunctions[$name] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('string_functions', $value)) {
            $this->_usedProperties['stringFunctions'] = true;
            $this->stringFunctions = $value['string_functions'];
            unset($value['string_functions']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('numeric_functions', $value)) {
            $this->_usedProperties['numericFunctions'] = true;
            $this->numericFunctions = $value['numeric_functions'];
            unset($value['numeric_functions']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('datetime_functions', $value)) {
            $this->_usedProperties['datetimeFunctions'] = true;
            $this->datetimeFunctions = $value['datetime_functions'];
            unset($value['datetime_functions']);
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
        if (isset($this->_usedProperties['stringFunctions'])) {
            $output['string_functions'] = $this->stringFunctions;
        }
        if (isset($this->_usedProperties['numericFunctions'])) {
            $output['numeric_functions'] = $this->numericFunctions;
        }
        if (isset($this->_usedProperties['datetimeFunctions'])) {
            $output['datetime_functions'] = $this->datetimeFunctions;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
