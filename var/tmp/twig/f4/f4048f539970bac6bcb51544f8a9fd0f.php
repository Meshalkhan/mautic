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

/* @bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php */
class __TwigTemplate_200961ea414b8724d2fa491aff8850d1 extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

final class AnalyticsHelper
{
    private string \$code;

    public function __construct(CoreParametersHelper \$parametersHelper)
    {
        \$this->code = htmlspecialchars_decode((string) \$parametersHelper->get('google_analytics'));
    }

    public function getCode(): string
    {
        return \$this->code;
    }

    /**
     * @param string \$content
     */
    public function addCode(\$content): string
    {
        // Add analytics
        \$analytics = \$this->getCode();

        // Check for html doc
        if (!str_contains(\$content, '<html')) {
            \$content = \"<html>\\n<head>{\$analytics}</head>\\n<body>{\$content}</body>\\n</html>\";
        } elseif (!str_contains(\$content, '<head>')) {
            \$content = str_replace('<html>', \"<html>\\n<head>\\n{\$analytics}\\n</head>\", \$content);
        } elseif (!empty(\$analytics)) {
            \$content = str_replace('</head>', \$analytics.\"\\n</head>\", \$content);
        }

        return \$content;
    }

    public function getName(): string
    {
        return 'analytics';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/AnalyticsHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Helper\\AnalyticsHelper.php");
    }
}
