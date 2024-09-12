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

/* @bundles/CoreBundle/Doctrine/DatabasePlatform.php */
class __TwigTemplate_5806fed02d8ab77b94b8bd968c5b323c extends Template
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

namespace Mautic\\CoreBundle\\Doctrine;

use Doctrine\\DBAL\\Platforms\\AbstractMySQLPlatform;
use Doctrine\\DBAL\\Platforms\\AbstractPlatform;
use Doctrine\\DBAL\\Platforms\\DB2Platform;
use Doctrine\\DBAL\\Platforms\\OraclePlatform;
use Doctrine\\DBAL\\Platforms\\PostgreSQLPlatform;
use Doctrine\\DBAL\\Platforms\\SqlitePlatform;
use Doctrine\\DBAL\\Platforms\\SQLServerPlatform;

/**
 * A workaround for deprecated \\Doctrine\\DBAL\\Platforms\\AbstractPlatform::getName.
 */
class DatabasePlatform
{
    public static function getDatabasePlatform(AbstractPlatform \$platform): string
    {
        if (\$platform instanceof AbstractMySQLPlatform) {
            return 'mysql';
        }

        if (\$platform instanceof DB2Platform) {
            return 'db2';
        }

        if (\$platform instanceof OraclePlatform) {
            return 'oracle';
        }

        if (\$platform instanceof PostgreSQLPlatform) {
            return 'postgresql';
        }

        if (\$platform instanceof SQLServerPlatform) {
            return 'mssql';
        }

        if (\$platform instanceof SqlitePlatform) {
            return 'sqlite';
        }

        throw new \\RuntimeException('Unknown platform '.\$platform::class);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Doctrine/DatabasePlatform.php";
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
        return new Source("", "@bundles/CoreBundle/Doctrine/DatabasePlatform.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Doctrine\\DatabasePlatform.php");
    }
}
