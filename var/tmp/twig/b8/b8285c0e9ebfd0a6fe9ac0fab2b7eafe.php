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

/* @bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php */
class __TwigTemplate_f59b4f544396be056b3dbd0fca595b70 extends Template
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

namespace Mautic\\LeadBundle\\Field\\Dispatcher;

use Doctrine\\ORM\\EntityManager;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Mautic\\LeadBundle\\Event\\LeadFieldEvent;
use Mautic\\LeadBundle\\Exception\\NoListenerException;
use Mautic\\LeadBundle\\LeadEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;

class FieldSaveDispatcher
{
    public function __construct(
        private EventDispatcherInterface \$dispatcher,
        private EntityManager \$entityManager
    ) {
    }

    /**
     * @throws NoListenerException
     */
    public function dispatchPreSaveEvent(LeadField \$entity, bool \$isNew): LeadFieldEvent
    {
        return \$this->dispatchEvent(LeadEvents::FIELD_PRE_SAVE, \$entity, \$isNew);
    }

    /**
     * @throws NoListenerException
     */
    public function dispatchPostSaveEvent(LeadField \$entity, bool \$isNew): LeadFieldEvent
    {
        return \$this->dispatchEvent(LeadEvents::FIELD_POST_SAVE, \$entity, \$isNew);
    }

    /**
     * @throws NoListenerException
     */
    public function dispatchEvent(string \$action, LeadField \$entity, bool \$isNew, ?LeadFieldEvent \$event = null): LeadFieldEvent
    {
        if (!\$this->dispatcher->hasListeners(\$action)) {
            throw new NoListenerException('There is no Listener for '.\$action.' event');
        }

        if (null === \$event) {
            \$event = new LeadFieldEvent(\$entity, \$isNew);
            \$event->setEntityManager(\$this->entityManager);
        }

        \$this->dispatcher->dispatch(\$event, \$action);

        return \$event;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php";
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
        return new Source("", "@bundles/LeadBundle/Field/Dispatcher/FieldSaveDispatcher.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Field\\Dispatcher\\FieldSaveDispatcher.php");
    }
}
