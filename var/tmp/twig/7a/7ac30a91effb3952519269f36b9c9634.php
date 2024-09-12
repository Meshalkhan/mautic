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

/* @themes/trulypersonal/html/email.mjml.twig */
class __TwigTemplate_840d1f2086038accfc700f1f6a8f5b30 extends Template
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
        echo "<mjml>
  <mj-body width=\"100%\">
\t<mj-raw>
\t  <!-- Company Header -->
\t  <mj-text>Hi {contactfield=firstname},
\t\t<br>This is the personal email template.
\t\t<br>
\t\t<br>The purpose of this template is to look as \"normal\" as possible.
\t\t<br>Many companies try to stand out with their newsletter.
\t\t<br>This template is different.
\t\t<br>
\t\t<br>As a \"personal brand\" it makes sense to look like a regular person sending regular emails.
\t\t<br>Use this template to do so!
\t\t<br>
\t\t<br>{signature}
\t\t<br>
\t\t<br>
\t\t<span style=\"color: #838383;font-size:10px;\">{unsubscribe_text}</span>
\t  </mj-text>
\t</mj-raw>
  </mj-body>
</mjml>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/trulypersonal/html/email.mjml.twig";
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
        return new Source("", "@themes/trulypersonal/html/email.mjml.twig", "C:\\xampp\\htdocs\\mautic\\themes\\trulypersonal\\html\\email.mjml.twig");
    }
}
