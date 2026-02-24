<?php

namespace Symfony\Config\Security;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class PasswordHasherConfig 
{
    private $algorithm;
    private $migrateFrom;
    private $hashAlgorithm;
    private $keyLength;
    private $ignoreCase;
    private $encodeAsBase64;
    private $iterations;
    private $cost;
    private $memoryCost;
    private $timeCost;
    private $id;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function algorithm($value): static
    {
        $this->_usedProperties['algorithm'] = true;
        $this->algorithm = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|mixed $value
     *
     * @return $this
     */
    public function migrateFrom(mixed $value): static
    {
        $this->_usedProperties['migrateFrom'] = true;
        $this->migrateFrom = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Name of hashing algorithm for PBKDF2 (i.e. sha256, sha512, etc..) See hash_algos() for a list of supported algorithms.
     * @default 'sha512'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function hashAlgorithm($value): static
    {
        $this->_usedProperties['hashAlgorithm'] = true;
        $this->hashAlgorithm = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 40
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function keyLength($value): static
    {
        $this->_usedProperties['keyLength'] = true;
        $this->keyLength = $value;
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
    public function ignoreCase($value): static
    {
        $this->_usedProperties['ignoreCase'] = true;
        $this->ignoreCase = $value;
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
    public function encodeAsBase64($value): static
    {
        $this->_usedProperties['encodeAsBase64'] = true;
        $this->encodeAsBase64 = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 5000
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function iterations($value): static
    {
        $this->_usedProperties['iterations'] = true;
        $this->iterations = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function cost($value): static
    {
        $this->_usedProperties['cost'] = true;
        $this->cost = $value;
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
    public function memoryCost($value): static
    {
        $this->_usedProperties['memoryCost'] = true;
        $this->memoryCost = $value;
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
    public function timeCost($value): static
    {
        $this->_usedProperties['timeCost'] = true;
        $this->timeCost = $value;
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
    public function id($value): static
    {
        $this->_usedProperties['id'] = true;
        $this->id = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('algorithm', $value)) {
            $this->_usedProperties['algorithm'] = true;
            $this->algorithm = $value['algorithm'];
            unset($value['algorithm']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('migrate_from', $value)) {
            $this->_usedProperties['migrateFrom'] = true;
            $this->migrateFrom = $value['migrate_from'];
            unset($value['migrate_from']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('hash_algorithm', $value)) {
            $this->_usedProperties['hashAlgorithm'] = true;
            $this->hashAlgorithm = $value['hash_algorithm'];
            unset($value['hash_algorithm']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('key_length', $value)) {
            $this->_usedProperties['keyLength'] = true;
            $this->keyLength = $value['key_length'];
            unset($value['key_length']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('ignore_case', $value)) {
            $this->_usedProperties['ignoreCase'] = true;
            $this->ignoreCase = $value['ignore_case'];
            unset($value['ignore_case']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('encode_as_base64', $value)) {
            $this->_usedProperties['encodeAsBase64'] = true;
            $this->encodeAsBase64 = $value['encode_as_base64'];
            unset($value['encode_as_base64']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('iterations', $value)) {
            $this->_usedProperties['iterations'] = true;
            $this->iterations = $value['iterations'];
            unset($value['iterations']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('cost', $value)) {
            $this->_usedProperties['cost'] = true;
            $this->cost = $value['cost'];
            unset($value['cost']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('memory_cost', $value)) {
            $this->_usedProperties['memoryCost'] = true;
            $this->memoryCost = $value['memory_cost'];
            unset($value['memory_cost']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('time_cost', $value)) {
            $this->_usedProperties['timeCost'] = true;
            $this->timeCost = $value['time_cost'];
            unset($value['time_cost']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('id', $value)) {
            $this->_usedProperties['id'] = true;
            $this->id = $value['id'];
            unset($value['id']);
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
        if (isset($this->_usedProperties['algorithm'])) {
            $output['algorithm'] = $this->algorithm;
        }
        if (isset($this->_usedProperties['migrateFrom'])) {
            $output['migrate_from'] = $this->migrateFrom;
        }
        if (isset($this->_usedProperties['hashAlgorithm'])) {
            $output['hash_algorithm'] = $this->hashAlgorithm;
        }
        if (isset($this->_usedProperties['keyLength'])) {
            $output['key_length'] = $this->keyLength;
        }
        if (isset($this->_usedProperties['ignoreCase'])) {
            $output['ignore_case'] = $this->ignoreCase;
        }
        if (isset($this->_usedProperties['encodeAsBase64'])) {
            $output['encode_as_base64'] = $this->encodeAsBase64;
        }
        if (isset($this->_usedProperties['iterations'])) {
            $output['iterations'] = $this->iterations;
        }
        if (isset($this->_usedProperties['cost'])) {
            $output['cost'] = $this->cost;
        }
        if (isset($this->_usedProperties['memoryCost'])) {
            $output['memory_cost'] = $this->memoryCost;
        }
        if (isset($this->_usedProperties['timeCost'])) {
            $output['time_cost'] = $this->timeCost;
        }
        if (isset($this->_usedProperties['id'])) {
            $output['id'] = $this->id;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
