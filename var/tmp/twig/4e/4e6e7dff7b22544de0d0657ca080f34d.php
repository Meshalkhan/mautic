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

/* @bundles/UserBundle/Entity/UserTokenRepositoryInterface.php */
class __TwigTemplate_88c76bdc913ac73207684f988c6493e9 extends Template
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

namespace Mautic\\UserBundle\\Entity;

/**
 * Interface UserTokenRepositoryInterface.
 */
interface UserTokenRepositoryInterface
{
    /**
     * @param string \$secret
     *
     * @return UserToken
     */
    public function isSecretUnique(\$secret);

    /**
     * @return bool
     */
    public function verify(UserToken \$token);

    /**
     * Delete expired user tokens.
     *
     * @param bool \$isDryRun
     *
     * @return int Number of selected or deleted rows
     */
    public function deleteExpired(\$isDryRun = false);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Entity/UserTokenRepositoryInterface.php";
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
        return new Source("", "@bundles/UserBundle/Entity/UserTokenRepositoryInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Entity\\UserTokenRepositoryInterface.php");
    }
}
