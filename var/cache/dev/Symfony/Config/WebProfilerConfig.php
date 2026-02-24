<?php

namespace Symfony\Config;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class WebProfilerConfig implements \Symfony\Component\Config\Builder\ConfigBuilderInterface
{
    private $toolbar;
    private $interceptRedirects;
    private $excludedAjaxPaths;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function toolbar($value): static
    {
        $this->_usedProperties['toolbar'] = true;
        $this->toolbar = $value;
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
    public function interceptRedirects($value): static
    {
        $this->_usedProperties['interceptRedirects'] = true;
        $this->interceptRedirects = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default '^/((index|app(_[\\w]+)?)\\.php/)?_wdt'
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function excludedAjaxPaths($value): static
    {
        $this->_usedProperties['excludedAjaxPaths'] = true;
        $this->excludedAjaxPaths = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function getExtensionAlias(): string
    {
        return 'web_profiler';
    }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('toolbar', $value)) {
            $this->_usedProperties['toolbar'] = true;
            $this->toolbar = $value['toolbar'];
            unset($value['toolbar']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('intercept_redirects', $value)) {
            $this->_usedProperties['interceptRedirects'] = true;
            $this->interceptRedirects = $value['intercept_redirects'];
            unset($value['intercept_redirects']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('excluded_ajax_paths', $value)) {
            $this->_usedProperties['excludedAjaxPaths'] = true;
            $this->excludedAjaxPaths = $value['excluded_ajax_paths'];
            unset($value['excluded_ajax_paths']);
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
        if (isset($this->_usedProperties['toolbar'])) {
            $output['toolbar'] = $this->toolbar;
        }
        if (isset($this->_usedProperties['interceptRedirects'])) {
            $output['intercept_redirects'] = $this->interceptRedirects;
        }
        if (isset($this->_usedProperties['excludedAjaxPaths'])) {
            $output['excluded_ajax_paths'] = $this->excludedAjaxPaths;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
