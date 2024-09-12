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

/* @bundles/ChannelBundle/Twig/ChannelExtension.php */
class __TwigTemplate_2139c652f644b1fe28050f8717764016 extends Template
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/ChannelBundle/Twig/ChannelExtension.php";
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
        return new Source("", "@bundles/ChannelBundle/Twig/ChannelExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Twig\\ChannelExtension.php");
    }
}
