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

/* @bundles/PointBundle/Entity/Group.php */
class __TwigTemplate_94edb34443210034dd47db88d26898cf extends Template
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

namespace Mautic\\PointBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\ApiBundle\\Serializer\\Driver\\ApiMetadataDriver;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;
use Mautic\\CoreBundle\\Entity\\FormEntity;
use Symfony\\Component\\Validator\\Constraints as Assert;
use Symfony\\Component\\Validator\\Mapping\\ClassMetadata;

class Group extends FormEntity
{
    public const TABLE_NAME = 'point_groups';

    private ?int \$id             = null;

    private ?string \$name        = '';

    private ?string \$description = '';

    /**
     * @param ORM\\ClassMetadata<Group> \$metadata
     */
    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable(self::TABLE_NAME)
            ->setCustomRepositoryClass(GroupRepository::class);

        \$builder->addIdColumns();
    }

    public static function loadValidatorMetadata(ClassMetadata \$metadata): void
    {
        \$metadata->addPropertyConstraint('name', new Assert\\NotBlank([
            'message' => 'mautic.core.name.required',
        ]));
    }

    public static function loadApiMetadata(ApiMetadataDriver \$metadata): void
    {
        \$metadata->setGroupPrefix('pointGroup')
            ->addListProperties(
                [
                    'id',
                    'name',
                    'description',
                ]
            )
            ->addProperties(
                [
                    'id',
                    'name',
                    'description',
                ]
            )
            ->build();
    }

    public function getId(): ?int
    {
        return \$this->id;
    }

    public function setDescription(?string \$description): self
    {
        \$this->isChanged('description', \$description);
        \$this->description = \$description;

        return \$this;
    }

    public function getDescription(): ?string
    {
        return \$this->description;
    }

    public function setName(?string \$name): self
    {
        \$this->isChanged('name', \$name);
        \$this->name = \$name;

        return \$this;
    }

    public function getName(): ?string
    {
        return \$this->name;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/Entity/Group.php";
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
        return new Source("", "@bundles/PointBundle/Entity/Group.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Entity\\Group.php");
    }
}
