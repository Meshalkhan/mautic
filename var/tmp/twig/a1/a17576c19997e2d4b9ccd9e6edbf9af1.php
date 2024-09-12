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

/* @bundles/CoreBundle/Helper/EmailAddressHelper.php */
class __TwigTemplate_daeff516e3f4f92d8b044cbfa72a51a7 extends Template
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

namespace Mautic\\CoreBundle\\Helper;

class EmailAddressHelper
{
    /**
     * Clean the email for comparison.
     *
     * @param string \$email
     */
    public function cleanEmail(\$email): string
    {
        return strtolower(preg_replace(\"/[^a-z0-9\\+\\.@]/i\", '', \$email));
    }

    /**
     * @return array<string>
     */
    public function getVariations(string \$email): array
    {
        \$emails = [\$email, \$this->cleanEmail(\$email)];
        // email without suffix
        preg_match('#^(.*?)\\+(.*?)@(.*?)\$#', \$email, \$parts);
        if (!empty(\$parts)) {
            \$emails[] = \$parts[1].'@'.\$parts[3];
        }

        return array_values(array_unique(\$emails));
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/EmailAddressHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/EmailAddressHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\EmailAddressHelper.php");
    }
}
