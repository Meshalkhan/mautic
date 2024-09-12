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

/* @bundles/CoreBundle/EventListener/CacheInvalidateSubscriber.php */
class __TwigTemplate_230baf07d2f44f0c3049df779471ee33 extends Template
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
use Doctrine\\ORM\\Configuration;
use Doctrine\\ORM\\Events;
use Doctrine\\Persistence\\Event\\LifecycleEventArgs;
use Mautic\\CoreBundle\\Cache\\ResultCacheHelper;
use Mautic\\CoreBundle\\Entity\\CacheInvalidateInterface;
use Mautic\\CoreBundle\\Entity\\FormEntity;

class CacheInvalidateSubscriber implements EventSubscriber
{
    private const ACTION_PERSIST = 'persist';
    private const ACTION_UPDATE  = 'update';
    private const ACTION_REMOVE  = 'remove';

    public function __construct(private Configuration \$ormConfiguration)
    {
    }

    public function getSubscribedEvents(): array
    {
        return [
            Events::postPersist,
            Events::postUpdate,
            Events::postRemove,
        ];
    }

    public function postPersist(LifecycleEventArgs \$args): void
    {
        \$this->invalidateCache(\$args, self::ACTION_PERSIST);
    }

    public function postUpdate(LifecycleEventArgs \$args): void
    {
        \$this->invalidateCache(\$args, self::ACTION_UPDATE);
    }

    public function postRemove(LifecycleEventArgs \$args): void
    {
        \$this->invalidateCache(\$args, self::ACTION_REMOVE);
    }

    private function invalidateCache(LifecycleEventArgs \$args, string \$action): void
    {
        \$entity = \$args->getObject();

        if (!\$entity instanceof CacheInvalidateInterface) {
            return;
        }

        if (self::ACTION_UPDATE === \$action && \$entity instanceof FormEntity && !\$this->isEntityChanged(\$entity)) {
            return;
        }

        \$namespacesToDelete = \$entity->getCacheNamespacesToDelete();

        if (!\$namespacesToDelete) {
            return;
        }

        \$cache = ResultCacheHelper::getCache(\$this->ormConfiguration);

        if (!\$cache) {
            return;
        }

        \$cache = clone \$cache;

        foreach (\$namespacesToDelete as \$namespace) {
            \$cache->setNamespace(\$namespace);
            \$cache->deleteAll();
        }
    }

    private function isEntityChanged(FormEntity \$entity): bool
    {
        \$changes = \$entity->getChanges(true);

        return (bool) \$changes;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/EventListener/CacheInvalidateSubscriber.php";
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
        return new Source("", "@bundles/CoreBundle/EventListener/CacheInvalidateSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\EventListener\\CacheInvalidateSubscriber.php");
    }
}
