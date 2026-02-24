<?php

namespace Symfony\Config\Framework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Assets'.\DIRECTORY_SEPARATOR.'PackageConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class AssetsConfig 
{
    private $enabled;
    private $strictMode;
    private $versionStrategy;
    private $version;
    private $versionFormat;
    private $jsonManifestPath;
    private $basePath;
    private $baseUrls;
    private $packages;
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
     * Throw an exception if an entry is missing from the manifest.json
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function strictMode($value): static
    {
        $this->_usedProperties['strictMode'] = true;
        $this->strictMode = $value;
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
    public function versionStrategy($value): static
    {
        $this->_usedProperties['versionStrategy'] = true;
        $this->versionStrategy = $value;
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
    public function version($value): static
    {
        $this->_usedProperties['version'] = true;
        $this->version = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default '%%s?%%s'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function versionFormat($value): static
    {
        $this->_usedProperties['versionFormat'] = true;
        $this->versionFormat = $value;
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
    public function jsonManifestPath($value): static
    {
        $this->_usedProperties['jsonManifestPath'] = true;
        $this->jsonManifestPath = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function basePath($value): static
    {
        $this->_usedProperties['basePath'] = true;
        $this->basePath = $value;
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
    public function baseUrls(mixed $value): static
    {
        $this->_usedProperties['baseUrls'] = true;
        $this->baseUrls = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function package(string $name, array $value = []): \Symfony\Config\Framework\Assets\PackageConfig
    {
        if (!isset($this->packages[$name])) {
            $this->_usedProperties['packages'] = true;
            $this->packages[$name] = new \Symfony\Config\Framework\Assets\PackageConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "package()" has already been initialized. You cannot pass values the second time you call package().');
        }
<<<<<<< HEAD
    
        return $this->packages[$name];
    }
    
=======

        return $this->packages[$name];
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
        if (array_key_exists('strict_mode', $value)) {
            $this->_usedProperties['strictMode'] = true;
            $this->strictMode = $value['strict_mode'];
            unset($value['strict_mode']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('version_strategy', $value)) {
            $this->_usedProperties['versionStrategy'] = true;
            $this->versionStrategy = $value['version_strategy'];
            unset($value['version_strategy']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('version', $value)) {
            $this->_usedProperties['version'] = true;
            $this->version = $value['version'];
            unset($value['version']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('version_format', $value)) {
            $this->_usedProperties['versionFormat'] = true;
            $this->versionFormat = $value['version_format'];
            unset($value['version_format']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('json_manifest_path', $value)) {
            $this->_usedProperties['jsonManifestPath'] = true;
            $this->jsonManifestPath = $value['json_manifest_path'];
            unset($value['json_manifest_path']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('base_path', $value)) {
            $this->_usedProperties['basePath'] = true;
            $this->basePath = $value['base_path'];
            unset($value['base_path']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('base_urls', $value)) {
            $this->_usedProperties['baseUrls'] = true;
            $this->baseUrls = $value['base_urls'];
            unset($value['base_urls']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('packages', $value)) {
            $this->_usedProperties['packages'] = true;
            $this->packages = array_map(fn ($v) => new \Symfony\Config\Framework\Assets\PackageConfig($v), $value['packages']);
            unset($value['packages']);
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
        if (isset($this->_usedProperties['strictMode'])) {
            $output['strict_mode'] = $this->strictMode;
        }
        if (isset($this->_usedProperties['versionStrategy'])) {
            $output['version_strategy'] = $this->versionStrategy;
        }
        if (isset($this->_usedProperties['version'])) {
            $output['version'] = $this->version;
        }
        if (isset($this->_usedProperties['versionFormat'])) {
            $output['version_format'] = $this->versionFormat;
        }
        if (isset($this->_usedProperties['jsonManifestPath'])) {
            $output['json_manifest_path'] = $this->jsonManifestPath;
        }
        if (isset($this->_usedProperties['basePath'])) {
            $output['base_path'] = $this->basePath;
        }
        if (isset($this->_usedProperties['baseUrls'])) {
            $output['base_urls'] = $this->baseUrls;
        }
        if (isset($this->_usedProperties['packages'])) {
            $output['packages'] = array_map(fn ($v) => $v->toArray(), $this->packages);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
