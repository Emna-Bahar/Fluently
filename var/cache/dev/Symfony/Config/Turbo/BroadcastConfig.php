<?php

namespace Symfony\Config\Turbo;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Broadcast'.\DIRECTORY_SEPARATOR.'DoctrineOrmConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class BroadcastConfig 
{
    private $enabled;
    private $entityTemplatePrefixes;
    private $doctrineOrm;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default true
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
    /**
     * @param ParamConfigurator|list<ParamConfigurator|mixed> $value
     *
     * @return $this
     */
    public function entityTemplatePrefixes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['entityTemplatePrefixes'] = true;
        $this->entityTemplatePrefixes = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Enable the Doctrine ORM integration
     * @default {"enabled":true}
    */
    public function doctrineOrm(array $value = []): \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig
    {
        if (null === $this->doctrineOrm) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = new \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "doctrineOrm()" has already been initialized. You cannot pass values the second time you call doctrineOrm().');
        }
<<<<<<< HEAD
    
        return $this->doctrineOrm;
    }
    
=======

        return $this->doctrineOrm;
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
        if (array_key_exists('entity_template_prefixes', $value)) {
            $this->_usedProperties['entityTemplatePrefixes'] = true;
            $this->entityTemplatePrefixes = $value['entity_template_prefixes'];
            unset($value['entity_template_prefixes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('doctrine_orm', $value)) {
            $this->_usedProperties['doctrineOrm'] = true;
            $this->doctrineOrm = new \Symfony\Config\Turbo\Broadcast\DoctrineOrmConfig($value['doctrine_orm']);
            unset($value['doctrine_orm']);
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
        if (isset($this->_usedProperties['entityTemplatePrefixes'])) {
            $output['entity_template_prefixes'] = $this->entityTemplatePrefixes;
        }
        if (isset($this->_usedProperties['doctrineOrm'])) {
            $output['doctrine_orm'] = $this->doctrineOrm->toArray();
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
