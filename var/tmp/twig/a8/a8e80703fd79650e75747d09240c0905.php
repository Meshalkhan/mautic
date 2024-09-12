<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/FormBundle/Form/Type/SubmitActionEmailType.php */
class __TwigTemplate_13da03fd2241f3b3e0e1309a89036bf1 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\FormBundle\\Form\\Type;

use Mautic\\CoreBundle\\Form\\ToBcBccFieldsTrait;
use Mautic\\CoreBundle\\Form\\Type\\YesNoButtonGroupType;
use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\EmailBundle\\Form\\Type\\EmailListType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\HiddenType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextareaType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\TextType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\Form\\FormInterface;
use Symfony\\Component\\Form\\FormView;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

/**
 * @extends AbstractType<mixed>
 */
class SubmitActionEmailType extends AbstractType
{
    use FormFieldTrait;
    use ToBcBccFieldsTrait;

    public function __construct(
        private TranslatorInterface \$translator,
        protected CoreParametersHelper \$coreParametersHelper
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$data = \$options['data']['subject'] ?? \$this->translator->trans(
            'mautic.form.action.sendemail.subject.default'
        );
        \$builder->add(
            'subject',
            TextType::class,
            [
                'label'      => 'mautic.form.action.sendemail.subject',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control'],
                'required'   => false,
                'data'       => \$data,
            ]
        );

        if (!isset(\$options['data']['message'])) {
            \$fields  = \$this->getFormFields(\$options['attr']['data-formid']);
            \$message = '';

            foreach (\$fields as \$token => \$label) {
                \$message .= \"<strong>\$label</strong>: \$token<br />\";
            }
        } else {
            \$message = \$options['data']['message'];
        }

        \$builder->add(
            'message',
            TextareaType::class,
            [
                'label'      => 'mautic.form.action.sendemail.message',
                'label_attr' => ['class' => 'control-label'],
                'attr'       => ['class' => 'form-control editor editor-basic'],
                'required'   => false,
                'data'       => \$message,
            ]
        );

        \$builder->add(
            'immediately',
            HiddenType::class,
            [
                'data' => false,
            ]
        );

        \$default = \$options['data']['copy_lead'] ?? false;
        \$builder->add(
            'copy_lead',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.sendemail.copytolead',
                'data'  => \$default,
            ]
        );

        \$default = \$options['data']['set_replyto'] ?? true;
        \$builder->add(
            'set_replyto',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.sendemail.setreplyto',
                'data'  => \$default,
                'attr'  => [
                    'tooltip' => 'mautic.form.action.sendemail.setreplyto_tooltip',
                ],
            ]
        );

        \$default = \$options['data']['email_to_owner'] ?? false;
        \$builder->add(
            'email_to_owner',
            YesNoButtonGroupType::class,
            [
                'label' => 'mautic.form.action.sendemail.emailtoowner',
                'data'  => \$default,
            ]
        );

        \$builder->add(
            'templates',
            EmailListType::class,
            [
                'label'      => 'mautic.lead.email.template',
                'label_attr' => ['class' => 'control-label'],
                'required'   => false,
                'attr'       => [
                    'class'    => 'form-control',
                    'onchange' => 'Mautic.getLeadEmailContent(this)',
                ],
                'multiple'   => false,
            ]
        );

        \$this->addToBcBccFields(\$builder);
    }

    public function getBlockPrefix()
    {
        return 'form_submitaction_sendemail';
    }

    public function buildView(FormView \$view, FormInterface \$form, array \$options): void
    {
        \$view->vars['formFields'] = \$this->getFormFields(\$options['attr']['data-formid']);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Form/Type/SubmitActionEmailType.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/FormBundle/Form/Type/SubmitActionEmailType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Form\\Type\\SubmitActionEmailType.php");
    }
}
