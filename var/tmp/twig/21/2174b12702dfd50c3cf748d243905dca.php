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

/* @bundles/EmailBundle/Form/Type/FormSubmitActionUserEmailType.php */
class __TwigTemplate_1f1632aedc49ae422fa453fa30944567 extends Template
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

namespace Mautic\\EmailBundle\\Form\\Type;

use Mautic\\UserBundle\\Form\\Type\\UserListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class FormSubmitActionUserEmailType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('useremail',
            EmailSendType::class,
            [
                'label' => 'mautic.email.emails',
                'attr'  => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.email.choose.emails_descr',
                ],
                'update_select' => 'formaction_properties_useremail_email',
            ]
        );

        \$builder->add(
            'user_id',
            UserListType::class,
            [
                'label'      => 'mautic.email.form.users',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.core.help.autocomplete',
                ],
                'required'    => true,
                'constraints' => new NotBlank(
                    [
                        'message' => 'mautic.core.value.required',
                    ]
                ),
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'label' => false,
        ]);
    }

    /**
     * @return string
     */
    public function getBlockPrefix()
    {
        return 'email_submitaction_useremail';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Form/Type/FormSubmitActionUserEmailType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/FormSubmitActionUserEmailType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Form\\Type\\FormSubmitActionUserEmailType.php");
    }
}
