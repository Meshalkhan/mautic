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

/* @bundles/CategoryBundle/Model/ContactActionModel.php */
class __TwigTemplate_8a6d8b740f9129e72502d9b53888ea57 extends Template
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

namespace Mautic\\CategoryBundle\\Model;

use Mautic\\LeadBundle\\Model\\LeadModel;

class ContactActionModel
{
    public function __construct(
        private LeadModel \$contactModel
    ) {
    }

    public function addContactsToCategories(array \$contactIds, array \$categoryIds): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$this->contactModel->addToCategory(\$contact, \$categoryIds);
        }
    }

    public function removeContactsFromCategories(array \$contactIds, array \$categoryIds): void
    {
        \$contacts = \$this->contactModel->getLeadsByIds(\$contactIds);

        foreach (\$contacts as \$contact) {
            if (!\$this->contactModel->canEditContact(\$contact)) {
                continue;
            }

            \$contactCategoryRelations = \$this->contactModel->getLeadCategories(\$contact);
            \$relationsToDelete        = array_intersect(\$contactCategoryRelations, \$categoryIds);
            \$this->contactModel->removeFromCategories(\$relationsToDelete);
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CategoryBundle/Model/ContactActionModel.php";
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
        return new Source("", "@bundles/CategoryBundle/Model/ContactActionModel.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Model\\ContactActionModel.php");
    }
}
