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

/* @bundles/PageBundle/Helper/TokenHelper.php */
class __TwigTemplate_e89ae135bd166b905944356fb4e8dc96 extends Template
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

namespace Mautic\\PageBundle\\Helper;

use Mautic\\PageBundle\\Model\\PageModel;

class TokenHelper
{
    public function __construct(
        protected PageModel \$model
    ) {
    }

    public function findPageTokens(\$content, \$clickthrough = []): array
    {
        preg_match_all('/{pagelink=(.*?)}/', \$content, \$matches);

        \$tokens = [];
        if (!empty(\$matches[1])) {
            foreach (\$matches[1] as \$key => \$pageId) {
                \$token = \$matches[0][\$key];
                if (!empty(\$tokens[\$token])) {
                    continue;
                }

                \$page = \$this->model->getEntity(\$pageId);

                if (!\$page) {
                    continue;
                }

                \$tokens[\$token] = \$this->model->generateUrl(\$page, true, \$clickthrough);
            }

            unset(\$matches);
        }

        return \$tokens;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/PageBundle/Helper/TokenHelper.php";
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
        return new Source("", "@bundles/PageBundle/Helper/TokenHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PageBundle\\Helper\\TokenHelper.php");
    }
}
