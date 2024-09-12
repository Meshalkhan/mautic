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

/* @bundles/AssetBundle/Form/Type/AssetListType.php */
class __TwigTemplate_e7bbd27a37d309f80310beaed6b4144a extends Template
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

namespace Mautic\\AssetBundle\\Form\\Type;

use Mautic\\AssetBundle\\Model\\AssetModel;
use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class AssetListType extends AbstractType
{
    public function __construct(
        private CorePermissions \$corePermissions,
        private AssetModel \$assetModel,
        private UserHelper \$userHelper
    ) {
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices'           => \$this->getAssetChoices(),
            'placeholder'       => false,
            'expanded'          => false,
            'multiple'          => true,
            'required'          => false,
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }

    private function getAssetChoices(): array
    {
        \$choices   = [];
        \$viewOther = \$this->corePermissions->isGranted('asset:assets:viewother');
        \$repo      = \$this->assetModel->getRepository();
        \$repo->setCurrentUser(\$this->userHelper->getUser());
        \$assets = \$repo->getAssetList('', 0, 0, \$viewOther);

        foreach (\$assets as \$asset) {
            \$choices[\$asset['language']][\$asset['title']] = \$asset['id'];
        }

        // sort by language
        ksort(\$choices);

        return \$choices;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/AssetBundle/Form/Type/AssetListType.php";
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
        return new Source("", "@bundles/AssetBundle/Form/Type/AssetListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Form\\Type\\AssetListType.php");
    }
}
