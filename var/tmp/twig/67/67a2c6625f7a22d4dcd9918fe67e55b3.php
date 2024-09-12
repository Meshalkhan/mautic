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

/* @bundles/ChannelBundle/Form/Type/MessageSendType.php */
class __TwigTemplate_f6caa10beb012b81a2b00c7e222bea46 extends Template
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

namespace Mautic\\ChannelBundle\\Form\\Type;

use Mautic\\ChannelBundle\\Model\\MessageModel;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\ButtonType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Routing\\RouterInterface;
use Symfony\\Component\\Validator\\Constraints\\NotBlank;

/**
 * @extends AbstractType<mixed>
 */
class MessageSendType extends AbstractType
{
    public function __construct(
        protected RouterInterface \$router,
        protected MessageModel \$messageModel
    ) {
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        \$builder->add(
            'marketingMessage',
            MessageListType::class,
            [
                'label'       => 'mautic.channel.send.selectmessages',
                'label_attr'  => ['class' => 'control-label'],
                'multiple'    => false,
                'required'    => true,
                'constraints' => [
                    new NotBlank(
                        ['message' => 'mautic.channel.choosemessage.notblank']
                    ),
                ],
            ]
        );

        if (!empty(\$options['update_select'])) {
            \$windowUrl = \$this->router->generate(
                'mautic_message_action',
                [
                    'objectAction' => 'new',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'newMarketingMessageButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'   => 'btn btn-primary btn-nospin',
                        'onclick' => 'Mautic.loadNewWindow({windowUrl: \\''.\$windowUrl.'\\'})',
                        'icon'    => 'ri-add-line',
                    ],
                    'label' => 'mautic.channel.create.new.message',
                ]
            );

            // create button edit email
            \$windowUrlEdit = \$this->router->generate(
                'mautic_message_action',
                [
                    'objectAction' => 'edit',
                    'objectId'     => 'messageId',
                    'contentOnly'  => 1,
                    'updateSelect' => \$options['update_select'],
                ]
            );

            \$builder->add(
                'editMessageButton',
                ButtonType::class,
                [
                    'attr' => [
                        'class'    => 'btn btn-primary btn-nospin',
                        'onclick'  => 'Mautic.loadNewWindow({windowUrl: \\''.\$windowUrlEdit.'\\'})',
                        'disabled' => !isset(\$options['data']['message']),
                        'icon'     => 'ri-edit-line',
                    ],
                    'label' => 'mautic.channel.send.edit.message',
                ]
            );
        }
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
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
        return "@bundles/ChannelBundle/Form/Type/MessageSendType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/MessageSendType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Form\\Type\\MessageSendType.php");
    }
}
