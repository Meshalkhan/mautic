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

/* @bundles/UserBundle/Assets/css/user.css */
class __TwigTemplate_07fe389b8645b795cb4ccacd432a0259 extends Template
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
        yield "/* UserBundle */

.profile-details {
    margin-bottom: 20px;
}

.col-user-id, .col-role-id {
    width: 75px;
}

.col-user-avatar {
    width: 75px;
}

.mautic-logo {
    width: 150px;
    margin: 0 auto;
    background: #ffffff;
}

.mautic-logo > svg.mautic-logo-figure .circle {
    fill: #4e5e9e;
}

.mautic-logo > svg.mautic-logo-figure .m,
.mautic-logo > svg.mautic-logo-figure .m-arrow {
      fill: #fdb933;
}

input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0px 1000px white inset;
}

span.input-group-addon i.fa {
    width: 20px;
}

.inline-login .login-form {
    margin: 20px;
}";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Assets/css/user.css";
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
        return new Source("", "@bundles/UserBundle/Assets/css/user.css", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\UserBundle\\Assets\\css\\user.css");
    }
}
