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

/* @bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php */
class __TwigTemplate_a9d2f8beace5503f6f0087c0f1dfbcda extends Template
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

namespace Mautic\\ApiBundle\\Serializer\\Exclusion;

/**
 * Only include FormEntity properties for the top level entity and not the associated entities.
 */
class PublishDetailsExclusionStrategy extends FieldExclusionStrategy
{
    public function __construct()
    {
        parent::__construct(
            [
                'isPublished',
                'dateAdded',
                'createdBy',
                'dateModified',
                'modifiedBy',
                'checkedOut',
                'checkedOutBy',
            ],
            1
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php";
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
        return new Source("", "@bundles/ApiBundle/Serializer/Exclusion/PublishDetailsExclusionStrategy.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ApiBundle\\Serializer\\Exclusion\\PublishDetailsExclusionStrategy.php");
    }
}
