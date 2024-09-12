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

/* @bundles/LeadBundle/Twig/Extension/DncReasonExtension.php */
class __TwigTemplate_ce4a7b16f4aaef253afd5533f97298fc extends Template
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

namespace Mautic\\LeadBundle\\Twig\\Extension;

use Mautic\\LeadBundle\\Exception\\UnknownDncReasonException;
use Mautic\\LeadBundle\\Twig\\Helper\\DncReasonHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class DncReasonExtension extends AbstractExtension
{
    public function __construct(
        protected DncReasonHelper \$helper
    ) {
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('dncReasonToText', [\$this, 'toText']),
        ];
    }

    /**
     * Convert DNC reason ID to text.
     *
     * @throws UnknownDncReasonException
     */
    public function toText(int \$reasonId): string
    {
        return \$this->helper->toText(\$reasonId);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Twig/Extension/DncReasonExtension.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Extension/DncReasonExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Twig\\Extension\\DncReasonExtension.php");
    }
}
