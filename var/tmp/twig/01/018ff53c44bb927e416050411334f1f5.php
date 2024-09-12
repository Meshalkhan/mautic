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

/* @bundles/CoreBundle/Twig/Helper/GravatarHelper.php */
class __TwigTemplate_a9e792be1cf2bceaa061b305c033307f extends Template
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

namespace Mautic\\CoreBundle\\Twig\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\CoreBundle\\Helper\\UrlHelper;
use Mautic\\LeadBundle\\Twig\\Helper\\DefaultAvatarHelper;
use Symfony\\Component\\HttpFoundation\\RequestStack;

final class GravatarHelper
{
    private bool \$devMode;

    /**
     * @var array<string>
     */
    private array \$devHosts;

    public function __construct(
        private DefaultAvatarHelper \$defaultAvatarHelper,
        CoreParametersHelper \$coreParametersHelper,
        private RequestStack \$requestStack
    ) {
        \$this->devMode             = MAUTIC_ENV === 'dev';
        \$this->devHosts            = (array) \$coreParametersHelper->get('dev_hosts');
    }

    /**
     * @param string \$email
     * @param string \$size
     * @param string \$default
     */
    public function getImage(\$email, \$size = '250', \$default = null): string
    {
        \$request      = \$this->requestStack->getCurrentRequest();
        \$localDefault = (\$this->devMode
            || (\$request
                && in_array(
                    \$request->getClientIp(),
                    array_merge(\$this->devHosts, ['127.0.0.1', 'fe80::1', '::1'])
                )))
            ?
            'mp'
            :
            \$this->defaultAvatarHelper->getDefaultAvatar(true);

        \$url = 'https://www.gravatar.com/avatar/'.md5(strtolower(trim(\$email))).'?s='.\$size;

        if (null === \$default) {
            \$default = \$localDefault;
        }

        \$default = (str_contains(\$default, '.') && !str_starts_with(\$default, 'http')) ? UrlHelper::rel2abs(\$default) : \$default;

        return \$url.('&d='.urlencode(\$default));
    }

    public function getName(): string
    {
        return 'gravatar';
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Twig/Helper/GravatarHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Twig/Helper/GravatarHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Twig\\Helper\\GravatarHelper.php");
    }
}
