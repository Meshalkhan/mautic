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

/* @bundles/CoreBundle/Factory/PageHelperFactory.php */
class __TwigTemplate_100bd49a9c9ae9e7409b9eb1cefd3fd6 extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\PageHelper;
use Mautic\\CoreBundle\\Helper\\PageHelperInterface;
use Symfony\\Component\\HttpFoundation\\Session\\SessionInterface;

final class PageHelperFactory implements PageHelperFactoryInterface
{
    public function __construct(
        private SessionInterface \$session,
        private CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function make(string \$sessionPrefix, int \$page): PageHelperInterface
    {
        return new PageHelper(\$this->session, \$this->coreParametersHelper, \$sessionPrefix, \$page);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Factory/PageHelperFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/PageHelperFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Factory\\PageHelperFactory.php");
    }
}
