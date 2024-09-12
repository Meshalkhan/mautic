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

/* @bundles/CoreBundle/Helper/Update/PreUpdateChecks/AbstractPreUpdateCheck.php */
class __TwigTemplate_7a987a374dd81c782f137ea38dba7871 extends Template
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

namespace Mautic\\CoreBundle\\Helper\\Update\\PreUpdateChecks;

use Mautic\\CoreBundle\\Release\\Metadata;

abstract class AbstractPreUpdateCheck
{
    private Metadata \$updateCandidateMetadata;

    abstract public function runCheck(): PreUpdateCheckResult;

    /**
     * Sets the Metadata object so that pre-update checks have the new
     * version's metadata available to perform checks against.
     */
    public function setUpdateCandidateMetadata(Metadata \$metadata): void
    {
        \$this->updateCandidateMetadata = \$metadata;
    }

    /**
     * Gets the metadata of the Mautic version that we're trying to update to.
     */
    public function getUpdateCandidateMetadata(): Metadata
    {
        return \$this->updateCandidateMetadata;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/AbstractPreUpdateCheck.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Update/PreUpdateChecks/AbstractPreUpdateCheck.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Update\\PreUpdateChecks\\AbstractPreUpdateCheck.php");
    }
}
