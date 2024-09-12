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

/* @bundles/PluginBundle/Exception/ApiErrorException.php */
class __TwigTemplate_4aa8c9c0ab393743b75d0f569b2abae3 extends Template
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

namespace Mautic\\PluginBundle\\Exception;

use Mautic\\LeadBundle\\Entity\\Lead;

class ApiErrorException extends \\Exception
{
    private \$contactId;

    private ?Lead \$contact = null;

    /**
     * @param string \$message
     * @param int    \$code
     */
    public function __construct(\$message = 'API error', \$code = 0, \\Exception \$previous = null)
    {
        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return mixed
     */
    public function getContactId()
    {
        return \$this->contactId;
    }

    /**
     * @param mixed \$contactId
     *
     * @return ApiErrorException
     */
    public function setContactId(\$contactId)
    {
        \$this->contactId = \$contactId;

        return \$this;
    }

    /**
     * @return Lead
     */
    public function getContact()
    {
        return \$this->contact;
    }

    /**
     * @return ApiErrorException
     */
    public function setContact(Lead \$contact)
    {
        \$this->contact = \$contact;

        return \$this;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PluginBundle/Exception/ApiErrorException.php";
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
        return new Source("", "@bundles/PluginBundle/Exception/ApiErrorException.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PluginBundle\\Exception\\ApiErrorException.php");
    }
}
