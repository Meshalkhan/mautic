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

/* @bundles/UserBundle/Form/Validator/Constraints/NotWeak.php */
class __TwigTemplate_8a9d606683b8a39f8a2716f343e72a73 extends Template
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

namespace Mautic\\UserBundle\\Form\\Validator\\Constraints;

use Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel;
use Symfony\\Component\\Validator\\Constraint;

final class NotWeak extends Constraint
{
    public const TOO_WEAK = 'f61e730a-284e-11eb-adc1-0242ac120002';

    protected static \$errorNames = [
        self::TOO_WEAK => 'PASSWORD_TOO_WEAK_ERROR',
    ];

    public string \$message = 'This password is too weak. Consider using a stronger password.';

    public int \$score = PasswordStrengthEstimatorModel::MINIMUM_PASSWORD_STRENGTH_ALLOWED;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/UserBundle/Form/Validator/Constraints/NotWeak.php";
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
        return new Source("", "@bundles/UserBundle/Form/Validator/Constraints/NotWeak.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Form\\Validator\\Constraints\\NotWeak.php");
    }
}
