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

/* @bundles/LeadBundle/EventListener/SerializerSubscriber.php */
class __TwigTemplate_bddd11c0ed69ba0645c61c6629098e21 extends Template
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

namespace Mautic\\LeadBundle\\EventListener;

use JMS\\Serializer\\EventDispatcher\\Events;
use JMS\\Serializer\\EventDispatcher\\EventSubscriberInterface;
use JMS\\Serializer\\EventDispatcher\\ObjectEvent;
use Mautic\\LeadBundle\\Entity\\LeadField;
use Symfony\\Component\\HttpFoundation\\RequestStack;

class SerializerSubscriber implements EventSubscriberInterface
{
    public function __construct(
        private RequestStack \$requestStack
    ) {
    }

    /**
     * @return array<int, array<string, string>>
     */
    public static function getSubscribedEvents(): array
    {
        return [
            [
                'event'  => Events::POST_SERIALIZE,
                'method' => 'changeEmptyArraysToObject',
            ],
        ];
    }

    public function changeEmptyArraysToObject(ObjectEvent \$event): void
    {
        \$request  = \$this->requestStack->getCurrentRequest();

        if (null === \$request) {
            return;
        }

        \$object = \$event->getObject();

        if (!\$object instanceof LeadField) {
            return;
        }

        if (empty(\$object->getProperties())) {
            // fixing array/object discrepancy for empty properties
            \$event->getContext()->getVisitor()->setData('properties', new \\ArrayObject());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/EventListener/SerializerSubscriber.php";
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
        return new Source("", "@bundles/LeadBundle/EventListener/SerializerSubscriber.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\EventListener\\SerializerSubscriber.php");
    }
}
