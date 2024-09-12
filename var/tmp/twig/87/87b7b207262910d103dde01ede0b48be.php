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

/* @bundles/LeadBundle/Entity/LeadCategory.php */
class __TwigTemplate_6561e053627474a8e9d9c5e682a98477 extends Template
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

namespace Mautic\\LeadBundle\\Entity;

use Doctrine\\ORM\\Mapping as ORM;
use Mautic\\CategoryBundle\\Entity\\Category;
use Mautic\\CoreBundle\\Doctrine\\Mapping\\ClassMetadataBuilder;

class LeadCategory
{
    /**
     * @var int
     */
    private \$id;

    /**
     * @var Category
     **/
    private \$category;

    /**
     * @var Lead
     */
    private \$lead;

    /**
     * @var \\DateTimeInterface
     */
    private \$dateAdded;

    /**
     * @var bool
     */
    private \$manuallyRemoved = false;

    /**
     * @var bool
     */
    private \$manuallyAdded = false;

    public static function loadMetadata(ORM\\ClassMetadata \$metadata): void
    {
        \$builder = new ClassMetadataBuilder(\$metadata);

        \$builder->setTable('lead_categories')
            ->setCustomRepositoryClass(LeadCategoryRepository::class);

        \$builder->addId();

        \$builder->createManyToOne('category', Category::class)
            ->addJoinColumn('category_id', 'id', false, false, 'CASCADE')
            ->build();

        \$builder->addLead(false, 'CASCADE', false);

        \$builder->addDateAdded();

        \$builder->createField('manuallyRemoved', 'boolean')
            ->columnName('manually_removed')
            ->build();

        \$builder->createField('manuallyAdded', 'boolean')
            ->columnName('manually_added')
            ->build();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return \$this->id;
    }

    /**
     * @return \\DateTimeInterface
     */
    public function getDateAdded()
    {
        return \$this->dateAdded;
    }

    /**
     * @param \\DateTime \$date
     */
    public function setDateAdded(\$date): void
    {
        \$this->dateAdded = \$date;
    }

    /**
     * @return mixed
     */
    public function getLead()
    {
        return \$this->lead;
    }

    /**
     * @param mixed \$lead
     */
    public function setLead(\$lead): void
    {
        \$this->lead = \$lead;
    }

    /**
     * @return Category
     */
    public function getCategory()
    {
        return \$this->category;
    }

    /**
     * @param Category \$category
     */
    public function setCategory(\$category): void
    {
        \$this->category = \$category;
    }

    /**
     * @return bool
     */
    public function getManuallyRemoved()
    {
        return \$this->manuallyRemoved;
    }

    /**
     * @param bool \$manuallyRemoved
     */
    public function setManuallyRemoved(\$manuallyRemoved): void
    {
        \$this->manuallyRemoved = \$manuallyRemoved;
    }

    /**
     * @return bool
     */
    public function wasManuallyRemoved()
    {
        return \$this->manuallyRemoved;
    }

    /**
     * @return bool
     */
    public function getManuallyAdded()
    {
        return \$this->manuallyAdded;
    }

    /**
     * @param bool \$manuallyAdded
     */
    public function setManuallyAdded(\$manuallyAdded): void
    {
        \$this->manuallyAdded = \$manuallyAdded;
    }

    /**
     * @return bool
     */
    public function wasManuallyAdded()
    {
        return \$this->manuallyAdded;
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
        return "@bundles/LeadBundle/Entity/LeadCategory.php";
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
        return new Source("", "@bundles/LeadBundle/Entity/LeadCategory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Entity\\LeadCategory.php");
    }
}
