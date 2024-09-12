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

/* @bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php */
class __TwigTemplate_987f13f11cc68c6edd658f2eecdda15f extends Template
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

namespace Mautic\\CoreBundle\\Form\\DataTransformer;

use Mautic\\CoreBundle\\Helper\\EmojiHelper;
use Symfony\\Component\\Form\\DataTransformerInterface;

/**
 * @deprecated since Mautic 5.0, to be removed in 6.0 with no replacement.
 *
 * @implements DataTransformerInterface<array|string, string|array>
 */
class EmojiToHtmlTransformer implements DataTransformerInterface
{
    /**
     * Convert emoji unicode to HTML.
     *
     * @param array|string \$content
     *
     * @return string|array
     */
    public function transform(\$content)
    {
        if (is_array(\$content)) {
            foreach (\$content as &\$convert) {
                \$convert = \$this->transform(\$convert);
            }
        } else {
            \$content = EmojiHelper::toHtml(\$content);
        }

        return \$content;
    }

    /**
     * Convert HTML emoji to unicode bytes.
     *
     * @param array|string \$content
     *
     * @return array|string
     */
    public function reverseTransform(\$content)
    {
        if (is_array(\$content)) {
            foreach (\$content as &\$convert) {
                \$convert = \$this->reverseTransform(\$convert);
            }
        } else {
            \$content = EmojiHelper::toEmoji(\$content);
        }

        return \$content;
    }
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php";
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
        return new Source("", "@bundles/CoreBundle/Form/DataTransformer/EmojiToHtmlTransformer.php", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Form\\DataTransformer\\EmojiToHtmlTransformer.php");
    }
}
