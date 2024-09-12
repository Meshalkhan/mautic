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

/* @bundles/FormBundle/Validator/UploadFieldValidator.php */
class __TwigTemplate_174bfce8023e42afc1219f7d52696aae extends Template
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

namespace Mautic\\FormBundle\\Validator;

use Mautic\\CoreBundle\\Exception\\FileInvalidException;
use Mautic\\CoreBundle\\Validator\\FileUploadValidator;
use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Exception\\FileValidationException;
use Mautic\\FormBundle\\Exception\\NoFileGivenException;
use Mautic\\FormBundle\\Form\\Type\\FormFieldFileType;
use Symfony\\Component\\HttpFoundation\\File\\UploadedFile;
use Symfony\\Component\\HttpFoundation\\Request;

class UploadFieldValidator
{
    public function __construct(
        private FileUploadValidator \$fileUploadValidator
    ) {
    }

    /**
     * @return UploadedFile
     *
     * @throws FileValidationException
     * @throws NoFileGivenException
     */
    public function processFileValidation(Field \$field, Request \$request)
    {
        \$files = \$request->files->get('mauticform');

        if (!\$files || !array_key_exists(\$field->getAlias(), \$files) || !\$files[\$field->getAlias()] instanceof UploadedFile) {
            throw new NoFileGivenException();
        }

        \$file = \$files[\$field->getAlias()];

        \$properties = \$field->getProperties();

        \$maxUploadSize     = \$properties[FormFieldFileType::PROPERTY_ALLOWED_FILE_SIZE];
        \$allowedExtensions = \$properties[FormFieldFileType::PROPERTY_ALLOWED_FILE_EXTENSIONS];

        try {
            \$this->fileUploadValidator->validate(\$file->getSize(), \$file->getClientOriginalExtension(), \$maxUploadSize, \$allowedExtensions, 'mautic.form.submission.error.file.extension', 'mautic.form.submission.error.file.size');

            return \$file;
        } catch (FileInvalidException \$e) {
            throw new FileValidationException(\$e->getMessage());
        }
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Validator/UploadFieldValidator.php";
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
        return new Source("", "@bundles/FormBundle/Validator/UploadFieldValidator.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Validator\\UploadFieldValidator.php");
    }
}
