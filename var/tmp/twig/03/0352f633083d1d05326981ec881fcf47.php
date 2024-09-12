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

/* @bundles/PointBundle/EventListener/GroupScoreSubscriber.php */
class __TwigTemplate_2d140ddb248973d6d5fec744d2ec18df extends Template
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

namespace Mautic\\PointBundle\\EventListener;

use Mautic\\PointBundle\\Event\\GroupScoreChangeEvent;
use Mautic\\PointBundle\\Model\\TriggerModel;
use Mautic\\PointBundle\\PointGroupEvents;
use Symfony\\Component\\EventDispatcher\\EventSubscriberInterface;

class GroupScoreSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private TriggerModel \$triggerModel
    ) {
    }

    public static function getSubscribedEvents(): array
    {
        return [
            PointGroupEvents::SCORE_CHANGE     => ['onGroupScoreChange', 0],
        ];
    }

    public function onGroupScoreChange(GroupScoreChangeEvent \$event): void
    {
        \$this->triggerModel->triggerEvents(\$event->getContact());
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PointBundle/EventListener/GroupScoreSubscriber.php";
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
        return new Source("", "@bundles/PointBundle/EventListener/GroupScoreSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\EventListener\\GroupScoreSubscriber.php");
    }
}
