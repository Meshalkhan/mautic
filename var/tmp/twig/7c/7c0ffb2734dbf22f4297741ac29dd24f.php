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

/* @bundles/CoreBundle/Helper/Filesystem.php */
class __TwigTemplate_f0816a1571d6485902ae1c0f2cb0627f extends Template
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

namespace Mautic\\CoreBundle\\Helper;

use Symfony\\Component\\Filesystem\\Exception\\IOException;
use Symfony\\Component\\Filesystem\\Filesystem as SymfonyFilesystem;

/**
 * Extends Symfony's filesystem but adding the readFile method that we need to abstract for unit tests.
 * Using file_get_contents() directly makes unit testing impossible.
 *
 * @see https://github.com/symfony/filesystem/pull/4
 */
class Filesystem extends SymfonyFilesystem
{
    /**
     * Read file and return contents.
     *
     * @throws Exception\\IOException
     */
    public function readFile(string \$filename): string
    {
        if (false === \$source = @file_get_contents(\$filename)) {
            throw new IOException(sprintf('Failed to read \"%s\" because source file could not be opened for reading.', \$filename), 0, null, \$filename);
        }

        return \$source;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/Filesystem.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/Filesystem.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\Filesystem.php");
    }
}
