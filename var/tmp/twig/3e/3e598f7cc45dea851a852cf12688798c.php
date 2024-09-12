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

/* @bundles/LeadBundle/Field/DTO/CustomFieldObject.php */
class __TwigTemplate_f3d9b87f11a9a445c27ad5d93b9ec292 extends Template
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

namespace Mautic\\LeadBundle\\Field\\DTO;

use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Exception\\InvalidObjectTypeException;

class CustomFieldObject
{
    private array \$objects = [
        'lead'    => 'leads',
        'company' => 'companies',
    ];

    private LeadField \$leadField;

    /**
     * @throws InvalidObjectTypeException
     */
    public function __construct(LeadField \$leadField)
    {
        \$leadFieldObject = \$leadField->getObject();
        if (!isset(\$this->objects[\$leadFieldObject])) {
            throw new InvalidObjectTypeException(\$leadFieldObject.' has no associated object.');
        }

        \$this->leadField = \$leadField;
    }

    public function getObject(): string
    {
        return \$this->objects[\$this->leadField->getObject()];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/DTO/CustomFieldObject.php";
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
        return new Source("", "@bundles/LeadBundle/Field/DTO/CustomFieldObject.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\DTO\\CustomFieldObject.php");
    }
}
