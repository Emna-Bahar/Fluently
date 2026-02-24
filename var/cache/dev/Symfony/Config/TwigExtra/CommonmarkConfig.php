<?php

namespace Symfony\Config\TwigExtra;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Commonmark'.\DIRECTORY_SEPARATOR.'RendererConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Commonmark'.\DIRECTORY_SEPARATOR.'SlugNormalizerConfig.php';
require_once __DIR__.\DIRECTORY_SEPARATOR.'Commonmark'.\DIRECTORY_SEPARATOR.'CommonmarkConfig.php';

use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;
use Symfony\Component\Config\Loader\ParamConfigurator;

/**
 * This class is automatically generated to help in creating a config.
 */
class CommonmarkConfig 
{
    private $renderer;
    private $htmlInput;
    private $allowUnsafeLinks;
    private $maxNestingLevel;
    private $maxDelimitersPerLine;
    private $slugNormalizer;
    private $commonmark;
    private $_usedProperties = [];
    private $_extraKeys;
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Array of options for rendering HTML.
    */
    public function renderer(array $value = []): \Symfony\Config\TwigExtra\Commonmark\RendererConfig
    {
        if (null === $this->renderer) {
            $this->_usedProperties['renderer'] = true;
            $this->renderer = new \Symfony\Config\TwigExtra\Commonmark\RendererConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "renderer()" has already been initialized. You cannot pass values the second time you call renderer().');
        }
<<<<<<< HEAD
    
        return $this->renderer;
    }
    
=======

        return $this->renderer;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * How to handle HTML input.
     * @default null
     * @param ParamConfigurator|'strip'|'allow'|'escape' $value
     * @return $this
     */
    public function htmlInput($value): static
    {
        $this->_usedProperties['htmlInput'] = true;
        $this->htmlInput = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Remove risky link and image URLs by setting this to false.
     * @default true
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowUnsafeLinks($value): static
    {
        $this->_usedProperties['allowUnsafeLinks'] = true;
        $this->allowUnsafeLinks = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * The maximum nesting level for blocks.
     * @default 9223372036854775807
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxNestingLevel($value): static
    {
        $this->_usedProperties['maxNestingLevel'] = true;
        $this->maxNestingLevel = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * The maximum number of strong/emphasis delimiters per line.
     * @default 9223372036854775807
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxDelimitersPerLine($value): static
    {
        $this->_usedProperties['maxDelimitersPerLine'] = true;
        $this->maxDelimitersPerLine = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Array of options for configuring how URL-safe slugs are created.
    */
    public function slugNormalizer(array $value = []): \Symfony\Config\TwigExtra\Commonmark\SlugNormalizerConfig
    {
        if (null === $this->slugNormalizer) {
            $this->_usedProperties['slugNormalizer'] = true;
            $this->slugNormalizer = new \Symfony\Config\TwigExtra\Commonmark\SlugNormalizerConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "slugNormalizer()" has already been initialized. You cannot pass values the second time you call slugNormalizer().');
        }
<<<<<<< HEAD
    
        return $this->slugNormalizer;
    }
    
=======

        return $this->slugNormalizer;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Array of options for configuring the CommonMark core extension.
    */
    public function commonmark(array $value = []): \Symfony\Config\TwigExtra\Commonmark\CommonmarkConfig
    {
        if (null === $this->commonmark) {
            $this->_usedProperties['commonmark'] = true;
            $this->commonmark = new \Symfony\Config\TwigExtra\Commonmark\CommonmarkConfig($value);
        } elseif (0 < \func_num_args()) {
            throw new InvalidConfigurationException('The node created by "commonmark()" has already been initialized. You cannot pass values the second time you call commonmark().');
        }
<<<<<<< HEAD
    
        return $this->commonmark;
    }
    
=======

        return $this->commonmark;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('renderer', $value)) {
            $this->_usedProperties['renderer'] = true;
            $this->renderer = new \Symfony\Config\TwigExtra\Commonmark\RendererConfig($value['renderer']);
            unset($value['renderer']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('html_input', $value)) {
            $this->_usedProperties['htmlInput'] = true;
            $this->htmlInput = $value['html_input'];
            unset($value['html_input']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_unsafe_links', $value)) {
            $this->_usedProperties['allowUnsafeLinks'] = true;
            $this->allowUnsafeLinks = $value['allow_unsafe_links'];
            unset($value['allow_unsafe_links']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('max_nesting_level', $value)) {
            $this->_usedProperties['maxNestingLevel'] = true;
            $this->maxNestingLevel = $value['max_nesting_level'];
            unset($value['max_nesting_level']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('max_delimiters_per_line', $value)) {
            $this->_usedProperties['maxDelimitersPerLine'] = true;
            $this->maxDelimitersPerLine = $value['max_delimiters_per_line'];
            unset($value['max_delimiters_per_line']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('slug_normalizer', $value)) {
            $this->_usedProperties['slugNormalizer'] = true;
            $this->slugNormalizer = new \Symfony\Config\TwigExtra\Commonmark\SlugNormalizerConfig($value['slug_normalizer']);
            unset($value['slug_normalizer']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('commonmark', $value)) {
            $this->_usedProperties['commonmark'] = true;
            $this->commonmark = new \Symfony\Config\TwigExtra\Commonmark\CommonmarkConfig($value['commonmark']);
            unset($value['commonmark']);
        }
<<<<<<< HEAD
    
        $this->_extraKeys = $value;
    
    }
    
=======

        $this->_extraKeys = $value;

    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function toArray(): array
    {
        $output = [];
        if (isset($this->_usedProperties['renderer'])) {
            $output['renderer'] = $this->renderer->toArray();
        }
        if (isset($this->_usedProperties['htmlInput'])) {
            $output['html_input'] = $this->htmlInput;
        }
        if (isset($this->_usedProperties['allowUnsafeLinks'])) {
            $output['allow_unsafe_links'] = $this->allowUnsafeLinks;
        }
        if (isset($this->_usedProperties['maxNestingLevel'])) {
            $output['max_nesting_level'] = $this->maxNestingLevel;
        }
        if (isset($this->_usedProperties['maxDelimitersPerLine'])) {
            $output['max_delimiters_per_line'] = $this->maxDelimitersPerLine;
        }
        if (isset($this->_usedProperties['slugNormalizer'])) {
            $output['slug_normalizer'] = $this->slugNormalizer->toArray();
        }
        if (isset($this->_usedProperties['commonmark'])) {
            $output['commonmark'] = $this->commonmark->toArray();
        }
<<<<<<< HEAD
    
        return $output + $this->_extraKeys;
    }
    
=======

        return $output + $this->_extraKeys;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function set(string $key, mixed $value): static
    {
        $this->_extraKeys[$key] = $value;
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $this;
    }

}
