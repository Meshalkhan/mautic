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

/* @bundles/EmailBundle/Form/Type/EmailToUserType.php */
class __TwigTemplate_39cf34bd63ab1973db6d2e6bc65f3bb5 extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\EmailBundle\\Validator\\EmailOrEmailTokenList;
use Mautic\\UserBundle\\Form\\Type\\UserListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class EmailToUserType extends AbstractType
{
    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add('useremail',
            EmailSendType::class, [
                'label' => 'mautic.email.emails',
                'attr'  => [
                    'class'   => 'form-control',
                    'tooltip' => 'mautic.email.choose.emails_descr',
                    'email'   => isset(\$options['data']) && isset(\$options['data']['useremail']) && isset(\$options['data']['useremail']['email']) ? \$options['data']['useremail']['email'] : null,
                ],
                'update_select' => empty(\$options['update_select']) ? 'formaction_properties_useremail_email' : \$options['update_select'],
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
                'required' => false,
            ]
        );

        \$builder->add(
            'to_owner',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.send.email.to.owner',
                'data'  => \$options['data']['to_owner'] ?? false,
            ]
        );

        \$builder->add(
            'to',
            TextType::class,
            [
                'label'      => 'mautic.core.send.email.to',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'placeholder' => 'mautic.core.optional',
                    'tooltip'     => 'mautic.core.send.email.to.multiple.addresses',
                ],
                'required'    => false,
                'constraints' => new EmailOrEmailTokenList(),
            ]
        );

        \$builder->add(
            'cc',
            TextType::class,
            [
                'label'      => 'mautic.core.send.email.cc',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'placeholder' => 'mautic.core.optional',
                    'tooltip'     => 'mautic.core.send.email.to.multiple.addresses',
                ],
                'required'    => false,
                'constraints' => new EmailOrEmailTokenList(),
            ]
        );

        \$builder->add(
            'bcc',
            TextType::class,
            [
                'label'      => 'mautic.core.send.email.bcc',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => [
                    'class'       => 'form-control',
                    'placeholder' => 'mautic.core.optional',
                    'tooltip'     => 'mautic.core.send.email.to.multiple.addresses',
                ],
                'required'    => false,
                'constraints' => new EmailOrEmailTokenList(),
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults([
            'label' => false,
        ]);

        \$resolver->setDefined(['update_select']);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Form/Type/EmailToUserType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/EmailToUserType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Form\\Type\\EmailToUserType.php");
    }
}
