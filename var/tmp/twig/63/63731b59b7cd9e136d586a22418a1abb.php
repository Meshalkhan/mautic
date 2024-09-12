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

/* @bundles/MessengerBundle/Controller/AjaxController.php */
class __TwigTemplate_0055c3adac112e7927e610e2713649c1 extends Template
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

namespace Mautic\\MessengerBundle\\Controller;

use Mautic\\CoreBundle\\Controller\\AjaxController as CommonAjaxController;
use Mautic\\MessengerBundle\\Service\\TestMessageFactory;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpFoundation\\Response;
use Symfony\\Component\\Messenger\\MessageBusInterface;

class AjaxController extends CommonAjaxController
{
    public function sendTestMessageAction(
        Request \$request,
        MessageBusInterface \$bus,
        TestMessageFactory \$messageFactory,
    ): Response {
        try {
            \$message = \$messageFactory->crateMessageByDsnKey((string) \$request->request->get('key'));
        } catch (\\InvalidArgumentException) {
            return \$this->notFound();
        }

        \$data = [
            'success' => 1,
            'message' => \$this->translator->trans('mautic.core.success'),
        ];

        try {
            \$bus->dispatch(\$message);
        } catch (\\Throwable \$e) {
            \$data['success'] = 0;
            \$data['message'] = \$this->translator->trans('mautic.messenger.config.dsn.test_message_failed', ['%message%' => \$e->getMessage()]);
        }

        return \$this->sendJsonResponse(\$data);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Controller/AjaxController.php";
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
        return new Source("", "@bundles/MessengerBundle/Controller/AjaxController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Controller\\AjaxController.php");
    }
}
