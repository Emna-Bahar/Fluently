<?php

namespace Symfony\Config\Security\ProviderConfig;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Memory'.\DIRECTORY_SEPARATOR.'UserConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MemoryConfig 
{
    private $users;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function user(string $identifier, array $value = []): \Symfony\Config\Security\ProviderConfig\Memory\UserConfig
    {
        if (!isset($this->users[$identifier])) {
            $this->_usedProperties['users'] = true;
            $this->users[$identifier] = new \Symfony\Config\Security\ProviderConfig\Memory\UserConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "user()" has already been initialized. You cannot pass values the second time you call user().');
        }
<<<<<<< HEAD
    
        return $this->users[$identifier];
    }
    
=======

        return $this->users[$identifier];
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('users', $value)) {
            $this->_usedProperties['users'] = true;
            $this->users = array_map(fn ($v) => new \Symfony\Config\Security\ProviderConfig\Memory\UserConfig($v), $value['users']);
            unset($value['users']);
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
        if (isset($this->_usedProperties['users'])) {
            $output['users'] = array_map(fn ($v) => $v->toArray(), $this->users);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
