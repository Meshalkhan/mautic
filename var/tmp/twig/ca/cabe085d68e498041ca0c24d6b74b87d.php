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

/* @bundles/CoreBundle/Event/CustomAssetsEvent.php */
class __TwigTemplate_4256df6797094f00c52138d4043749ed extends Template
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

namespace Mautic\\CoreBundle\\Event;

use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Symfony\\Contracts\\EventDispatcher\\Event;

class CustomAssetsEvent extends Event
{
    public function __construct(
        protected AssetsHelper \$assetsHelper
    ) {
    }

    /**
     * @param string \$location
     * @param string \$context
     */
    public function addCustomDeclaration(\$declaration, \$location = 'head', \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addCustomDeclaration(\$declaration, \$location)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$location
     * @param bool   \$async
     * @param string \$context
     */
    public function addScript(\$script, \$location = 'head', \$async = false, \$name = null, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addScript(\$script, \$location, \$async, \$name)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$location
     * @param string \$context
     */
    public function addScriptDeclaration(\$script, \$location = 'head', \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addScriptDeclaration(\$script, \$location)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$context
     */
    public function addStylesheet(\$stylesheet, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addStylesheet(\$stylesheet)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }

    /**
     * @param string \$context
     */
    public function addStyleDeclaration(\$styles, \$context = AssetsHelper::CONTEXT_APP)
    {
        \$this->assetsHelper->setContext(\$context)
            ->addStyleDeclaration(\$styles)
            ->setContext(AssetsHelper::CONTEXT_APP);

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Event/CustomAssetsEvent.php";
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
        return new Source("", "@bundles/CoreBundle/Event/CustomAssetsEvent.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Event\\CustomAssetsEvent.php");
    }
}
