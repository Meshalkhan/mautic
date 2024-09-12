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

/* @bundles/PageBundle/Form/Type/PageListType.php */
class __TwigTemplate_cc7b88ee7822e65b3cd442d85dbfdc01 extends Template
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

namespace Mautic\\PageBundle\\Form\\Type;

use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Model\\PageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class PageListType extends AbstractType
{
    /**
     * @var bool
     */
    private \$canViewOther = false;

    public function __construct(
        private PageModel \$model,
        CorePermissions \$corePermissions
    ) {
        \$this->canViewOther = \$corePermissions->isGranted('page:pages:viewother');
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$model        = \$this->model;
        \$canViewOther = \$this->canViewOther;

        \$resolver->setDefaults(
            [
                'choices' => function (Options \$options) use (\$model, \$canViewOther): array {
                    \$choices       = [];
                    \$publishedOnly = \$options['published_only'] ?? false;
                    \$pages         = \$model->getRepository()->getPageList('', 0, 0, \$canViewOther, \$options['top_level'], \$options['ignore_ids'], [], \$publishedOnly);
                    foreach (\$pages as \$page) {
                        \$choices[\$page['language']][\"{\$page['title']} ({\$page['id']})\"] = \$page['id'];
                    }

                    // sort by language
                    ksort(\$choices);

                    foreach (\$choices as &\$pages) {
                        ksort(\$pages);
                    }

                    return \$choices;
                },
                'placeholder'       => false,
                'expanded'          => false,
                'multiple'          => true,
                'required'          => false,
                'top_level'         => 'variant',
                'ignore_ids'        => [],
            ]
        );

        \$resolver->setDefined(['top_level', 'ignore_ids', 'published_only']);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Form/Type/PageListType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/PageListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Form\\Type\\PageListType.php");
    }
}
