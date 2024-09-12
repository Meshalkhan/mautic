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

/* @bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php */
class __TwigTemplate_38bf9d86346d9a0ad24c29e268e74058 extends Template
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

use Doctrine\\DBAL\\Connection;
use Mautic\\CoreBundle\\Doctrine\\DatabasePlatform;

/**
 * Help generate SQL statements to format column data.
 */
abstract class AbstractFormatter
{
    protected \\Doctrine\\DBAL\\Platforms\\AbstractPlatform \$platform;

    protected string \$name;

    /**
     * @return AbstractFormatter
     */
    public static function createFormatter(Connection \$db)
    {
        \$name  = DatabasePlatform::getDatabasePlatform(\$db->getDatabasePlatform());
        \$class = '\\Mautic\\CoreBundle\\Doctrine\\QueryFormatter\\\\'.ucfirst(\$name).'Formatter';

        return new \$class(\$db);
    }

    public function __construct(
        protected Connection \$db
    ) {
        \$this->platform = \$this->db->getDatabasePlatform();
        \$this->name     = DatabasePlatform::getDatabasePlatform(\$this->platform);
    }

    /**
     * Format field to datetime.
     *
     * @param string \$format
     *
     * @return mixed
     */
    abstract public function toDateTime(\$field, \$format = 'Y-m-d H:i:s');

    /**
     * Format field to date.
     *
     * @param string \$format
     *
     * @return mixed
     */
    abstract public function toDate(\$field, \$format = 'Y-m-d');

    /**
     * Format field to time.
     *
     * @param string \$format
     *
     * @return mixed
     */
    abstract public function toTime(\$field, \$format = 'H:i:s');

    /**
     * Format field to a numeric.
     *
     * @return mixed
     */
    abstract public function toNumeric(\$field);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/QueryFormatter/AbstractFormatter.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\QueryFormatter\\AbstractFormatter.php");
    }
}
