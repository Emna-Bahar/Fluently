<?php

namespace Symfony\Config\Framework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Translator'.\DIRECTORY_SEPARATOR.'PseudoLocalizationConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Translator'.\DIRECTORY_SEPARATOR.'ProviderConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class TranslatorConfig 
{
    private $enabled;
    private $fallbacks;
    private $logging;
    private $formatter;
    private $cacheDir;
    private $defaultPath;
    private $paths;
    private $pseudoLocalization;
    private $providers;
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
     * @param ParamConfigurator|list<ParamConfigurator|mixed>|string $value
     *
     * @return $this
     */
    public function fallbacks(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['fallbacks'] = true;
        $this->fallbacks = $value;
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
    public function logging($value): static
    {
        $this->_usedProperties['logging'] = true;
        $this->logging = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default 'translator.formatter.default'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function formatter($value): static
    {
        $this->_usedProperties['formatter'] = true;
        $this->formatter = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default '%kernel.cache_dir%/translations'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function cacheDir($value): static
    {
        $this->_usedProperties['cacheDir'] = true;
        $this->cacheDir = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * The default path used to load translations
     * @default '%kernel.project_dir%/translations'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function defaultPath($value): static
    {
        $this->_usedProperties['defaultPath'] = true;
        $this->defaultPath = $value;
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
    public function paths(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['paths'] = true;
        $this->paths = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default {"enabled":false,"accents":true,"expansion_factor":1,"brackets":true,"parse_html":false,"localizable_html_attributes":[]}
    */
    public function pseudoLocalization(array $value = []): \Symfony\Config\Framework\Translator\PseudoLocalizationConfig
    {
        if (null === $this->pseudoLocalization) {
            $this->_usedProperties['pseudoLocalization'] = true;
            $this->pseudoLocalization = new \Symfony\Config\Framework\Translator\PseudoLocalizationConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "pseudoLocalization()" has already been initialized. You cannot pass values the second time you call pseudoLocalization().');
        }
<<<<<<< HEAD
    
        return $this->pseudoLocalization;
    }
    
=======

        return $this->pseudoLocalization;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Translation providers you can read/write your translations from
    */
    public function provider(string $name, array $value = []): \Symfony\Config\Framework\Translator\ProviderConfig
    {
        if (!isset($this->providers[$name])) {
            $this->_usedProperties['providers'] = true;
            $this->providers[$name] = new \Symfony\Config\Framework\Translator\ProviderConfig($value);
        } elseif (1 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "provider()" has already been initialized. You cannot pass values the second time you call provider().');
        }
<<<<<<< HEAD
    
        return $this->providers[$name];
    }
    
=======

        return $this->providers[$name];
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
        if (array_key_exists('fallbacks', $value)) {
            $this->_usedProperties['fallbacks'] = true;
            $this->fallbacks = $value['fallbacks'];
            unset($value['fallbacks']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('logging', $value)) {
            $this->_usedProperties['logging'] = true;
            $this->logging = $value['logging'];
            unset($value['logging']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('formatter', $value)) {
            $this->_usedProperties['formatter'] = true;
            $this->formatter = $value['formatter'];
            unset($value['formatter']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('cache_dir', $value)) {
            $this->_usedProperties['cacheDir'] = true;
            $this->cacheDir = $value['cache_dir'];
            unset($value['cache_dir']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('default_path', $value)) {
            $this->_usedProperties['defaultPath'] = true;
            $this->defaultPath = $value['default_path'];
            unset($value['default_path']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('paths', $value)) {
            $this->_usedProperties['paths'] = true;
            $this->paths = $value['paths'];
            unset($value['paths']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('pseudo_localization', $value)) {
            $this->_usedProperties['pseudoLocalization'] = true;
            $this->pseudoLocalization = \is_array($value['pseudo_localization']) ? new \Symfony\Config\Framework\Translator\PseudoLocalizationConfig($value['pseudo_localization']) : $value['pseudo_localization'];
            unset($value['pseudo_localization']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('providers', $value)) {
            $this->_usedProperties['providers'] = true;
            $this->providers = array_map(fn ($v) => new \Symfony\Config\Framework\Translator\ProviderConfig($v), $value['providers']);
            unset($value['providers']);
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
        if (isset($this->_usedProperties['fallbacks'])) {
            $output['fallbacks'] = $this->fallbacks;
        }
        if (isset($this->_usedProperties['logging'])) {
            $output['logging'] = $this->logging;
        }
        if (isset($this->_usedProperties['formatter'])) {
            $output['formatter'] = $this->formatter;
        }
        if (isset($this->_usedProperties['cacheDir'])) {
            $output['cache_dir'] = $this->cacheDir;
        }
        if (isset($this->_usedProperties['defaultPath'])) {
            $output['default_path'] = $this->defaultPath;
        }
        if (isset($this->_usedProperties['paths'])) {
            $output['paths'] = $this->paths;
        }
        if (isset($this->_usedProperties['pseudoLocalization'])) {
            $output['pseudo_localization'] = $this->pseudoLocalization instanceof \Symfony\Config\Framework\Translator\PseudoLocalizationConfig ? $this->pseudoLocalization->toArray() : $this->pseudoLocalization;
        }
        if (isset($this->_usedProperties['providers'])) {
            $output['providers'] = array_map(fn ($v) => $v->toArray(), $this->providers);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
