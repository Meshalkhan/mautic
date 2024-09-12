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

/* @bundles/NotificationBundle/Controller/JsController.php */
class __TwigTemplate_113173072d0ec91ad9d044b32b2e2ea1 extends Template
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

use Mautic\\CoreBundle\\Controller\\CommonController;
use Symfony\\Component\\HttpFoundation\\Response;

class JsController extends CommonController
{
    /**
     * We can't user JsonResponse here, because
     * it improperly encodes the data array.
     */
    public function manifestAction(): Response
    {
        \$gcmSenderId = \$this->coreParametersHelper->get('gcm_sender_id', '446150739532');
        \$data        = [
            'start_url'             => '/',
            'gcm_sender_id'         => \$gcmSenderId,
            'gcm_user_visible_only' => true,
        ];

        return new Response(
            json_encode(\$data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES),
            200,
            [
                'Content-Type' => 'application/json',
            ]
        );
    }

    public function workerAction(): Response
    {
        return new Response(
            \"importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');\",
            200,
            [
                'Service-Worker-Allowed' => '/',
                'Content-Type'           => 'application/javascript',
            ]
        );
    }

    public function updaterAction(): Response
    {
        return new Response(
            \"importScripts('https://cdn.onesignal.com/sdks/OneSignalSDK.js');\",
            200,
            [
                'Service-Worker-Allowed' => '/',
                'Content-Type'           => 'application/javascript',
            ]
        );
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/NotificationBundle/Controller/JsController.php";
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
        return new Source("", "@bundles/NotificationBundle/Controller/JsController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\NotificationBundle\\Controller\\JsController.php");
    }
}
