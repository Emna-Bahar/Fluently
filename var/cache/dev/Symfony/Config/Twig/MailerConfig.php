<?php

namespace Symfony\Config\Twig;

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class MailerConfig 
{
    private $htmlToTextConverter;
    private $_usedProperties = [];
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    /**
     * A service implementing the "Symfony\Component\Mime\HtmlToTextConverter\HtmlToTextConverterInterface"
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function htmlToTextConverter($value): static
    {
        $this->_usedProperties['htmlToTextConverter'] = true;
        $this->htmlToTextConverter = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
=======

        return $this;
    }

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
    public function __construct(array $value = [])
    {
        if (array_key_exists('html_to_text_converter', $value)) {
            $this->_usedProperties['htmlToTextConverter'] = true;
            $this->htmlToTextConverter = $value['html_to_text_converter'];
            unset($value['html_to_text_converter']);
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
        if (isset($this->_usedProperties['htmlToTextConverter'])) {
            $output['html_to_text_converter'] = $this->htmlToTextConverter;
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
