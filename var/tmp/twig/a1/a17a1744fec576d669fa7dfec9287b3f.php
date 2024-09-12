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

/* @bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php */
class __TwigTemplate_993c60c4d4f5841a900087c8f8065c4e extends Template
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

namespace Mautic\\UserBundle\\Security\\SAML\\Store;

use LightSaml\\Meta\\TrustOptions\\TrustOptions;
use LightSaml\\Store\\TrustOptions\\TrustOptionsStoreInterface;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class TrustOptionsStore implements TrustOptionsStoreInterface
{
    private ?TrustOptions \$trustOptions = null;

    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private string \$entityId
    ) {
    }

    public function get(\$entityId): TrustOptions
    {
        if (\$this->trustOptions) {
            return \$this->trustOptions;
        }

        return \$this->createTrustOptions();
    }

    public function has(\$entityId): bool
    {
        // SAML is not enabled
        if (!\$this->coreParametersHelper->get('saml_idp_metadata')) {
            return false;
        }

        // EntityIds do not match
        if (\$entityId !== \$this->entityId) {
            return false;
        }

        return true;
    }

    private function createTrustOptions(): TrustOptions
    {
        \$this->trustOptions = \$trustOptions = new TrustOptions();

        if (!\$this->coreParametersHelper->get('saml_idp_own_certificate')) {
            return \$trustOptions;
        }

        \$trustOptions->setSignAuthnRequest(true);
        \$trustOptions->setEncryptAssertions(true);
        \$trustOptions->setEncryptAuthnRequest(true);
        \$trustOptions->setSignAssertions(true);
        \$trustOptions->setSignResponse(true);

        return \$trustOptions;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php";
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
        return new Source("", "@bundles/UserBundle/Security/SAML/Store/TrustOptionsStore.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Security\\SAML\\Store\\TrustOptionsStore.php");
    }
}
