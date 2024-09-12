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

/* @bundles/SmsBundle/Callback/CallbackInterface.php */
class __TwigTemplate_84ead3b1362e79f3c058bdbcbf5ab8bb extends Template
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

namespace Mautic\\SmsBundle\\Callback;

use Doctrine\\Common\\Collections\\ArrayCollection;
use Mautic\\SmsBundle\\Exception\\NumberNotFoundException;
use Symfony\\Component\\HttpFoundation\\Request;
use Symfony\\Component\\HttpKernel\\Exception\\BadRequestHttpException;
use Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException;

interface CallbackInterface
{
    /**
     * Returns a \"transport\" string to match the URL path /sms/{transport}/callback.
     *
     * @return string
     */
    public function getTransportName();

    /**
     * Return all contacts that match whatever identifiers the service provides (likely number).
     *
     * @return ArrayCollection
     *
     * @throws NumberNotFoundException
     * @throws BadRequestHttpException
     * @throws NotFoundHttpException
     */
    public function getContacts(Request \$request);

    /**
     * Extract the message in the reply from the request.
     *
     * @return string
     *
     * @throws BadRequestHttpException
     * @throws NotFoundHttpException
     */
    public function getMessage(Request \$request);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Callback/CallbackInterface.php";
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
        return new Source("", "@bundles/SmsBundle/Callback/CallbackInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Callback\\CallbackInterface.php");
    }
}
