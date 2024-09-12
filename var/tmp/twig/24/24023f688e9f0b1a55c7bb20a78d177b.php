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

/* @bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php */
class __TwigTemplate_c743c70aa33cc4b4dee54a3cec4fb7b4 extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate\\Exception;

class ValueNotMergeableException extends \\Exception
{
    /**
     * @param mixed \$newerValue
     * @param mixed \$olderValue
     */
    public function __construct(
        private \$newerValue,
        private \$olderValue
    ) {
        parent::__construct();
    }

    /**
     * @return mixed
     */
    public function getNewerValue()
    {
        return \$this->newerValue;
    }

    /**
     * @return mixed
     */
    public function getOlderValue()
    {
        return \$this->olderValue;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/Exception/ValueNotMergeableException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Deduplicate\\Exception\\ValueNotMergeableException.php");
    }
}
