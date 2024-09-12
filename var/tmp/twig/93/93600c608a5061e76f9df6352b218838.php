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

/* @bundles/LeadBundle/Helper/PrimaryCompanyHelper.php */
class __TwigTemplate_22548776903b84e2e9370a899eff6f94 extends Template
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

namespace Mautic\\LeadBundle\\Helper;

use Mautic\\LeadBundle\\Entity\\CompanyLeadRepository;
use Mautic\\LeadBundle\\Entity\\Lead;

class PrimaryCompanyHelper
{
    public function __construct(
        private CompanyLeadRepository \$companyLeadRepository
    ) {
    }

    /**
     * @return array|null
     */
    public function getProfileFieldsWithPrimaryCompany(Lead \$lead)
    {
        return \$this->mergeInPrimaryCompany(
            \$this->companyLeadRepository->getCompaniesByLeadId(\$lead->getId()),
            \$lead->getProfileFields()
        );
    }

    /**
     * @return array
     */
    public function mergePrimaryCompanyWithProfileFields(\$contactId, array \$profileFields)
    {
        return \$this->mergeInPrimaryCompany(
            \$this->companyLeadRepository->getCompaniesByLeadId(\$contactId),
            \$profileFields
        );
    }

    /**
     * @return array
     */
    private function mergeInPrimaryCompany(array \$companies, array \$profileFields)
    {
        foreach (\$companies as \$company) {
            if (empty(\$company['is_primary'])) {
                continue;
            }

            unset(\$company['id'], \$company['score'], \$company['date_added'], \$company['date_associated'], \$company['is_primary']);

            return array_merge(\$profileFields, \$company);
        }

        return \$profileFields;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Helper/PrimaryCompanyHelper.php";
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
        return new Source("", "@bundles/LeadBundle/Helper/PrimaryCompanyHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Helper\\PrimaryCompanyHelper.php");
    }
}
