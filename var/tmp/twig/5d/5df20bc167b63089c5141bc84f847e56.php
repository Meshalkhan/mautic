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

/* @bundles/ChannelBundle/Controller/AjaxController.php */
class __TwigTemplate_c8de4f6f7c28f06393212271efc5e2d2 extends Template
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

namespace Mautic\\ChannelBundle\\Controller;

use Mautic\\ChannelBundle\\Model\\MessageQueueModel;
use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\CoreBundle\\Controller\\AjaxLookupControllerTrait;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AjaxController extends CommonAjaxController
{
    use AjaxLookupControllerTrait;

    public function cancelQueuedMessageEventAction(Request \$request): JsonResponse
    {
        \$dataArray      = ['success' => 0];
        \$messageQueueId = (int) \$request->request->get('channelId');
        \$queueModel     = \$this->getModel('channel.queue');
        \\assert(\$queueModel instanceof MessageQueueModel);
        \$queuedMessage  = \$queueModel->getEntity(\$messageQueueId);
        if (\$queuedMessage) {
            \$queuedMessage->setStatus('cancelled');
            \$queueModel->saveEntity(\$queuedMessage);
            \$dataArray = ['success' => 1];
        }

        return \$this->sendJsonResponse(\$dataArray);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/ChannelBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/ChannelBundle/Controller/AjaxController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\ChannelBundle\\Controller\\AjaxController.php");
    }
}
