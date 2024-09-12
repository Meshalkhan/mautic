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

/* @bundles/CoreBundle/Model/AjaxLookupModelInterface.php */
class __TwigTemplate_c727bef5d7b994571b90e5ab61eccd1c extends Template
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

namespace Mautic\\CoreBundle\\Model;

use Mautic\\CoreBundle\\Entity\\CommonRepository;

/**
 * Interface AjaxLookupModelInterface.
 *
 * Defines methods required by AjaxLookupControllerTrait to find matching records
 *
 * @template T of object
 */
interface AjaxLookupModelInterface
{
    /**
     * @param string \$filter
     * @param int    \$limit
     * @param int    \$start
     *
     * @return mixed
     */
    public function getLookupResults(\$type, \$filter = '', \$limit = 10, \$start = 0);

    /**
     * @return CommonRepository<T>
     */
    public function getRepository();
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Model/AjaxLookupModelInterface.php";
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
        return new Source("", "@bundles/CoreBundle/Model/AjaxLookupModelInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Model\\AjaxLookupModelInterface.php");
    }
}
