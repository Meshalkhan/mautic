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

/* @bundles/CoreBundle/Twig/Extension/DateTimeExtension.php */
class __TwigTemplate_92fd103884d000ab25fd143f6f39b89f extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Extension;

use Mautic\\CoreBundle\\Helper\\DateTimeHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class DateTimeExtension extends AbstractExtension
{
    public function __construct(
        private DateTimeHelper \$helper
    ) {
    }

    public function getFunctions()
    {
        return [
            new TwigFunction('dateTimeGetUtcDateTime', [\$this, 'getUtcDateTime'], ['is_safe' => ['all']]),
        ];
    }

    /**
     * @see DateTimeHelper::getUtcDateTime
     */
    public function getUtcDateTime(): \\DateTimeInterface
    {
        return \$this->helper->getUtcDateTime();
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Extension/DateTimeExtension.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Extension/DateTimeExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Extension\\DateTimeExtension.php");
    }
}
