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

/* @bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php */
class __TwigTemplate_56ff37cfeda371f511bf294db38514bc extends Template
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

namespace Mautic\\UserBundle\\Model\\UserToken;

use Mautic\\UserBundle\\Entity\\UserToken;

/**
 * Interface UserTokenServiceInterface.
 */
interface UserTokenServiceInterface
{
    /**
     * @param int \$secretLength
     *
     * @return UserToken
     */
    public function generateSecret(UserToken \$token, \$secretLength = 32);

    /**
     * @return bool
     */
    public function verify(UserToken \$token);
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php";
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
        return new Source("", "@bundles/UserBundle/Model/UserToken/UserTokenServiceInterface.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Model\\UserToken\\UserTokenServiceInterface.php");
    }
}
