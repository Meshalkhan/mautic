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

/* @bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php */
class __TwigTemplate_64748973037bb0b1a7fbfc0e867b9acf extends Template
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

namespace Mautic\\CoreBundle\\Helper\\RandomHelper;

final class RandomHelper implements RandomHelperInterface
{
    /**
     * Based on \\Nette\\Utils\\Random.
     *
     * @param int    \$length
     * @param string \$charlist
     */
    public function generate(\$length = 10, \$charlist = '0-9a-z'): string
    {
        \$charlist = count_chars(preg_replace_callback('#.-.#', fn (array \$m): string => implode('', range(\$m[0][0], \$m[0][2])), \$charlist), 3);
        \$chLen    = strlen(\$charlist);
        if (\$length < 1) {
            throw new \\InvalidArgumentException('Length must be greater than zero.');
        } elseif (\$chLen < 2) {
            throw new \\InvalidArgumentException('Character list must contain as least two chars.');
        }
        \$res = '';
        for (\$i = 0; \$i < \$length; ++\$i) {
            \$res .= \$charlist[random_int(0, \$chLen - 1)];
        }

        return \$res;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php";
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
        return new Source("", "@bundles/CoreBundle/Helper/RandomHelper/RandomHelper.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Helper\\RandomHelper\\RandomHelper.php");
    }
}
