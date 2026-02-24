<?php

namespace Symfony\Config\Framework\HtmlSanitizer;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class SanitizerConfig 
{
    private $allowSafeElements;
    private $allowStaticElements;
    private $allowElements;
    private $blockElements;
    private $dropElements;
    private $allowAttributes;
    private $dropAttributes;
    private $forceAttributes;
    private $forceHttpsUrls;
    private $allowedLinkSchemes;
    private $allowedLinkHosts;
    private $allowRelativeLinks;
    private $allowedMediaSchemes;
    private $allowedMediaHosts;
    private $allowRelativeMedias;
    private $withAttributeSanitizers;
    private $withoutAttributeSanitizers;
    private $maxInputLength;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Allows "safe" elements and attributes.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowSafeElements($value): static
    {
        $this->_usedProperties['allowSafeElements'] = true;
        $this->allowSafeElements = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Allows all static elements and attributes from the W3C Sanitizer API standard.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowStaticElements($value): static
    {
        $this->_usedProperties['allowStaticElements'] = true;
        $this->allowStaticElements = $value;
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
    public function allowElement(string $name, mixed $value): static
    {
        $this->_usedProperties['allowElements'] = true;
        $this->allowElements[$name] = $value;
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
    public function blockElements(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['blockElements'] = true;
        $this->blockElements = $value;
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
    public function dropElements(ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['dropElements'] = true;
        $this->dropElements = $value;
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
    public function allowAttribute(string $name, mixed $value): static
    {
        $this->_usedProperties['allowAttributes'] = true;
        $this->allowAttributes[$name] = $value;
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
    public function dropAttribute(string $name, mixed $value): static
    {
        $this->_usedProperties['dropAttributes'] = true;
        $this->dropAttributes[$name] = $value;
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
    public function forceAttribute(string $name, ParamConfigurator|array $value): static
    {
        $this->_usedProperties['forceAttributes'] = true;
        $this->forceAttributes[$name] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Transforms URLs using the HTTP scheme to use the HTTPS scheme instead.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function forceHttpsUrls($value): static
    {
        $this->_usedProperties['forceHttpsUrls'] = true;
        $this->forceHttpsUrls = $value;
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
    public function allowedLinkSchemes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedLinkSchemes'] = true;
        $this->allowedLinkSchemes = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Allows only a given list of hosts to be used in links href attributes.
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function allowedLinkHosts(mixed $value = NULL): static
    {
        $this->_usedProperties['allowedLinkHosts'] = true;
        $this->allowedLinkHosts = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Allows relative URLs to be used in links href attributes.
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowRelativeLinks($value): static
    {
        $this->_usedProperties['allowRelativeLinks'] = true;
        $this->allowRelativeLinks = $value;
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
    public function allowedMediaSchemes(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['allowedMediaSchemes'] = true;
        $this->allowedMediaSchemes = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Allows only a given list of hosts to be used in media source attributes (img, audio, video, ...).
     * @default null
     * @param ParamConfigurator|mixed $value
     *
     * @return $this
     */
    public function allowedMediaHosts(mixed $value = NULL): static
    {
        $this->_usedProperties['allowedMediaHosts'] = true;
        $this->allowedMediaHosts = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * Allows relative URLs to be used in media source attributes (img, audio, video, ...).
     * @default false
     * @param ParamConfigurator|bool $value
     * @return $this
     */
    public function allowRelativeMedias($value): static
    {
        $this->_usedProperties['allowRelativeMedias'] = true;
        $this->allowRelativeMedias = $value;
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
    public function withAttributeSanitizers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['withAttributeSanitizers'] = true;
        $this->withAttributeSanitizers = $value;
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
    public function withoutAttributeSanitizers(ParamConfigurator|array $value): static
    {
        $this->_usedProperties['withoutAttributeSanitizers'] = true;
        $this->withoutAttributeSanitizers = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * The maximum length allowed for the sanitized input.
     * @default 0
     * @param ParamConfigurator|int $value
     * @return $this
     */
    public function maxInputLength($value): static
    {
        $this->_usedProperties['maxInputLength'] = true;
        $this->maxInputLength = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('allow_safe_elements', $value)) {
            $this->_usedProperties['allowSafeElements'] = true;
            $this->allowSafeElements = $value['allow_safe_elements'];
            unset($value['allow_safe_elements']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_static_elements', $value)) {
            $this->_usedProperties['allowStaticElements'] = true;
            $this->allowStaticElements = $value['allow_static_elements'];
            unset($value['allow_static_elements']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_elements', $value)) {
            $this->_usedProperties['allowElements'] = true;
            $this->allowElements = $value['allow_elements'];
            unset($value['allow_elements']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('block_elements', $value)) {
            $this->_usedProperties['blockElements'] = true;
            $this->blockElements = $value['block_elements'];
            unset($value['block_elements']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('drop_elements', $value)) {
            $this->_usedProperties['dropElements'] = true;
            $this->dropElements = $value['drop_elements'];
            unset($value['drop_elements']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_attributes', $value)) {
            $this->_usedProperties['allowAttributes'] = true;
            $this->allowAttributes = $value['allow_attributes'];
            unset($value['allow_attributes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('drop_attributes', $value)) {
            $this->_usedProperties['dropAttributes'] = true;
            $this->dropAttributes = $value['drop_attributes'];
            unset($value['drop_attributes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('force_attributes', $value)) {
            $this->_usedProperties['forceAttributes'] = true;
            $this->forceAttributes = $value['force_attributes'];
            unset($value['force_attributes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('force_https_urls', $value)) {
            $this->_usedProperties['forceHttpsUrls'] = true;
            $this->forceHttpsUrls = $value['force_https_urls'];
            unset($value['force_https_urls']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allowed_link_schemes', $value)) {
            $this->_usedProperties['allowedLinkSchemes'] = true;
            $this->allowedLinkSchemes = $value['allowed_link_schemes'];
            unset($value['allowed_link_schemes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allowed_link_hosts', $value)) {
            $this->_usedProperties['allowedLinkHosts'] = true;
            $this->allowedLinkHosts = $value['allowed_link_hosts'];
            unset($value['allowed_link_hosts']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_relative_links', $value)) {
            $this->_usedProperties['allowRelativeLinks'] = true;
            $this->allowRelativeLinks = $value['allow_relative_links'];
            unset($value['allow_relative_links']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allowed_media_schemes', $value)) {
            $this->_usedProperties['allowedMediaSchemes'] = true;
            $this->allowedMediaSchemes = $value['allowed_media_schemes'];
            unset($value['allowed_media_schemes']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allowed_media_hosts', $value)) {
            $this->_usedProperties['allowedMediaHosts'] = true;
            $this->allowedMediaHosts = $value['allowed_media_hosts'];
            unset($value['allowed_media_hosts']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('allow_relative_medias', $value)) {
            $this->_usedProperties['allowRelativeMedias'] = true;
            $this->allowRelativeMedias = $value['allow_relative_medias'];
            unset($value['allow_relative_medias']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('with_attribute_sanitizers', $value)) {
            $this->_usedProperties['withAttributeSanitizers'] = true;
            $this->withAttributeSanitizers = $value['with_attribute_sanitizers'];
            unset($value['with_attribute_sanitizers']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('without_attribute_sanitizers', $value)) {
            $this->_usedProperties['withoutAttributeSanitizers'] = true;
            $this->withoutAttributeSanitizers = $value['without_attribute_sanitizers'];
            unset($value['without_attribute_sanitizers']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('max_input_length', $value)) {
            $this->_usedProperties['maxInputLength'] = true;
            $this->maxInputLength = $value['max_input_length'];
            unset($value['max_input_length']);
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
        if (isset($this->_usedProperties['allowSafeElements'])) {
            $output['allow_safe_elements'] = $this->allowSafeElements;
        }
        if (isset($this->_usedProperties['allowStaticElements'])) {
            $output['allow_static_elements'] = $this->allowStaticElements;
        }
        if (isset($this->_usedProperties['allowElements'])) {
            $output['allow_elements'] = $this->allowElements;
        }
        if (isset($this->_usedProperties['blockElements'])) {
            $output['block_elements'] = $this->blockElements;
        }
        if (isset($this->_usedProperties['dropElements'])) {
            $output['drop_elements'] = $this->dropElements;
        }
        if (isset($this->_usedProperties['allowAttributes'])) {
            $output['allow_attributes'] = $this->allowAttributes;
        }
        if (isset($this->_usedProperties['dropAttributes'])) {
            $output['drop_attributes'] = $this->dropAttributes;
        }
        if (isset($this->_usedProperties['forceAttributes'])) {
            $output['force_attributes'] = $this->forceAttributes;
        }
        if (isset($this->_usedProperties['forceHttpsUrls'])) {
            $output['force_https_urls'] = $this->forceHttpsUrls;
        }
        if (isset($this->_usedProperties['allowedLinkSchemes'])) {
            $output['allowed_link_schemes'] = $this->allowedLinkSchemes;
        }
        if (isset($this->_usedProperties['allowedLinkHosts'])) {
            $output['allowed_link_hosts'] = $this->allowedLinkHosts;
        }
        if (isset($this->_usedProperties['allowRelativeLinks'])) {
            $output['allow_relative_links'] = $this->allowRelativeLinks;
        }
        if (isset($this->_usedProperties['allowedMediaSchemes'])) {
            $output['allowed_media_schemes'] = $this->allowedMediaSchemes;
        }
        if (isset($this->_usedProperties['allowedMediaHosts'])) {
            $output['allowed_media_hosts'] = $this->allowedMediaHosts;
        }
        if (isset($this->_usedProperties['allowRelativeMedias'])) {
            $output['allow_relative_medias'] = $this->allowRelativeMedias;
        }
        if (isset($this->_usedProperties['withAttributeSanitizers'])) {
            $output['with_attribute_sanitizers'] = $this->withAttributeSanitizers;
        }
        if (isset($this->_usedProperties['withoutAttributeSanitizers'])) {
            $output['without_attribute_sanitizers'] = $this->withoutAttributeSanitizers;
        }
        if (isset($this->_usedProperties['maxInputLength'])) {
            $output['max_input_length'] = $this->maxInputLength;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
