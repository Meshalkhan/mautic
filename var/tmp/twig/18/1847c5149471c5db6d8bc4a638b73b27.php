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

/* @bundles/ChannelBundle/Form/Type/MessageType.php */
class __TwigTemplate_7280bd2e064897febcec76f990760a45 extends Template
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

use Mautic\\ChannelBundle\\Entity\\Channel;
use Mautic\\ChannelBundle\\Entity\\Message;
use Mautic\\ChannelBundle\\Model\\MessageModel;
use Mautic\\CoreBundle\\Form\\Type\\AbstractFormStandardType;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Symfony\\Component\\Form\\Extension\\Core\\Type\\CollectionType;
use Symfony\\Component\\Form\\FormBuilderInterface;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;
use Symfony\\Component\\Validator\\Constraints\\Valid;

class MessageType extends AbstractFormStandardType
{
    public function __construct(
        protected MessageModel \$model,
        CorePermissions \$security
    ) {
        \$this->security = \$security;
    }

    public function buildForm(FormBuilderInterface \$builder, array \$options): void
    {
        // Add standard fields
        \$options = array_merge(\$options, ['model_name' => 'channel.message', 'permission_base' => 'channel:messages']);
        parent::buildForm(\$builder, \$options);

        // Ensure that all channels exist
        /** @var Message \$message */
        \$message         = \$options['data'];
        \$channels        = \$this->model->getChannels();
        \$messageChannels = \$message->getChannels();

        foreach (\$channels as \$channelType => \$channel) {
            if (!isset(\$messageChannels[\$channelType])) {
                \$message->addChannel(
                    (new Channel())
                        ->setChannel(\$channelType)
                        ->setMessage(\$message)
                );
            }
        }

        \$builder->add(
            'channels',
            CollectionType::class,
            [
                'label'         => false,
                'allow_add'     => true,
                'allow_delete'  => false,
                'prototype'     => false,
                'entry_type'    => ChannelType::class,
                'by_reference'  => false,
                'entry_options' => [
                    'channels' => \$channels,
                ],
                'constraints' => [
                    new Valid(),
                ],
            ]
        );
    }

    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'data_class'      => Message::class,
                'category_bundle' => 'messages',
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Form/Type/MessageType.php";
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
        return new Source("", "@bundles/ChannelBundle/Form/Type/MessageType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Form\\Type\\MessageType.php");
    }
}
