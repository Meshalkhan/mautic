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

/* @bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php */
class __TwigTemplate_7862cde919f710ddd29d56badda9f413 extends Template
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

namespace Mautic\\ConfigBundle\\Form\\DataTransformer;

use Mautic\\ConfigBundle\\Form\\Type\\EscapeTransformer;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

class DsnTransformerFactory
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private EscapeTransformer \$escapeTransformer
    ) {
    }

    public function create(string \$configKey, bool \$allowEmpty): DsnTransformer
    {
        return new DsnTransformer(\$this->coreParametersHelper, \$this->escapeTransformer, \$configKey, \$allowEmpty);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php";
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
        return new Source("", "@bundles/ConfigBundle/Form/DataTransformer/DsnTransformerFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ConfigBundle\\Form\\DataTransformer\\DsnTransformerFactory.php");
    }
}
