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

/* @bundles/StageBundle/Entity/Stage.php */
class __TwigTemplate_3afb0add5d32b0cf2a9e148260febe60 extends Template
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

namespace Mautic\\StageBundle\\Entity;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class Stage extends FormEntity
{
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
     * @var int
     */
    private \$weight = 0;

    /**
     * @var \\DateTimeInterface
     */
    private \$publishUp;

    /**
     * @var \\DateTimeInterface
     */
    private \$publishDown;

    /**
     * @var ArrayCollection<int,\\Mautic\\StageBundle\\Entity\\LeadStageLog>
     */
    private \$log;

    /**
     * @var \\Mautic\\CategoryBundle\\Entity\\Category|null
     **/
    private \$category;

    public function __clone()
    {
        \$this->id = null;

        parent::__clone();
    }

    /**
     * Construct.
     */
    public function __construct()
    {
        \$this->log = new ArrayCollection();
    }

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);
        \$builder->setTable('stages')
            ->setCustomRepositoryClass(StageRepository::class);

        \$builder->addIdColumns();

        \$builder->createField('weight', 'integer')
            ->build();

        \$builder->addPublishDates();

        \$builder->createOneToMany('log', 'LeadStageLog')
            ->mappedBy('stage')
            ->cascadePersist()
            ->cascadeRemove()
            ->fetchExtraLazy()
            ->build();

        \$builder->addCategory();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata): void
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank([
            'message' => 'mautic.core.name.required',
        ]));
    }

    /**
     * Prepares the metadata for API usage.
     */
    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('stage')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'category',
                    'weight',
                    'description',
                ]
            )
            ->addProperties(
                [
                    'publishUp',
                    'publishDown',
                ]
            )
            ->build();
    }

    /**
     * @return int
     */
    public function getId()
    {
        return \$this->id;
    }

    public function setWeight(\$type): self
    {
        \$this->weight = (int) \$type;

        return \$this;
    }

    /**
     * @return int
     */
    public function getWeight()
    {
        return \$this->weight;
    }

    public function convertToArray(): array
    {
        return get_object_vars(\$this);
    }

    /**
     * @param string \$description
     */
    public function setDescription(\$description): self
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    /**
     * Get description.
     *
     * @return string
     */
    public function getDescription()
    {
        return \$this->description;
    }

    /**
     * @param string \$name
     */
    public function setName(\$name): self
    {
        \$this->isChanged('name', \$name);
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

    public function addLog(LeadStageLog \$log): self
    {
        \$this->log[] = \$log;

        return \$this;
    }

    public function removeLog(LeadStageLog \$log): void
    {
        \$this->log->removeElement(\$log);
    }

    /**
     * @return \\Doctrine\\Common\\Collections\\Collection
     */
    public function getLog()
    {
        return \$this->log;
    }

    /**
     * @param \\DateTime \$publishUp
     */
    public function setPublishUp(\$publishUp): self
    {
        \$this->isChanged('publishUp', \$publishUp);
        \$this->publishUp = \$publishUp;

        return \$this;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getPublishUp()
    {
        return \$this->publishUp;
    }

    /**
     * @param \\DateTime \$publishDown
     */
    public function setPublishDown(\$publishDown): Stage
    {
        \$this->isChanged('publishDown', \$publishDown);
        \$this->publishDown = \$publishDown;

        return \$this;
    }

    /**
     * Get publishDown.
     *
     * @return \\DateTimeInterface
     */
    public function getPublishDown()
    {
        return \$this->publishDown;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @param mixed \$category
     */
    public function setCategory(\$category): void
    {
        \$this->category = \$category;
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
        return "@bundles/StageBundle/Entity/Stage.php";
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
        return new Source("", "@bundles/StageBundle/Entity/Stage.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\StageBundle\\Entity\\Stage.php");
    }
}
