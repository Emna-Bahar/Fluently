<?php

namespace Symfony\Config\Framework;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class HttpCacheConfig 
{
    private $enabled;
    private $debug;
    private $traceLevel;
    private $traceHeader;
    private $defaultTtl;
    private $privateHeaders;
    private $skipResponseHeaders;
    private $allowReload;
    private $allowRevalidate;
    private $staleWhileRevalidate;
    private $staleIfError;
    private $terminateOnCacheHit;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default false
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
     * @default '%kernel.debug%'
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function debug($value): static
    {
        $this->_usedProperties['debug'] = true;
        $this->debug = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|'none'|'short'|'full' $value
     * @return $this
     */
    public function traceLevel($value): static
    {
        $this->_usedProperties['traceLevel'] = true;
        $this->traceLevel = $value;
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
    public function traceHeader($value): static
    {
        $this->_usedProperties['traceHeader'] = true;
        $this->traceHeader = $value;
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
    public function defaultTtl($value): static
    {
        $this->_usedProperties['defaultTtl'] = true;
        $this->defaultTtl = $value;
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
    public function privateHeaders(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['privateHeaders'] = true;
        $this->privateHeaders = $value;
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
    public function skipResponseHeaders(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['skipResponseHeaders'] = true;
        $this->skipResponseHeaders = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowReload($value): static
    {
        $this->_usedProperties['allowReload'] = true;
        $this->allowReload = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowRevalidate($value): static
    {
        $this->_usedProperties['allowRevalidate'] = true;
        $this->allowRevalidate = $value;
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
    public function staleWhileRevalidate($value): static
    {
        $this->_usedProperties['staleWhileRevalidate'] = true;
        $this->staleWhileRevalidate = $value;
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
    public function staleIfError($value): static
    {
        $this->_usedProperties['staleIfError'] = true;
        $this->staleIfError = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @default null
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function terminateOnCacheHit($value): static
    {
        $this->_usedProperties['terminateOnCacheHit'] = true;
        $this->terminateOnCacheHit = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
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
        if (array_key_exists('debug', $value)) {
            $this->_usedProperties['debug'] = true;
            $this->debug = $value['debug'];
            unset($value['debug']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('trace_level', $value)) {
            $this->_usedProperties['traceLevel'] = true;
            $this->traceLevel = $value['trace_level'];
            unset($value['trace_level']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('trace_header', $value)) {
            $this->_usedProperties['traceHeader'] = true;
            $this->traceHeader = $value['trace_header'];
            unset($value['trace_header']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('default_ttl', $value)) {
            $this->_usedProperties['defaultTtl'] = true;
            $this->defaultTtl = $value['default_ttl'];
            unset($value['default_ttl']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('private_headers', $value)) {
            $this->_usedProperties['privateHeaders'] = true;
            $this->privateHeaders = $value['private_headers'];
            unset($value['private_headers']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('skip_response_headers', $value)) {
            $this->_usedProperties['skipResponseHeaders'] = true;
            $this->skipResponseHeaders = $value['skip_response_headers'];
            unset($value['skip_response_headers']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_reload', $value)) {
            $this->_usedProperties['allowReload'] = true;
            $this->allowReload = $value['allow_reload'];
            unset($value['allow_reload']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_revalidate', $value)) {
            $this->_usedProperties['allowRevalidate'] = true;
            $this->allowRevalidate = $value['allow_revalidate'];
            unset($value['allow_revalidate']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('stale_while_revalidate', $value)) {
            $this->_usedProperties['staleWhileRevalidate'] = true;
            $this->staleWhileRevalidate = $value['stale_while_revalidate'];
            unset($value['stale_while_revalidate']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('stale_if_error', $value)) {
            $this->_usedProperties['staleIfError'] = true;
            $this->staleIfError = $value['stale_if_error'];
            unset($value['stale_if_error']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('terminate_on_cache_hit', $value)) {
            $this->_usedProperties['terminateOnCacheHit'] = true;
            $this->terminateOnCacheHit = $value['terminate_on_cache_hit'];
            unset($value['terminate_on_cache_hit']);
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
        if (isset($this->_usedProperties['debug'])) {
            $output['debug'] = $this->debug;
        }
        if (isset($this->_usedProperties['traceLevel'])) {
            $output['trace_level'] = $this->traceLevel;
        }
        if (isset($this->_usedProperties['traceHeader'])) {
            $output['trace_header'] = $this->traceHeader;
        }
        if (isset($this->_usedProperties['defaultTtl'])) {
            $output['default_ttl'] = $this->defaultTtl;
        }
        if (isset($this->_usedProperties['privateHeaders'])) {
            $output['private_headers'] = $this->privateHeaders;
        }
        if (isset($this->_usedProperties['skipResponseHeaders'])) {
            $output['skip_response_headers'] = $this->skipResponseHeaders;
        }
        if (isset($this->_usedProperties['allowReload'])) {
            $output['allow_reload'] = $this->allowReload;
        }
        if (isset($this->_usedProperties['allowRevalidate'])) {
            $output['allow_revalidate'] = $this->allowRevalidate;
        }
        if (isset($this->_usedProperties['staleWhileRevalidate'])) {
            $output['stale_while_revalidate'] = $this->staleWhileRevalidate;
        }
        if (isset($this->_usedProperties['staleIfError'])) {
            $output['stale_if_error'] = $this->staleIfError;
        }
        if (isset($this->_usedProperties['terminateOnCacheHit'])) {
            $output['terminate_on_cache_hit'] = $this->terminateOnCacheHit;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
