<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php */
class __TwigTemplate_62d6211514c415641d2759db202c097f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<?php

namespace Mautic\\ChannelBundle\\PreferenceBuilder;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\Entity\\LeadEventLog;
use Mautic\\LeadBundle\\Entity\\DoNotContact;
use Psr\\Log\\LoggerInterface;

class PreferenceBuilder
{
    /**
     * @var ChannelPreferences[]
     */
    private array \$channels = [];

    public function __construct(
        ArrayCollection \$logs,
        private Event \$event,
        array \$channels,
        private LoggerInterface \$logger
    ) {
        \$this->buildRules(\$logs, \$channels);
    }

    /**
     * @return ChannelPreferences[]
     */
    public function getChannelPreferences()
    {
        return \$this->channels;
    }

    public function removeLogFromAllChannels(LeadEventLog \$log): void
    {
        foreach (\$this->channels as \$channelPreferences) {
            \$channelPreferences->removeLog(\$log);
        }
    }

    /**
     * @param string \$channel
     * @param int    \$priority
     */
    private function addChannelRule(\$channel, array \$rule, LeadEventLog \$log, \$priority): void
    {
        \$channelPreferences = \$this->getChannelPreferenceObject(\$channel, \$priority);

        if (DoNotContact::IS_CONTACTABLE !== \$rule['dnc']) {
            \$log->appendToMetadata(
                [
                    \$channel => [
                        'failed' => 1,
                        'dnc'    => \$rule['dnc'],
                    ],
                ]
            );

            return;
        }

        \$this->logger->debug(\"MARKETING MESSAGE: Set \$channel as priority \$priority for contact ID #\".\$log->getLead()->getId());

        \$channelPreferences->addLog(\$log, \$priority);
    }

    /**
     * @param string \$channel
     *
     * @return ChannelPreferences
     */
    private function getChannelPreferenceObject(\$channel, \$priority)
    {
        if (!isset(\$this->channels[\$channel])) {
            \$this->channels[\$channel] = new ChannelPreferences(\$this->event);
        }

        \$this->channels[\$channel]->addPriority(\$priority);

        return \$this->channels[\$channel];
    }

    private function buildRules(ArrayCollection \$logs, array \$channels): void
    {
        /** @var LeadEventLog \$log */
        foreach (\$logs as \$log) {
            \$channelRules = \$log->getLead()->getChannelRules();
            \$allChannels  = \$channels;
            \$priority     = 1;

            // Build priority based on channel rules
            foreach (\$channelRules as \$channel => \$rule) {
                \$this->addChannelRule(\$channel, \$rule, \$log, \$priority);
                ++\$priority;
                unset(\$allChannels[\$channel]);
            }

            // Add the rest of the channels as least priority
            foreach (\$allChannels as \$channel => \$messageSettings) {
                \$this->addChannelRule(\$channel, ['dnc' => DoNotContact::IS_CONTACTABLE], \$log, \$priority);
                ++\$priority;
            }
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@bundles/ChannelBundle/PreferenceBuilder/PreferenceBuilder.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\PreferenceBuilder\\PreferenceBuilder.php");
    }
}
