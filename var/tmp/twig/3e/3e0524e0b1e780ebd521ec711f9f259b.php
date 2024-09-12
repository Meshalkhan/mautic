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

/* @bundles/SmsBundle/Api/AbstractSmsApi.php */
class __TwigTemplate_6ae6a2bbe6cba1b3d4be5652e48f34f7 extends Template
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

namespace Mautic\\SmsBundle\\Api;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\PageBundle\\Model\\TrackableModel;
use Mautic\\SmsBundle\\Sms\\TransportInterface;

/**
 * @deprecated use TransportInterface instead
 */
abstract class AbstractSmsApi implements TransportInterface
{
    public function __construct(
        protected TrackableModel \$pageTrackableModel
    ) {
    }

    /**
     * @param string \$content
     *
     * @return mixed
     */
    abstract public function sendSms(Lead \$lead, \$content);

    /**
     * Convert a non-tracked url to a tracked url.
     *
     * @param string \$url
     *
     * @return string
     */
    public function convertToTrackedUrl(\$url, array \$clickthrough = [])
    {
        /* @var \\Mautic\\PageBundle\\Entity\\Redirect \$redirect */
        \$trackable = \$this->pageTrackableModel->getTrackableByUrl(\$url, 'sms', \$clickthrough['sms']);

        return \$this->pageTrackableModel->generateTrackableUrl(\$trackable, \$clickthrough, true);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/SmsBundle/Api/AbstractSmsApi.php";
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
        return new Source("", "@bundles/SmsBundle/Api/AbstractSmsApi.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\SmsBundle\\Api\\AbstractSmsApi.php");
    }
}
