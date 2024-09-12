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

/* @bundles/CoreBundle/Entity/Cache.php */
class __TwigTemplate_f7baf2133c7513bd43ba51153e514ae4 extends Template
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

namespace Mautic\\CoreBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 */
class Cache
{
    /**
     * @var mixed
     */
    private \$id;

    /**
     * @var mixed
     */
    private \$data;

    /**
     * @var int|null
     */
    private \$lifetime;

    /**
     * @var int
     */
    private \$time;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('cache_items');

        \$builder->createField('id', 'binary')
                ->columnName('item_id')
                ->makePrimaryKey()
                ->build();

        \$builder->addNamedField('data', 'blob', 'item_data');

        \$builder->addField(
            'lifetime',
            'integer',
            [
                'columnName' => 'item_lifetime',
                'nullable'   => true,
                'options'    => [
                    'unsigned' => true,
                ],
            ]
        );

        \$builder->addField(
            'time',
            'integer',
            [
                'columnName' => 'item_time',
                'options'    => [
                    'unsigned' => true,
                ],
            ]
        );
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @param int \$id
     *
     * @return Cache
     */
    public function setId(\$id)
    {
        \$this->id = \$id;

        return \$this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return \$this->data;
    }

    /**
     * @param string \$data
     *
     * @return Cache
     */
    public function setData(\$data)
    {
        \$this->data = \$data;

        return \$this;
    }

    /**
     * @return int
     */
    public function getLifetime()
    {
        return \$this->lifetime;
    }

    /**
     * @param int \$lifetime
     *
     * @return Cache
     */
    public function setLifetime(\$lifetime)
    {
        \$this->lifetime = \$lifetime;

        return \$this;
    }

    /**
     * @return int
     */
    public function getTime()
    {
        return \$this->time;
    }

    /**
     * @param int \$time
     *
     * @return Cache
     */
    public function setTime(\$time)
    {
        \$this->time = \$time;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Entity/Cache.php";
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
        return new Source("", "@bundles/CoreBundle/Entity/Cache.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Entity\\Cache.php");
    }
}
