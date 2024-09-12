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

/* @bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php */
class __TwigTemplate_8db6cefb0603dedd9fefaf2bc9586bc0 extends Template
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

namespace Mautic\\CoreBundle\\Doctrine\\QueryFormatter;

/**
 * Help generate SQL statements to format column data.
 */
class MysqlFormatter extends AbstractFormatter
{
    /**
     * Format field to datetime.
     *
     * @param string \$format
     */
    public function toDateTime(\$field, \$format = '%Y-%m-%d %k:%i:%s'): string
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to date.
     *
     * @param string \$format
     */
    public function toDate(\$field, \$format = '%Y-%m-%d'): string
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to time.
     *
     * @param string \$format
     */
    public function toTime(\$field, \$format = '%k:%i:%s'): string
    {
        return \"STR_TO_DATE(\$field, '\$format')\";
    }

    /**
     * Format field to a numeric.
     *
     * @return mixed
     */
    public function toNumeric(\$field)
    {
        return \$field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/QueryFormatter/MysqlFormatter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\QueryFormatter\\MysqlFormatter.php");
    }
}
