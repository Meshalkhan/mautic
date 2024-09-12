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

/* @bundles/AssetBundle/Controller/UploadController.php */
class __TwigTemplate_bf31e742b088c7b4fb34ad4129bca86f extends Template
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

namespace Mautic\\AssetBundle\\Controller;

use Oneup\\UploaderBundle\\Controller\\DropzoneController;
use Oneup\\UploaderBundle\\Uploader\\Response\\EmptyResponse;
use Symfony\\Component\\HttpFoundation\\File\\Exception\\UploadException;
use Symfony\\Component\\HttpFoundation\\JsonResponse;
use Symfony\\Contracts\\Translation\\TranslatorInterface;

class UploadController extends DropzoneController
{
    private TranslatorInterface \$translator;

    public function upload(): JsonResponse
    {
        \$request  = \$this->getRequest();
        \$response = new EmptyResponse();
        \$files    = \$this->getFiles(\$request->files);

        if (!empty(\$files)) {
            foreach (\$files as \$file) {
                try {
                    \$this->handleUpload(\$file, \$response, \$request);
                } catch (UploadException \$e) {
                    \$this->errorHandler->addException(\$response, \$e);
                } catch (\\Exception \$e) {
                    error_log(\$e);

                    \$error = new UploadException(\$this->translator->trans('mautic.asset.error.file.failed'));
                    \$this->errorHandler->addException(\$response, \$error);
                }
            }
        } else {
            \$error = new UploadException(\$this->translator->trans('mautic.asset.error.file.failed'));
            \$this->errorHandler->addException(\$response, \$error);
        }

        return \$this->createSupportedJsonResponse(\$response->assemble());
    }

    #[\\Symfony\\Contracts\\Service\\Attribute\\Required]
    public function setTranslator(TranslatorInterface \$translator): void
    {
        \$this->translator = \$translator;
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
        return "@bundles/AssetBundle/Controller/UploadController.php";
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
        return new Source("", "@bundles/AssetBundle/Controller/UploadController.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\AssetBundle\\Controller\\UploadController.php");
    }
}
