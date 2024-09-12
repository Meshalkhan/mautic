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

/* @bundles/ChannelBundle/Twig/ChannelExtension.php */
class __TwigTemplate_1f2e285a46771c1954a18e2fc7b0a5fc extends Template
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

declare(strict_types=1);

namespace Mautic\\ChannelBundle\\Twig;

use Mautic\\ChannelBundle\\Helper\\ChannelListHelper;
use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Mautic\\LeadBundle\\Twig\\Helper\\DncReasonHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class ChannelExtension extends AbstractExtension
{
    public function __construct(
        private DncReasonHelper \$dncReasonHelper,
        private ChannelListHelper \$channelListHelper
    ) {
    }

    /**
     * @return TwigFunction[]
     */
    public function getFunctions(): array
    {
        return [
            new TwigFunction('getChannelDncText', [\$this, 'getChannelDncText']),
            new TwigFunction('getChannelLabel', [\$this, 'getChannelLabel']),
        ];
    }

    public function getChannelDncText(int \$reasonId): string
    {
        try {
            return \$this->dncReasonHelper->toText(\$reasonId);
        } catch (UnknownDncReasonException \$e) {
            return \$e->getMessage();
        }
    }

    public function getChannelLabel(string \$channel): string
    {
        return \$this->channelListHelper->getChannelLabel(\$channel);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Twig/ChannelExtension.php";
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
        return new Source("", "@bundles/ChannelBundle/Twig/ChannelExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Twig\\ChannelExtension.php");
    }
}
