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

/* @bundles/CoreBundle/Factory/ModelFactory.php */
class __TwigTemplate_df0182f13f7949f9eefc84ce4b794763 extends Template
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

namespace Mautic\\CoreBundle\\Factory;

use Mautic\\CoreBundle\\Model\\AbstractCommonModel;
use Mautic\\CoreBundle\\Model\\MauticModelInterface;
use Psr\\Container\\ContainerInterface;

/**
 * @template M of object
 */
class ModelFactory
{
    public function __construct(
        private ContainerInterface \$container
    ) {
    }

    /**
     * @return AbstractCommonModel<M>
     */
    public function getModel(string \$modelNameKey): MauticModelInterface
    {
        if (class_exists(\$modelNameKey) && \$this->container->has(\$modelNameKey)) {
            return \$this->container->get(\$modelNameKey);
        }

        // Shortcut for models with the same name as the bundle
        if (!str_contains(\$modelNameKey, '.')) {
            \$modelNameKey = \"\$modelNameKey.\$modelNameKey\";
        }

        \$parts = explode('.', \$modelNameKey);

        if (2 !== count(\$parts)) {
            throw new \\InvalidArgumentException(\$modelNameKey.' is not a valid model key.');
        }

        [\$bundle, \$name] = \$parts;

        // The container is now case sensitive
        \$containerKey = sprintf('mautic.%s.model.%s', \$bundle, \$name);

        if (\$this->container->has(\$containerKey)) {
            return \$this->container->get(\$containerKey);
        }

        throw new \\InvalidArgumentException(\$containerKey.' is not a registered model container key.');
    }

    /**
     * Check if a model exists.
     */
    public function hasModel(\$modelNameKey)
    {
        try {
            \$this->getModel(\$modelNameKey);

            return true;
        } catch (\\InvalidArgumentException) {
            return false;
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
        return "@bundles/CoreBundle/Factory/ModelFactory.php";
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
        return new Source("", "@bundles/CoreBundle/Factory/ModelFactory.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Factory\\ModelFactory.php");
    }
}
