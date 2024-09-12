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

/* @bundles/EmailBundle/Helper/UrlMatcher.php */
class __TwigTemplate_6131e3069bd331438dcbef455232661c extends Template
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

namespace Mautic\\EmailBundle\\Helper;

class UrlMatcher
{
    public static function hasMatch(array \$urlsToCheckAgainst, \$urlToFind): bool
    {
        \$urlToFind = self::sanitizeUrl(\$urlToFind);

        foreach (\$urlsToCheckAgainst as \$url) {
            \$url = self::sanitizeUrl(\$url);

            if (preg_match('/'.preg_quote(\$url, '/').'/i', \$urlToFind)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return mixed|string
     */
    private static function sanitizeUrl(\$url)
    {
        // Handle escaped forward slashes as BC
        \$url = str_replace('\\\\/', '/', \$url);

        // Ignore ending slash
        \$url = rtrim(\$url, '/');

        // Ignore http/https
        \$url = str_replace(['http://', 'https://'], '', \$url);

        // Remove preceding //
        if (str_starts_with(\$url, '//')) {
            \$url = str_replace('//', '', \$url);
        }

        return \$url;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Helper/UrlMatcher.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/UrlMatcher.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Helper\\UrlMatcher.php");
    }
}
