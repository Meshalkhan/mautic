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

/* @bundles/MessengerBundle/Service/TestMessageFactory.php */
class __TwigTemplate_7130f655b67d532912badaf95953bd57 extends Template
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

namespace Mautic\\MessengerBundle\\Service;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\MessengerBundle\\Message\\TestEmail;
use Mautic\\MessengerBundle\\Message\\TestFailed;
use Mautic\\MessengerBundle\\Message\\TestHit;

class TestMessageFactory
{
    public function __construct(
        private UserHelper \$userHelper
    ) {
    }

    public function crateMessageByDsnKey(string \$key): object
    {
        return match (\$key) {
            'messenger_dsn_email'  => new TestEmail(\$this->userHelper->getUser()->getId()),
            'messenger_dsn_hit'    => new TestHit(\$this->userHelper->getUser()->getId()),
            'messenger_dsn_failed' => new TestFailed(\$this->userHelper->getUser()->getId()),
            default                => throw new \\InvalidArgumentException(sprintf('Unsupported key: \"%s\"', \$key)),
        };
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/MessengerBundle/Service/TestMessageFactory.php";
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
        return new Source("", "@bundles/MessengerBundle/Service/TestMessageFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\MessengerBundle\\Service\\TestMessageFactory.php");
    }
}
