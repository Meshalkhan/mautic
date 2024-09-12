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

/* @bundles/LeadBundle/Deduplicate/CompanyDeduper.php */
class __TwigTemplate_f255c0242d3edc754cc6c1d0d4b12ba9 extends Template
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

namespace Mautic\\LeadBundle\\Deduplicate;

use Mautic\\LeadBundle\\Entity\\Company;
use Mautic\\LeadBundle\\Entity\\CompanyRepository;
use Mautic\\LeadBundle\\Exception\\UniqueFieldNotFoundException;
use Mautic\\LeadBundle\\Model\\FieldModel;

class CompanyDeduper
{
    use DeduperTrait;

    public function __construct(
        FieldModel \$fieldModel,
        private CompanyRepository \$companyRepository
    ) {
        \$this->fieldModel        = \$fieldModel;
        \$this->object            = 'company';
    }

    /**
     * @return Company[]
     *
     * @throws UniqueFieldNotFoundException
     */
    public function checkForDuplicateCompanies(array \$queryFields): array
    {
        \$uniqueData = \$this->getUniqueData(\$queryFields);
        if (empty(\$uniqueData)) {
            throw new UniqueFieldNotFoundException();
        }

        return \$this->companyRepository->getCompaniesByUniqueFields(\$uniqueData);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Deduplicate/CompanyDeduper.php";
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
        return new Source("", "@bundles/LeadBundle/Deduplicate/CompanyDeduper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Deduplicate\\CompanyDeduper.php");
    }
}
