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

/* @bundles/InstallBundle/Configurator/Step/DoctrineStep.php */
class __TwigTemplate_e964b11e3700bed3fb16279bcf330a06 extends Template
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

namespace Mautic\\InstallBundle\\Configurator\\Step;

use Mautic\\CoreBundle\\Configurator\\Configurator;
use Mautic\\CoreBundle\\Configurator\\Step\\StepInterface;
use Mautic\\InstallBundle\\Configurator\\Form\\DoctrineStepType;

/**
 * @author Fabien Potencier <fabien@symfony.com>
 */
class DoctrineStep implements StepInterface
{
    /**
     * Database driver.
     */
    public \$driver = 'pdo_mysql';

    /**
     * Database host.
     */
    public \$host = 'localhost';

    /**
     * Database host. Read Only Replica.
     */
    public ?string \$host_ro = null;

    /**
     * Database table prefix.
     * Required in step.
     *
     * @var string
     */
    public \$table_prefix;

    /**
     * Database connection port.
     */
    public \$port = 3306;

    /**
     * Database name.
     */
    public \$name;

    /**
     * Database user.
     */
    public \$user;

    /**
     * Database user's password.
     *
     * @var string
     */
    public \$password;

    /**
     * Backup tables if they exist; otherwise drop them.
     * Required in step.
     *
     * @var bool
     */
    public \$backup_tables = true;

    /**
     * Prefix for backup tables.
     * Required in step.
     *
     * @var string
     */
    public \$backup_prefix = 'bak_';

    public ?string \$server_version;

    public function __construct(Configurator \$configurator)
    {
        \$parameters = \$configurator->getParameters();

        foreach (\$parameters as \$key => \$value) {
            if (str_starts_with(\$key, 'db_')) {
                \$parameters[substr(\$key, 3)] = \$value;
                \$key                         = substr(\$key, 3);
                \$this->\$key                  = \$value;
            }
        }
    }

    public function getFormType(): string
    {
        return DoctrineStepType::class;
    }

    public function checkRequirements(): array
    {
        \$messages = [];

        if (!class_exists('\\PDO')) {
            \$messages[] = 'mautic.install.pdo.mandatory';
        } else {
            if (!in_array('mysql', \\PDO::getAvailableDrivers(), true)) {
                \$messages[] = 'mautic.install.pdo.drivers';
            }
        }

        return \$messages;
    }

    public function checkOptionalSettings(): array
    {
        return [];
    }

    /**
     * @return mixed[]
     */
    public function update(StepInterface \$data): array
    {
        \$parameters = [];

        foreach (\$data as \$key => \$value) {
            \$parameters['db_'.\$key] = \$value;
        }

        return \$parameters;
    }

    public function getTemplate(): string
    {
        return '@MauticInstall/Install/doctrine.html.twig';
    }

    /**
     * Return the key values of the available driver array.
     * Required in step.
     *
     * @see \\Mautic\\InstallBundle\\Configurator\\Form\\DoctrineStepType::buildForm()
     */
    public static function getDriverKeys(): array
    {
        return array_keys(static::getDrivers());
    }

    /**
     * Fetches the available database drivers for the environment.
     */
    public static function getDrivers(): array
    {
        \$mauticSupported = [
            'pdo_mysql' => 'MySQL PDO (Recommended)',
        ];

        \$supported = [];

        // Add PDO drivers if supported
        if (class_exists('\\PDO')) {
            \$pdoDrivers = \\PDO::getAvailableDrivers();

            foreach (\$pdoDrivers as \$driver) {
                if (array_key_exists('pdo_'.\$driver, \$mauticSupported)) {
                    \$supported['pdo_'.\$driver] = \$mauticSupported['pdo_'.\$driver];
                }
            }
        }

        return \$supported;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/InstallBundle/Configurator/Step/DoctrineStep.php";
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
        return new Source("", "@bundles/InstallBundle/Configurator/Step/DoctrineStep.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\InstallBundle\\Configurator\\Step\\DoctrineStep.php");
    }
}
