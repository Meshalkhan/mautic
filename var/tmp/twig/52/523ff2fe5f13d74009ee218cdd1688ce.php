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

/* @bundles/UserBundle/Hash/UserHash.php */
class __TwigTemplate_105f3e928b516b2d2f55a6c382a71b50 extends Template
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

namespace Mautic\\UserBundle\\Hash;

class UserHash
{
    public const FAKE_USER_HASH = 'xxxxxxxxxxxxxx';

    /**
     * Return fake user hash for emails etc. Users does not have hash, only Contacts.
     */
    public static function getFakeUserHash(): string
    {
        return self::FAKE_USER_HASH;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Hash/UserHash.php";
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
        return new Source("", "@bundles/UserBundle/Hash/UserHash.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Hash\\UserHash.php");
    }
}
