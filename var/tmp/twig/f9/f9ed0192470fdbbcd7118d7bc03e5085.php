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

/* @bundles/CampaignBundle/Helper/ChannelExtractor.php */
class __TwigTemplate_51e6e74b6de63bcfc97e7dda87906e21 extends Template
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

namespace Mautic\\CampaignBundle\\Helper;

use Mautic\\CampaignBundle\\Entity\\ChannelInterface;
use Mautic\\CampaignBundle\\Entity\\Event;
use Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor;

class ChannelExtractor
{
    public static function setChannel(ChannelInterface \$entity, Event \$event, AbstractEventAccessor \$eventConfig): void
    {
        // Allow event to update itself
        \$isSelf = \$entity === \$event;

        if (!\$isSelf && \$entity->getChannel()) {
            return;
        }

        if (!\$channel = \$eventConfig->getChannel()) {
            return;
        }

        \$entity->setChannel(\$channel);

        if (!\$channelIdField = \$eventConfig->getChannelIdField()) {
            return;
        }

        if (!\$event->getProperties()) {
            return;
        }

        \$entity->setChannelId(
            self::getChannelId(\$event->getProperties(), \$channelIdField)
        );
    }

    /**
     * @param string \$channelIdField
     */
    private static function getChannelId(array \$properties, \$channelIdField): ?int
    {
        if (empty(\$properties[\$channelIdField])) {
            return null;
        }

        \$channelId = \$properties[\$channelIdField];
        if (is_array(\$channelId) && (1 === count(\$channelId))) {
            // Only store channel ID if a single item was selected
            \$channelId = reset(\$channelId);
        }

        if (!is_numeric(\$channelId)) {
            return null;
        }

        return (int) \$channelId;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/Helper/ChannelExtractor.php";
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
        return new Source("", "@bundles/CampaignBundle/Helper/ChannelExtractor.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\Helper\\ChannelExtractor.php");
    }
}
