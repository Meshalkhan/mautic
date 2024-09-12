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

/* @bundles/PluginBundle/Entity/Plugin.php */
class __TwigTemplate_689ba63f2b0a0803a24b97a9fafeb7e2 extends Template
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

namespace Mautic\\PluginBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\CacheInvalidateInterface;
use Mautic\\CoreBundle\\Entity\\CommonEntity;

class Plugin extends CommonEntity implements CacheInvalidateInterface
{
    public const DESCRIPTION_DELIMITER_REGEX = \"/\\R---\\R/\";
    public const CACHE_NAMESPACE             = 'Plugin';

    /**
     * @var int
     */
    private \$id;

    /**
     * @var string
     */
    private \$name;

    /**
     * @var string|null
     */
    private \$description;

    /**
     * @var string
     */
    private \$primaryDescription;

    /**
     * @var string
     */
    private \$secondaryDescription;

    /**
     * @var bool
     */
    private \$isMissing = false;

    /**
     * @var string
     */
    private \$bundle;

    /**
     * @var string|null
     */
    private \$version;

    /**
     * @var string|null
     */
    private \$author;

    /**
     * @var ArrayCollection<int, \\Mautic\\PluginBundle\\Entity\\Integration>
     */
    private \$integrations;

    public function __construct()
    {
        \$this->integrations = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('plugins')
            ->setCustomRepositoryClass(PluginRepository::class)
            ->addUniqueConstraint(['bundle'], 'unique_bundle');

        \$builder->addIdColumns();

        \$builder->createField('isMissing', 'boolean')
            ->columnName('is_missing')
            ->build();

        \$builder->createField('bundle', 'string')
            ->length(50)
            ->build();

        \$builder->createField('version', 'string')
            ->nullable()
            ->build();

        \$builder->createField('author', 'string')
            ->nullable()
            ->build();

        \$builder->createOneToMany('integrations', 'Integration')
            ->setIndexBy('id')
            ->mappedBy('plugin')
            ->fetchExtraLazy()
            ->build();
    }

    public function __clone()
    {
        \$this->id = null;
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * Set name.
     *
     * @param string \$name
     *
     * @return Plugin
     */
    public function setName(\$name)
    {
        \$this->name = \$name;

        return \$this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return \$this->name;
    }

    /**
     * @param string \$bundle
     */
    public function setBundle(\$bundle): void
    {
        \$this->bundle = \$bundle;
    }

    /**
     * @return string
     */
    public function getBundle()
    {
        return \$this->bundle;
    }

    /**
     * @return mixed
     */
    public function getIntegrations()
    {
        return \$this->integrations;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param mixed \$description
     */
    public function setDescription(\$description): void
    {
        \$this->description = \$description;
        \$this->splitDescriptions();
    }

    /**
     * @return string|null
     */
    public function getPrimaryDescription()
    {
        return \$this->primaryDescription ?: \$this->description;
    }

    public function hasSecondaryDescription(): bool
    {
        return \$this->description && preg_match(self::DESCRIPTION_DELIMITER_REGEX, \$this->description) >= 1;
    }

    /**
     * @return string|null
     */
    public function getSecondaryDescription()
    {
        return \$this->secondaryDescription;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return \$this->version;
    }

    /**
     * @param mixed \$version
     */
    public function setVersion(\$version): void
    {
        \$this->version = \$version;
    }

    /**
     * @return mixed
     */
    public function getIsMissing()
    {
        return \$this->isMissing;
    }

    /**
     * @param mixed \$isMissing
     */
    public function setIsMissing(\$isMissing): void
    {
        \$this->isMissing = \$isMissing;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return \$this->author;
    }

    /**
     * @param mixed \$author
     */
    public function setAuthor(\$author): void
    {
        \$this->author = \$author;
    }

    /**
     * Splits description into primary and secondary.
     */
    public function splitDescriptions(): void
    {
        if (\$this->hasSecondaryDescription()) {
            \$parts                      = preg_split(self::DESCRIPTION_DELIMITER_REGEX, \$this->description);
            \$this->primaryDescription   = trim(\$parts[0]);
            \$this->secondaryDescription = trim(\$parts[1]);
        }
    }

    public function getCacheNamespacesToDelete(): array
    {
        return [
            self::CACHE_NAMESPACE,
            Integration::CACHE_NAMESPACE,
        ];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Entity/Plugin.php";
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
        return new Source("", "@bundles/PluginBundle/Entity/Plugin.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Entity\\Plugin.php");
    }
}
