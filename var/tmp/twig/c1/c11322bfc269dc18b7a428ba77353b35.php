<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/ChannelBundle/Event/ChannelEvent.php */
class __TwigTemplate_dad404e0e98a280f6b0348e94ca19864 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\ChannelBundle\\Event;

use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\CoreBundle\\Event\\CommonEvent;

class ChannelEvent extends CommonEvent
{
    /**
     * @var array
     */
    protected \$channels = [];

    /**
     * @var array
     */
    protected \$featureChannels = [];

    /**
     * Adds a submit action to the list of available actions.
     *
     * @param string \$channel a unique identifier; it is recommended that it be namespaced if there are multiple entities in a channel  i.e. something.something
     * @param array  \$config  Should be keyed by the feature it supports that contains an array of feature configuration options. i.e.
     *                        \$config = [
     *                        MessageModel::CHANNEL_FEATURE => [
     *                        'lookupFormType'       => (optional) Form type class/alias for the channel lookup list,
     *                        'propertiesFormType'   => (optional) Form type class/alias for the channel properties if a lookup list is not used,
     *
     *                        'channelTemplate'      => (optional) template to inject UI/DOM into the bottom of the channel's tab
     *                        'formTheme'           => (optional) theme directory for custom form types
     *
     *                          ]
     *                       ]
     *
     * @return \$this
     */
    public function addChannel(\$channel, array \$config = [])
    {
        \$this->channels[\$channel] = \$config;

        foreach (\$config as \$feature => \$featureConfig) {
            \$this->featureChannels[\$feature][\$channel] = \$featureConfig;
        }

        return \$this;
    }

    /**
     * Returns registered channels with their configs.
     *
     * @return array
     */
    public function getChannelConfigs()
    {
        return \$this->channels;
    }

    /**
     * Returns repository name for the provided channel. Defaults to classic naming convention.
     *
     * @param string \$channel
     *
     * @return string
     */
    public function getRepositoryName(\$channel)
    {
        if (isset(\$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['repository'])) {
            return \$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['repository'];
        }

        // if not defined, try the classic naming convention
        \$channel = ucfirst(\$channel);
        \$class   = \"\\Mautic\\\\{\$channel}Bundle\\Entity\\\\{\$channel}\";
        \\assert(class_exists(\$class));

        return \$class;
    }

    /**
     * Returns the name of the column holding the channel name for the provided channel. Defaults to 'name'.
     *
     * @param string \$channel
     *
     * @return string
     */
    public function getNameColumn(\$channel)
    {
        return \$this->channels[\$channel][MessageModel::CHANNEL_FEATURE]['nameColumn'] ?? 'name';
    }

    /**
     * @return array
     */
    public function getFeatureChannels()
    {
        return \$this->featureChannels;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ChannelBundle/Event/ChannelEvent.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/ChannelBundle/Event/ChannelEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Event\\ChannelEvent.php");
    }
}
