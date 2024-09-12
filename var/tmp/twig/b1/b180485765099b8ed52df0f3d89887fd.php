<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Model/AjaxLookupModelInterface.php */
class __TwigTemplate_7323ada5e05fa2573ef3ebce624dfad1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Model/AjaxLookupModelInterface.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Model/AjaxLookupModelInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Model\\AjaxLookupModelInterface.php");
    }
}
