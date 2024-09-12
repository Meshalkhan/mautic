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

/* @bundles/FormBundle/Crate/FileFieldCrate.php */
class __TwigTemplate_c708f0e88921e2f9e2853b05692699de extends Template
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

class FileFieldCrate
{
    public function __construct(
        private UploadedFile \$uploadedFile,
        private Field \$field
    ) {
    }

    /**
     * @return UploadedFile
     */
    public function getUploadedFile()
    {
        return \$this->uploadedFile;
    }

    /**
     * @return Field
     */
    public function getField()
    {
        return \$this->field;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Crate/FileFieldCrate.php";
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
        return new Source("", "@bundles/FormBundle/Crate/FileFieldCrate.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Crate\\FileFieldCrate.php");
    }
}
