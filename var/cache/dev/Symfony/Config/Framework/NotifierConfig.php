<?php

namespace Symfony\Config\Framework;

require_once __DIR__.\DIRECTORY_SEPARATOR.'Notifier'.\DIRECTORY_SEPARATOR.'AdminRecipientConfig.php';

use Symfony\Component\Config\Loader\ParamConfigurator;
use Symfony\Component\Config\Definition\Exception\InvalidConfigurationException;

/**
 * This class is automatically generated to help in creating a config.
 */
class NotifierConfig 
{
    private $enabled;
    private $messageBus;
    private $chatterTransports;
    private $texterTransports;
    private $notificationOnFailedMessages;
    private $channelPolicy;
    private $adminRecipients;
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
     * The message bus to use. Defaults to the default bus if the Messenger component is installed.
     * @default null
     * @param ParamConfigurator|mixed $value
     * @return $this
     */
    public function messageBus($value): static
    {
        $this->_usedProperties['messageBus'] = true;
        $this->messageBus = $value;
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
    public function chatterTransport(string $name, mixed $value): static
    {
        $this->_usedProperties['chatterTransports'] = true;
        $this->chatterTransports[$name] = $value;
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
    public function texterTransport(string $name, mixed $value): static
    {
        $this->_usedProperties['texterTransports'] = true;
        $this->texterTransports[$name] = $value;
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
    public function notificationOnFailedMessages($value): static
    {
        $this->_usedProperties['notificationOnFailedMessages'] = true;
        $this->notificationOnFailedMessages = $value;
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
    public function channelPolicy(string $name, ParamConfigurator|string|array $value): static
    {
        $this->_usedProperties['channelPolicy'] = true;
        $this->channelPolicy[$name] = $value;
<<<<<<< HEAD
    
        return $this;
    }
    
    public function adminRecipient(array $value = []): \Symfony\Config\Framework\Notifier\AdminRecipientConfig
    {
        $this->_usedProperties['adminRecipients'] = true;
    
        return $this->adminRecipients[] = new \Symfony\Config\Framework\Notifier\AdminRecipientConfig($value);
    }
    
=======

        return $this;
    }

    public function adminRecipient(array $value = []): \Symfony\Config\Framework\Notifier\AdminRecipientConfig
    {
        $this->_usedProperties['adminRecipients'] = true;

        return $this->adminRecipients[] = new \Symfony\Config\Framework\Notifier\AdminRecipientConfig($value);
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
        if (array_key_exists('message_bus', $value)) {
            $this->_usedProperties['messageBus'] = true;
            $this->messageBus = $value['message_bus'];
            unset($value['message_bus']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('chatter_transports', $value)) {
            $this->_usedProperties['chatterTransports'] = true;
            $this->chatterTransports = $value['chatter_transports'];
            unset($value['chatter_transports']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('texter_transports', $value)) {
            $this->_usedProperties['texterTransports'] = true;
            $this->texterTransports = $value['texter_transports'];
            unset($value['texter_transports']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('notification_on_failed_messages', $value)) {
            $this->_usedProperties['notificationOnFailedMessages'] = true;
            $this->notificationOnFailedMessages = $value['notification_on_failed_messages'];
            unset($value['notification_on_failed_messages']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('channel_policy', $value)) {
            $this->_usedProperties['channelPolicy'] = true;
            $this->channelPolicy = $value['channel_policy'];
            unset($value['channel_policy']);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        if (array_key_exists('admin_recipients', $value)) {
            $this->_usedProperties['adminRecipients'] = true;
            $this->adminRecipients = array_map(fn ($v) => new \Symfony\Config\Framework\Notifier\AdminRecipientConfig($v), $value['admin_recipients']);
            unset($value['admin_recipients']);
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
        if (isset($this->_usedProperties['messageBus'])) {
            $output['message_bus'] = $this->messageBus;
        }
        if (isset($this->_usedProperties['chatterTransports'])) {
            $output['chatter_transports'] = $this->chatterTransports;
        }
        if (isset($this->_usedProperties['texterTransports'])) {
            $output['texter_transports'] = $this->texterTransports;
        }
        if (isset($this->_usedProperties['notificationOnFailedMessages'])) {
            $output['notification_on_failed_messages'] = $this->notificationOnFailedMessages;
        }
        if (isset($this->_usedProperties['channelPolicy'])) {
            $output['channel_policy'] = $this->channelPolicy;
        }
        if (isset($this->_usedProperties['adminRecipients'])) {
            $output['admin_recipients'] = array_map(fn ($v) => $v->toArray(), $this->adminRecipients);
        }
<<<<<<< HEAD
    
=======

>>>>>>> 6c9df7ec80ddf3eeef0e90abce79c2110332efac
        return $output;
    }

}
