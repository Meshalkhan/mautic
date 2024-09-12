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

/* @bundles/CoreBundle/Controller/BuilderControllerTrait.php */
class __TwigTemplate_412e4cbfe11c2bb813b1d2e3f5c94f03 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Translation\\Translator;
use Mautic\\CoreBundle\\Twig\\Helper\\AssetsHelper;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\Routing\\RouterInterface;

trait BuilderControllerTrait
{
    /**
     * Get assets for builder.
     */
    protected function getAssetsForBuilder(AssetsHelper \$assetsHelper, Translator \$translatorHelper, Request \$request, RouterInterface \$routerHelper, CoreParametersHelper \$coreParametersHelper): string
    {
        // /** @var RouterInterface \$routerHelper */
        // \$routerHelper = \$this->get('router');
        \$assetsHelper
            ->setContext(AssetsHelper::CONTEXT_BUILDER)
            ->addScriptDeclaration(\"var mauticBasePath      = '\".\$request->getBasePath().\"';\")
            ->addScriptDeclaration(\"var mauticAjaxUrl       = '\".\$routerHelper->generate('mautic_core_ajax').\"';\")
            ->addScriptDeclaration(\"var mauticBaseUrl       = '\".\$routerHelper->generate('mautic_base_index').\"';\")
            ->addScriptDeclaration(\"var mauticAssetPrefix   = '\".\$assetsHelper->getAssetPrefix(true).\"';\")
            ->addScriptDeclaration('var mauticLang          = '.\$translatorHelper->getJsLang().';')
            ->addScriptDeclaration('var mauticFroalaEnabled = '.(int) \$coreParametersHelper->get('load_froala_assets').';')
            ->addCustomDeclaration(\$assetsHelper->getSystemScripts(true, true))
            ->addStylesheet('app/bundles/CoreBundle/Assets/css/libraries/builder.css');

        \$builderAssets = \$assetsHelper->getHeadDeclarations();

        // reset context to main
        \$assetsHelper->setContext();

        return \$builderAssets;
    }

    /**
     * @return array
     */
    protected function buildSlotForms(\$slotTypes)
    {
        foreach (\$slotTypes as \$key => \$slotType) {
            if (!empty(\$slotType['form'])) {
                \$slotForm                = \$this->formFactory->create(\$slotType['form']);
                \$slotTypes[\$key]['form'] = \$slotForm->createView();
            }
        }

        return \$slotTypes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Controller/BuilderControllerTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/BuilderControllerTrait.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Controller\\BuilderControllerTrait.php");
    }
}
