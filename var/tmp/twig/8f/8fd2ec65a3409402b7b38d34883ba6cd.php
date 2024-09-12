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

/* @bundles/FormBundle/Crate/UploadFileCrate.php */
class __TwigTemplate_e7e7c72e76f80fccc66c809a02e9a04b extends Template
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

namespace Mautic\\FormBundle\\Crate;

use Mautic\\FormBundle\\Entity\\Field;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class UploadFileCrate implements \\Iterator
{
    /**
     * @var array|FileFieldCrate[]
     */
    private array \$fileFieldCrate = [];

    private int \$position = 0;

    public function addFile(UploadedFile \$file, Field \$field): void
    {
        \$this->fileFieldCrate[] = new FileFieldCrate(\$file, \$field);
    }

    public function rewind(): void
    {
        \$this->position = 0;
    }

    public function current(): mixed
    {
        return \$this->fileFieldCrate[\$this->position];
    }

    public function key(): mixed
    {
        return \$this->position;
    }

    public function next(): void
    {
        ++\$this->position;
    }

    public function valid(): bool
    {
        return isset(\$this->fileFieldCrate[\$this->position]);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Crate/UploadFileCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/UploadFileCrate.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Crate\\UploadFileCrate.php");
    }
}
