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

/* @bundles/EmailBundle/Helper/MailHashHelper.php */
class __TwigTemplate_0afd200f72c6906c73754149d70e1f4c extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

final class MailHashHelper
{
    public function __construct(private CoreParametersHelper \$coreParametersHelper)
    {
    }

    public function getEmailHash(string \$email): string
    {
        \$secret = \$this->coreParametersHelper->get('secret_key');

        return self::getEmailHashForSecret(\$email, \$secret);
    }

    public static function getEmailHashForSecret(string \$email, string \$secret): string
    {
        return hash_hmac('sha256', \$email, \$secret);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Helper/MailHashHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/MailHashHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Helper\\MailHashHelper.php");
    }
}
