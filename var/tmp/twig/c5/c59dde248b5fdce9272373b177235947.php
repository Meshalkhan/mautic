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

/* @bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php */
class __TwigTemplate_2d7d3f76a60e9b6ce5966e37f8ad2c70 extends Template
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

namespace Mautic\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition;

final class Category
{
    public const ANTISPAM       = 'antispam';

    public const AUTOREPLY      = 'autoreply';

    public const CONCURRENT     = 'concurrent';

    public const CONTENT_REJECT = 'content_reject';

    public const COMMAND_REJECT = 'command_reject';

    public const INTERNAL_ERROR = 'internal_error';

    public const DEFER          = 'defer';

    public const DELAYED        = 'delayed';

    public const DNS_LOOP       = 'dns_loop';

    public const DNS_UNKNOWN    = 'dns_unknown';

    public const FULL           = 'full';

    public const INACTIVE       = 'inactive';

    public const LATIN_ONLY     = 'latin_only';

    public const OTHER          = 'other';

    public const OVERSIZE       = 'oversize';

    public const OUTOFOFFICE    = 'outofoffice';

    public const UNKNOWN        = 'unknown';

    public const UNRECOGNIZED   = 'unrecognized';

    public const USER_REJECT    = 'user_reject';

    public const WARNING        = 'warning';
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php";
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
        return new Source("", "@bundles/EmailBundle/MonitoredEmail/Processor/Bounce/Definition/Category.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\MonitoredEmail\\Processor\\Bounce\\Definition\\Category.php");
    }
}
