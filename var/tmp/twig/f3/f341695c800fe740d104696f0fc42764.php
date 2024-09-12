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

/* @bundles/CampaignBundle/EventCollector/Accessor/Event/AbstractEventAccessor.php */
class __TwigTemplate_1a56ec5fd7e823c9890dc4a0f290c61f extends Template
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

namespace Mautic\\CampaignBundle\\EventCollector\\Accessor\\Event;

abstract class AbstractEventAccessor
{
    /**
     * @var array
     */
    protected \$systemProperties = [
        'label',
        'description',
        'formType',
        'formTypeOptions',
        'formTheme',
        'timelineTemplate',
        'connectionRestrictions',
        'channel',
        'channelIdField',
    ];

    private array \$extraProperties = [];

    public function __construct(
        protected array \$config
    ) {
        \$this->filterExtraProperties();
    }

    /**
     * @return string
     */
    public function getLabel()
    {
        return \$this->getProperty('label');
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return \$this->getProperty('description');
    }

    /**
     * @return string
     */
    public function getFormType()
    {
        return \$this->getProperty('formType');
    }

    /**
     * @return array
     */
    public function getFormTypeOptions()
    {
        return \$this->getProperty('formTypeOptions', []);
    }

    /**
     * @return string
     */
    public function getFormTheme()
    {
        return \$this->getProperty('formTheme');
    }

    /**
     * @return string
     */
    public function getTimelineTemplate()
    {
        return \$this->getProperty('timelineTemplate');
    }

    /**
     * @return array
     */
    public function getConnectionRestrictions()
    {
        return \$this->getProperty('connectionRestrictions', []);
    }

    /**
     * @return array
     */
    public function getExtraProperties()
    {
        return \$this->extraProperties;
    }

    /**
     * @return string
     */
    public function getChannel()
    {
        return \$this->getProperty('channel');
    }

    /**
     * @return mixed
     */
    public function getChannelIdField()
    {
        return \$this->getProperty('channelIdField');
    }

    /**
     * @deprecated pre 2.13.0 support; to be removed in 3.0
     */
    public function getConfig()
    {
        return \$this->config;
    }

    /**
     * @param string \$property
     * @param mixed  \$default
     *
     * @return mixed
     */
    protected function getProperty(\$property, \$default = null)
    {
        return \$this->config[\$property] ?? \$default;
    }

    /**
     * Calculate the difference in systemProperties and what was fed to the class.
     */
    private function filterExtraProperties(): void
    {
        \$this->extraProperties = array_diff_key(\$this->config, array_flip(\$this->systemProperties));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CampaignBundle/EventCollector/Accessor/Event/AbstractEventAccessor.php";
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
        return new Source("", "@bundles/CampaignBundle/EventCollector/Accessor/Event/AbstractEventAccessor.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CampaignBundle\\EventCollector\\Accessor\\Event\\AbstractEventAccessor.php");
    }
}
