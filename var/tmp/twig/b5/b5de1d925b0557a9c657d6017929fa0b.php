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

/* @bundles/LeadBundle/Event/LeadUtmTagsEvent.php */
class __TwigTemplate_8e70dde66bc7429727cdf1336c772433 extends Template
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

namespace Mautic\\LeadBundle\\Event;

use Mautic\\CoreBundle\\Event\\CommonEvent;
use Mautic\\LeadBundle\\Entity\\Lead;

class LeadUtmTagsEvent extends CommonEvent
{
    /**
     * @param mixed[] \$utmtags
     */
    public function __construct(
        Lead \$lead,
        protected array \$utmtags
    ) {
        \$this->entity  = \$lead;
    }

    public function getLead(): Lead
    {
        return \$this->entity;
    }

    /**
     * Returns the new points.
     *
     * @return mixed[]
     */
    public function getUtmTags(): array
    {
        return \$this->utmtags;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Event/LeadUtmTagsEvent.php";
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
        return new Source("", "@bundles/LeadBundle/Event/LeadUtmTagsEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Event\\LeadUtmTagsEvent.php");
    }
}
