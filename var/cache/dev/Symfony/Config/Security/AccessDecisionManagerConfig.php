<?php

namespace Symfony\Config\Security;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AccessDecisionManagerConfig 
{
    private $strategy;
    private $service;
    private $strategyService;
    private $allowIfAllAbstain;
    private $allowIfEqualGrantedDenied;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|'affirmative'|'consensus'|'unanimous'|'priority' $value
     * @return $this
     */
    public function strategy($value): static
    {
        $this->_usedProperties['strategy'] = true;
        $this->strategy = $value;
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
    public function service($value): static
    {
        $this->_usedProperties['service'] = true;
        $this->service = $value;
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
    public function strategyService($value): static
    {
        $this->_usedProperties['strategyService'] = true;
        $this->strategyService = $value;
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
    public function allowIfAllAbstain($value): static
    {
        $this->_usedProperties['allowIfAllAbstain'] = true;
        $this->allowIfAllAbstain = $value;
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
    public function allowIfEqualGrantedDenied($value): static
    {
        $this->_usedProperties['allowIfEqualGrantedDenied'] = true;
        $this->allowIfEqualGrantedDenied = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('strategy', $value)) {
            $this->_usedProperties['strategy'] = true;
            $this->strategy = $value['strategy'];
            unset($value['strategy']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('service', $value)) {
            $this->_usedProperties['service'] = true;
            $this->service = $value['service'];
            unset($value['service']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('strategy_service', $value)) {
            $this->_usedProperties['strategyService'] = true;
            $this->strategyService = $value['strategy_service'];
            unset($value['strategy_service']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_if_all_abstain', $value)) {
            $this->_usedProperties['allowIfAllAbstain'] = true;
            $this->allowIfAllAbstain = $value['allow_if_all_abstain'];
            unset($value['allow_if_all_abstain']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_if_equal_granted_denied', $value)) {
            $this->_usedProperties['allowIfEqualGrantedDenied'] = true;
            $this->allowIfEqualGrantedDenied = $value['allow_if_equal_granted_denied'];
            unset($value['allow_if_equal_granted_denied']);
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
        if (isset($this->_usedProperties['strategy'])) {
            $output['strategy'] = $this->strategy;
        }
        if (isset($this->_usedProperties['service'])) {
            $output['service'] = $this->service;
        }
        if (isset($this->_usedProperties['strategyService'])) {
            $output['strategy_service'] = $this->strategyService;
        }
        if (isset($this->_usedProperties['allowIfAllAbstain'])) {
            $output['allow_if_all_abstain'] = $this->allowIfAllAbstain;
        }
        if (isset($this->_usedProperties['allowIfEqualGrantedDenied'])) {
            $output['allow_if_equal_granted_denied'] = $this->allowIfEqualGrantedDenied;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
