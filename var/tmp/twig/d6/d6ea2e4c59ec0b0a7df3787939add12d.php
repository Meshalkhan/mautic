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

/* @bundles/FormBundle/Model/SubmissionResultLoader.php */
class __TwigTemplate_a52ad817e465525992147ec18b214f78 extends Template
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

namespace Mautic\\FormBundle\\Model;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\Model\\MauticModelInterface;
use Mautic\\FormBundle\\Entity\\Submission;
use Mautic\\FormBundle\\Entity\\SubmissionRepository;

class SubmissionResultLoader implements MauticModelInterface
{
    public function __construct(
        private EntityManager \$entityManager
    ) {
    }

    /**
     * @param int \$id
     */
    public function getSubmissionWithResult(\$id): ?Submission
    {
        \$repository = \$this->getRepository();

        return \$repository->getEntity(\$id);
    }

    /**
     * @return SubmissionRepository
     */
    private function getRepository()
    {
        return \$this->entityManager->getRepository(Submission::class);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/FormBundle/Model/SubmissionResultLoader.php";
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
        return new Source("", "@bundles/FormBundle/Model/SubmissionResultLoader.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\FormBundle\\Model\\SubmissionResultLoader.php");
    }
}
