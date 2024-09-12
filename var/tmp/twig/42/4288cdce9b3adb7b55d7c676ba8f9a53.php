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

/* @bundles/NotificationBundle/Controller/AppCallbackController.php */
class __TwigTemplate_d14e06778c25b72639658220aa466621 extends Template
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

namespace Mautic\\NotificationBundle\\Controller;

use Doctrine\\ORM\\EntityManagerInterface;
use Mautic\\CoreBundle\\Controller\\CommonController;
use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\NotificationBundle\\Entity\\Notification;
use Mautic\\NotificationBundle\\Model\\NotificationModel;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Component\\HttpFoundation\\Request;

class AppCallbackController extends CommonController
{
    public function indexAction(Request \$request, EntityManagerInterface \$em): JsonResponse
    {
        \$requestBody = json_decode(\$request->getContent(), true);
        \$contactRepo = \$em->getRepository(Lead::class);

        \$matchData   = [
            'email' => \$requestBody['email'],
        ];

        /** @var Lead \$contact */
        \$contact = \$contactRepo->findOneBy(\$matchData);

        if (null === \$contact) {
            \$contact = new Lead();
            \$contact->setEmail(\$requestBody['email']);
            \$contact->setLastActive(new \\DateTime());
        }

        \$pushIdCreated = false;

        if (array_key_exists('push_id', \$requestBody)) {
            \$pushIdCreated = true;
            \$contact->addPushIDEntry(\$requestBody['push_id'], \$requestBody['enabled'], true);
            \$contactRepo->saveEntity(\$contact);
        }

        \$statCreated = false;

        if (array_key_exists('stat', \$requestBody)) {
            \$stat             = \$requestBody['stat'];
            \$notificationRepo = \$em->getRepository(Notification::class);

            \$notification     = \$notificationRepo->getEntity(\$stat['notification_id']);

            if (null !== \$notification) {
                \$statCreated       = true;
                \$notificationModel = \$this->getModel('notification');
                \\assert(\$notificationModel instanceof NotificationModel);
                \$notificationModel->createStatEntry(\$notification, \$contact, \$stat['source'], \$stat['source_id']);
            }
        }

        return new JsonResponse([
            'contact_id'       => \$contact->getId(),
            'stat_recorded'    => \$statCreated,
            'push_id_recorded' => \$pushIdCreated ?: 'existing',
        ]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Controller/AppCallbackController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/AppCallbackController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Controller\\AppCallbackController.php");
    }
}
