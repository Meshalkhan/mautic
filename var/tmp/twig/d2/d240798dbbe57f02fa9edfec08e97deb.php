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

/* @bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php */
class __TwigTemplate_8a572a42083505a33187428332b90e6d extends Template
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

namespace Mautic\\LeadBundle\\Segment\\DoNotContact;

use Mautic\\LeadBundle\\Entity\\DoNotContact;

class DoNotContactParts
{
    private string \$channel = 'email';

    private int \$type = DoNotContact::UNSUBSCRIBED;

    public function __construct(?string \$field)
    {
        if (\$field && str_contains(\$field, '_manual')) {
            \$this->type = DoNotContact::MANUAL;
        }

        if (\$field && str_contains(\$field, '_bounced')) {
            \$this->type = DoNotContact::BOUNCED;
        }

        if (\$field && str_contains(\$field, '_sms')) {
            \$this->channel = 'sms';
        }
    }

    public function getChannel(): string
    {
        return \$this->channel;
    }

    public function getParameterType(): int
    {
        return \$this->type;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php";
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
        return new Source("", "@bundles/LeadBundle/Segment/DoNotContact/DoNotContactParts.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Segment\\DoNotContact\\DoNotContactParts.php");
    }
}
