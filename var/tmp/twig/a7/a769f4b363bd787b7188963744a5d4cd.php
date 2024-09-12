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

/* @bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php */
class __TwigTemplate_ed13737c2b36b6e8c14189492ed05520 extends Template
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

declare(strict_types=1);

namespace Mautic\\CoreBundle\\EventListener;

use Doctrine\\Common\\EventSubscriber;
use Doctrine\\ORM\\EntityManagerInterface;
use Doctrine\\ORM\\Events;
use Doctrine\\Persistence\\Event\\LifecycleEventArgs;
use Mautic\\CoreBundle\\Entity\\OptimisticLockInterface;
use Mautic\\CoreBundle\\Entity\\OptimisticLockTrait;

class OptimisticLockSubscriber implements EventSubscriber
{
    public function getSubscribedEvents(): array
    {
        return [
            Events::postUpdate,
        ];
    }

    /**
     * If the object implements OptimisticLockInterface and is marked for incrementing the version, object's version column/field is incremented.
     */
    public function postUpdate(LifecycleEventArgs \$args): void
    {
        \$object = \$args->getObject();

        if (!\$object instanceof OptimisticLockInterface || !\$object->isMarkedForVersionIncrement()) {
            return;
        }

        \$entityManager = \$args->getObjectManager();

        if (!\$entityManager instanceof EntityManagerInterface) {
            return;
        }

        \$className     = \$object::class;
        \$metadata      = \$entityManager->getClassMetadata(\$className);
        \$versionField  = \$object->getVersionField();
        \$versionColumn = \$metadata->fieldNames[\$versionField] ?? null;

        if (null === \$versionColumn) {
            throw new \\LogicException(sprintf('Field \"%s::\$%s\" is not mapped. Did you forget to do so? See \"%s::addVersionField()\"', \$className, \$versionField, OptimisticLockTrait::class));
        }

        \$connection = \$entityManager->getConnection();
        \$connection->createQueryBuilder()
            ->update(\$metadata->table['name'])
            ->set(\$versionColumn, \"(@newVersion := {\$versionColumn} + 1)\")
            ->where(implode(' AND ', array_map(function (string \$name): string {
                return \"{\$name} = :{\$name}\";
            }, \$metadata->getIdentifierFieldNames())))
            ->setParameters(\$entityManager->getUnitOfWork()->getEntityIdentifier(\$object))
            ->executeQuery();

        \$newVersion = (int) \$connection->executeQuery('SELECT @newVersion')->fetchOne();
        \$object->setVersion(\$newVersion);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/OptimisticLockSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\OptimisticLockSubscriber.php");
    }
}
