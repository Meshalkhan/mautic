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

/* @bundles/FormBundle/Form/Type/FormListType.php */
class __TwigTemplate_140ebf2a06c60c34eff72f594a62db6c extends Template
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

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\FormBundle\\Model\\FormModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class FormListType extends AbstractType
{
    private \$viewOther;

    private \\Mautic\\FormBundle\\Entity\\FormRepository \$repo;

    public function __construct(CorePermissions \$security, FormModel \$model, UserHelper \$userHelper)
    {
        \$this->viewOther = \$security->isGranted('form:forms:viewother');
        \$this->repo      = \$model->getRepository();

        \$this->repo->setCurrentUser(\$userHelper->getUser());
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$viewOther = \$this->viewOther;
        \$repo      = \$this->repo;

        \$resolver->setDefaults([
            'choices' => function (Options \$options) use (\$repo, \$viewOther): array {
                static \$choices;

                if (is_array(\$choices)) {
                    return \$choices;
                }

                \$choices = [];

                \$forms = \$repo->getFormList('', 0, 0, \$viewOther, \$options['form_type']);
                foreach (\$forms as \$form) {
                    \$choices[\$form['name']] = \$form['id'];
                }

                // sort by language
                ksort(\$choices);

                return \$choices;
            },
            'expanded'          => false,
            'multiple'          => true,
            'placeholder'       => false,
            'form_type'         => null,
        ]);

        \$resolver->setDefined(['form_type']);
    }

    /**
     * @return string
     */
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
        return "@bundles/FormBundle/Form/Type/FormListType.php";
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
        return new Source("", "@bundles/FormBundle/Form/Type/FormListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Form\\Type\\FormListType.php");
    }
}
