<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Helper/FileUploader.php */
class __TwigTemplate_912ee4a2303a0995608fceaf10a87da0 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<?php

namespace Mautic\\CoreBundle\\Helper;

use Mautic\\CoreBundle\\Exception\\FilePathException;
use Mautic\\CoreBundle\\Exception\\FileUploadException;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\FileException;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;

class FileUploader
{
    public function __construct(
        private FilePathResolver \$filePathResolver
    ) {
    }

    /**
     * @param string \$uploadDir
     *
     * @return string
     *
     * @throws FileUploadException
     */
    public function upload(\$uploadDir, UploadedFile \$file)
    {
        try {
            \$fileName = \$this->filePathResolver->getUniqueFileName(\$uploadDir, \$file);
            \$this->filePathResolver->createDirectory(\$uploadDir);

            try {
                \$file->move(\$uploadDir, \$fileName);

                return \$fileName;
            } catch (FileException) {
                throw new FileUploadException('Could not upload file');
            }
        } catch (FilePathException \$e) {
            throw new FileUploadException(\$e->getMessage());
        }
    }

    /**
     * @param string \$path
     */
    public function delete(\$path): void
    {
        \$this->filePathResolver->delete(\$path);
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Helper/FileUploader.php";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Helper/FileUploader.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\FileUploader.php");
    }
}
