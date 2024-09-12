<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/CoreBundle/Assets/css/libraries/remixicon/package.json */
class __TwigTemplate_2e661bd57560492b7ab7692d009d0d47 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "{
  \"name\": \"remixicon\",
  \"version\": \"4.2.0\",
  \"description\": \"Remix Icon is a set of open source neutral style system symbols elaborately crafted for designers and developers. All of the icons are free to use for both personal and commercial.\",
  \"homepage\": \"https://remixicon.com\",
  \"keywords\": [
    \"remixicon\",
    \"remix\",
    \"icon\",
    \"icon library\",
    \"icon pack\"
  ],
  \"files\": [
    \"fonts/\",
    \"icons/\",
    \"License\",
    \"package.json\",
    \"README_CN.md\",
    \"README.md\"
  ],
  \"license\": \"Apache-2.0\",
  \"repository\": {
    \"type\": \"git\",
    \"url\": \"https://github.com/Remix-Design/remixicon.git\"
  },
  \"bugs\": \"https://github.com/Remix-Design/remixicon/issues\",
  \"contributors\": [
    \"Wendy Gao <wendygaoyuan@163.com>\",
    \"Jimmy Cheung <jimmy@remixdesign.cn>\"
  ]
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/CoreBundle/Assets/css/libraries/remixicon/package.json";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/remixicon/package.json", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\remixicon\\package.json");
    }
}
