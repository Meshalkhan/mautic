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

/* @bundles/LeadBundle/Twig/Extension/LeadExtension.php */
class __TwigTemplate_260e21b6d6ec396a02c3e281a0da284f extends Template
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

declare(strict_types=1);

namespace Mautic\\LeadBundle\\Twig\\Extension;

use Mautic\\LeadBundle\\Entity\\Lead;
use Mautic\\LeadBundle\\Twig\\Helper\\AvatarHelper;
use Twig\\Extension\\AbstractExtension;
use Twig\\TwigFunction;

class LeadExtension extends AbstractExtension
{
    public function __construct(
        protected AvatarHelper \$avatarHelper
    ) {
    }

    /**
     * @see Twig_Extension::getFunctions()
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('leadGetAvatar', [\$this, 'getAvatar']),
        ];
    }

    /**
     * @see AvatarHelper::getAvatar
     *
     * @return mixed
     */
    public function getAvatar(Lead \$lead)
    {
        return \$this->avatarHelper->getAvatar(\$lead);
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/LeadBundle/Twig/Extension/LeadExtension.php";
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
        return new Source("", "@bundles/LeadBundle/Twig/Extension/LeadExtension.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\LeadBundle\\Twig\\Extension\\LeadExtension.php");
    }
}
