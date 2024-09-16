<?php

/*
 * @copyright   2019 Mautic Contributors. All rights reserved
 * @author      Mautic
 *
 * @link        http://mautic.org
 *
 * @license     GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

namespace MauticPlugin\MauticRandomSmtpBundle\Randomizer;

use Mautic\CoreBundle\Helper\ArrayHelper;
use Mautic\PluginBundle\Helper\IntegrationHelper;
use MauticPlugin\MauticRandomSmtpBundle\Exception\HostNotExistInCsvRowException;
use MauticPlugin\MauticRandomSmtpBundle\Exception\IntegrationDisableException;
use MauticPlugin\MauticRandomSmtpBundle\Exception\SmtpCsvListNotExistException;
use MauticPlugin\MauticRandomSmtpBundle\Swiftmailer\Transport\RandomSmtpTransport;

class SmtpRandomizer
{
    /** @var  array */
    private $config;

    /** @var  array */
    private $smtps;

    /** @var  array */
    private $smtp;

    /**
     * {@inheritdoc}
     */
    public function __construct(IntegrationHelper $integrationHelper)
    {
        $integration = $integrationHelper->getIntegrationObject('RandomSmtp');

        if (!$integration || $integration->getIntegrationSettings()->getIsPublished() !== true) {
            throw new IntegrationDisableException('Integration RandomSmtp doesn\'t exist or is unpublished');
        }

        $config = $this->config = $integration->mergeConfigToFeatureSettings();
        $smtps = explode("\n", $config['smtps']);

        if (empty($smtps) || end($smtps) === '') {
            throw new SmtpCsvListNotExistException('Smtp CSV list not exist. Please set it up in plugin settings.');
        }

        $this->smtps = array_map('str_getcsv', $smtps);
    }

    /**
     * @param RandomSmtpTransport $randomSmtpTransport
     * @param \Swift_Mime_Message  $message
     *
     * @throws HostNotExistInCsvRowException
     */
    public function randomize(RandomSmtpTransport &$randomSmtpTransport, \Swift_Mime_Message &$message = null)
    {
        $smtp = $this->getRandomSmtp();
        if (!$host = ArrayHelper::getValue($this->getConfigParameter('host'), $smtp)) {
            throw new HostNotExistInCsvRowException('Can\'t find host on column position '.sprintf('"%s"', $this->getConfigParameter('host')));
        }

        $randomSmtpTransport->setHost($host);
        $randomSmtpTransport->setPort(ArrayHelper::getValue($this->getConfigParameter('port'), $smtp, 25));
        $randomSmtpTransport->setEncryption(ArrayHelper::getValue($this->getConfigParameter('encryption'), $smtp, ''));
        $randomSmtpTransport->setAuthMode(ArrayHelper::getValue($this->getConfigParameter('auth_mode'), $smtp, ''));
        $randomSmtpTransport->setUsername(ArrayHelper::getValue($this->getConfigParameter('username'), $smtp, ''));
        $randomSmtpTransport->setPassword(ArrayHelper::getValue($this->getConfigParameter('password'), $smtp, ''));

        // change sender
        if ($message && $fromEmail = ArrayHelper::getValue($this->getConfigParameter('fromEmail'), $smtp, false)) {
            $message->setFrom($fromEmail, ArrayHelper::getValue($this->getConfigParameter('fromName'), $smtp, null));
            $this->smtp = null; // reset after message is sent
        }
    }

    /**
     * @return array
     */
    private function getRandomSmtp()
    {
        if (!$this->smtp) {
            $smtps = $this->smtps;
            shuffle($smtps); // shuffle the SMTPs to get a random one
            $this->smtp  = end($smtps); // or use array_rand to select a truly random one
        }

        return $this->smtp;
    }

    /**
     * Get the configuration parameter for the specified key.
     *
     * @param string $key
     *
     * @return mixed|null
     */
    private function getConfigParameter($key)
    {
        return isset($this->config[$key]) && $this->config[$key] !== '' ? $this->config[$key] : null;
    }
}
