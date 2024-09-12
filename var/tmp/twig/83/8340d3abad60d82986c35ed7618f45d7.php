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

/* @bundles/EmailBundle/Stat/StatHelper.php */
class __TwigTemplate_4b71fbabbcf10fb6107aefc926a88fc9 extends Template
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

namespace Mautic\\EmailBundle\\Stat;

use Mautic\\EmailBundle\\Entity\\Stat;
use Mautic\\EmailBundle\\Model\\EmailStatModel;
use Mautic\\EmailBundle\\Stat\\Exception\\StatNotFoundException;

class StatHelper
{
    /**
     * Just store email ID and lead ID to avoid doctrine RAM issues with entities.
     *
     * @var Reference[]
     */
    private \$stats = [];

    /**
     * @var array
     */
    private \$deleteUs = [];

    public function __construct(
        private EmailStatModel \$emailStatModel
    ) {
    }

    public function storeStat(Stat \$stat, \$emailAddress): void
    {
        \$this->emailStatModel->saveEntity(\$stat);

        // to avoid Doctrine RAM issues, we're just going to hold onto ID references
        \$this->stats[\$emailAddress] = new Reference(\$stat);

        // clear stat from doctrine memory
        \$this->emailStatModel->getRepository()->detachEntity(\$stat);
    }

    public function deletePending(): void
    {
        if (count(\$this->deleteUs)) {
            \$this->emailStatModel->getRepository()->deleteStats(\$this->deleteUs);
        }
    }

    public function markForDeletion(Reference \$stat): void
    {
        \$this->deleteUs[] = \$stat->getStatId();
    }

    /**
     * @return Reference
     *
     * @throws StatNotFoundException
     */
    public function getStat(\$emailAddress)
    {
        if (!isset(\$this->stats[\$emailAddress])) {
            throw new StatNotFoundException();
        }

        return \$this->stats[\$emailAddress];
    }

    public function reset(): void
    {
        \$this->deleteUs = [];
        \$this->stats    = [];
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/EmailBundle/Stat/StatHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Stat/StatHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\EmailBundle\\Stat\\StatHelper.php");
    }
}
