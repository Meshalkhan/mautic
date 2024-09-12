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

/* @bundles/PageBundle/Form/Type/RedirectListType.php */
class __TwigTemplate_871f1a63abfc147d7e694e9dca16edb8 extends Template
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

use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ChoiceType;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<array<mixed>>
 */
class RedirectListType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$choices = [
            'mautic.page.form.redirecttype.permanent'     => 301,
            'mautic.page.form.redirecttype.temporary'     => 302,
            'mautic.page.form.redirecttype.303_temporary' => 303,
            'mautic.page.form.redirecttype.307_temporary' => 307,
            'mautic.page.form.redirecttype.308_permanent' => 308,
        ];

        \$resolver->setDefaults([
            'choices'     => \$choices,
            'expanded'    => false,
            'multiple'    => false,
            'label'       => 'mautic.page.form.redirecttype',
            'label_attr'  => ['class' => 'control-label'],
            'placeholder' => false,
            'required'    => false,
            'attr'        => [
                'class' => 'form-control',
            ],
            'feature'           => 'all',
        ]);

        \$resolver->setDefined(['feature']);
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
        return "@bundles/PageBundle/Form/Type/RedirectListType.php";
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
        return new Source("", "@bundles/PageBundle/Form/Type/RedirectListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Form\\Type\\RedirectListType.php");
    }
}
