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

/* @bundles/EmailBundle/Form/Type/EmailListType.php */
class __TwigTemplate_5370b469f0b076ab0df3145a791a7037 extends Template
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

use Mautic\\CoreBundle\\Form\\Type\\EntityLookupType;
use Symfony\\Component\\Form\\AbstractType;
use Symfony\\Component\\OptionsResolver\\Options;
use Symfony\\Component\\OptionsResolver\\OptionsResolver;

/**
 * @extends AbstractType<mixed>
 */
class EmailListType extends AbstractType
{
    public function configureOptions(OptionsResolver \$resolver): void
    {
        \$resolver->setDefaults(
            [
                'required'    => false,
                'modal_route' => 'mautic_email_action',
                // Email form UI too complicated for a modal so force a popup
                'force_popup'        => true,
                'model'              => 'email',
                'multiple'           => true,
                'ajax_lookup_action' => function (Options \$options): string {
                    \$query = [
                        'email_type'     => \$options['email_type'],
                        'top_level'      => \$options['top_level'],
                        'variant_parent' => \$options['variant_parent'],
                        'ignore_ids'     => \$options['ignore_ids'],
                    ];

                    return 'email:getLookupChoiceList&'.http_build_query(\$query);
                },
                'model_lookup_method' => 'getLookupResults',
                'lookup_arguments'    => fn (Options \$options): array => [
                    'type'    => 'email',
                    'filter'  => '\$data',
                    'limit'   => 0,
                    'start'   => 0,
                    'options' => [
                        'email_type'     => \$options['email_type'],
                        'top_level'      => \$options['top_level'],
                        'variant_parent' => \$options['variant_parent'],
                        'ignore_ids'     => \$options['ignore_ids'],
                    ],
                ],
                // 'modal_route_parameters' => 'template'
                'email_type'     => 'template',
                'top_level'      => 'variant',
                'variant_parent' => null,
                'ignore_ids'     => [],

                'email' => null,
            ]
        );
    }

    /**
     * @return string
     */
    public function getParent()
    {
        return EntityLookupType::class;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Form/Type/EmailListType.php";
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
        return new Source("", "@bundles/EmailBundle/Form/Type/EmailListType.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Form\\Type\\EmailListType.php");
    }
}
