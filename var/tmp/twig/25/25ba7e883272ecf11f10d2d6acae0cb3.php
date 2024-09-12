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

/* @bundles/CategoryBundle/Form/Type/CategoryBundlesType.php */
class __TwigTemplate_33c1f8fc069ec67a41e8b1f95289d310 extends Template
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

namespace Mautic\\CategoryBundle\\Form\\Type;

use Mautic\\CategoryBundle\\CategoryEvents;
use Mautic\\CategoryBundle\\Event\\CategoryTypesEvent;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class CategoryBundlesType extends AbstractType
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher
    ) {
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'choices' => function (Options \$options): array {
                if (\$this->dispatcher->hasListeners(CategoryEvents::CATEGORY_ON_BUNDLE_LIST_BUILD)) {
                    \$event = \$this->dispatcher->dispatch(new CategoryTypesEvent(), CategoryEvents::CATEGORY_ON_BUNDLE_LIST_BUILD);
                    \$types = \$event->getCategoryTypes();
                } else {
                    \$types = [];
                }

                return array_flip(\$types);
            },
            'expanded'          => false,
            'multiple'          => false,
            'required'          => false,
        ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'category_bundles_form';
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
        return "@bundles/CategoryBundle/Form/Type/CategoryBundlesType.php";
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
        return new Source("", "@bundles/CategoryBundle/Form/Type/CategoryBundlesType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CategoryBundle\\Form\\Type\\CategoryBundlesType.php");
    }
}
