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

/* @MauticFocus/Builder/form.html.twig */
class __TwigTemplate_f84fb78a3ed1e93c0ccdcaa8c10c186f extends Template
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
        // line 14
        $context["formName"] = (("_" . twig_lower_filter($this->env, Mautic\CoreBundle\Helper\InputHelper::alphanum(Mautic\CoreBundle\Helper\InputHelper::transliterate(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "name", [], "any", false, false, false, 14))))) . "_focus");
        // line 15
        $context["jsFormName"] = twig_trim_filter((isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 15, $this->source); })()), "_", "left");
        // line 16
        $context["fields"] = twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 16, $this->source); })()), "fields", [], "any", false, false, false, 16);
        // line 17
        $context["required"] = [];
        // line 18
        echo "
<!-- START FOCUS FORM -->
";
        // line 20
        echo twig_include($this->env, $context, "@MauticForm/Builder/_script.html.twig", ["form" => (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 20, $this->source); })()), "formName" => (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 20, $this->source); })())], false);
        echo "
<script>
    var MauticFocusHandler = function (messageType, message) {
        // Store the HTML
        var wrapper = document.getElementById('mauticform_wrapper";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "');
        var innerForm = wrapper.getElementsByClassName('mauticform-innerform');
        innerForm[0].style.display = \"none\";

        ";
        // line 28
        if (("page" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 28, $this->source); })()))) {
            // line 29
            echo "        document.getElementById('mauticform";
            echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 29, $this->source); })()), "html", null, true);
            echo "_' + messageType).style.fontSize = \"2em\";
        ";
        } elseif (("bar" ==         // line 30
(isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 30, $this->source); })()))) {
            // line 31
            echo "        document.getElementById('mauticform";
            echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 31, $this->source); })()), "html", null, true);
            echo "_' + messageType).style.fontSize = \"1.1em\";
        ";
        }
        // line 33
        echo "
        var headline = document.getElementsByClassName('mf-headline');
        if (headline.length) {
            headline[0].style.display = \"none\";
        }

        var tagline = document.getElementsByClassName('mf-tagline');
        if (tagline.length) {
            tagline[0].style.display = \"none\";
        }

        if (message) {
            document.getElementById('mauticform";
        // line 45
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 45, $this->source); })()), "html", null, true);
        echo "_' + messageType).innerHTML = message;
        }

        if (messageType == 'error') {
            setTimeout(function () {
                if (headline.length) {
                    ";
        // line 51
        if (("bar" == (isset($context["style"]) || array_key_exists("style", $context) ? $context["style"] : (function () { throw new RuntimeError('Variable "style" does not exist.', 51, $this->source); })()))) {
            // line 52
            echo "                    headline[0].style.display = \"inline-block\";
                    ";
        } else {
            // line 54
            echo "                    headline[0].style.display = \"block\";
                    ";
        }
        // line 56
        echo "                }
                if (tagline.length) {
                    tagline[0].style.display = \"inherit\";
                }

                innerForm[0].style.display = \"inherit\";
                document.getElementById('mauticform";
        // line 62
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 62, $this->source); })()), "html", null, true);
        echo "_' + messageType).innerHTML = '';
            }, 1500);
        }
    }
    if (typeof MauticFormCallback == 'undefined') {
        var MauticFormCallback = {};
    }
    MauticFormCallback[\"";
        // line 69
        echo twig_escape_filter($this->env, (isset($context["jsFormName"]) || array_key_exists("jsFormName", $context) ? $context["jsFormName"] : (function () { throw new RuntimeError('Variable "jsFormName" does not exist.', 69, $this->source); })()), "html", null, true);
        echo "\"] = {
        onMessageSet: function (data) {
            if (data.message) {
                MauticFocusHandler(data.type);
            }
        },
        onErrorMark: function (data) {
            if (data.validationMessage) {
                MauticFocusHandler('error', data.validationMessage);

                return true;
            }
        },
        onResponse: function (data) {
            if (data.download) {
                // Hit the download in the iframe
                document.getElementById('mauticiframe";
        // line 85
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 85, $this->source); })()), "html", null, true);
        echo "').src = data.download;

                // Register a callback for a redirect
                if (data.redirect) {
                    setTimeout(function () {
                        window.top.location = data.redirect;
                    }, 2000);
                }

                return true;
            } else if (data.redirect) {
                window.top.location = data.redirect;

                return true;
            }

            return false;
        }
    }
</script>
";
        // line 105
        ob_start(function () { return ''; });
        // line 106
        echo "  <input type=\"hidden\" name=\"mauticform[focusId]\" id=\"mauticform";
        echo twig_escape_filter($this->env, (isset($context["formName"]) || array_key_exists("formName", $context) ? $context["formName"] : (function () { throw new RuntimeError('Variable "formName" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "_focus_id\" value=\"";
        echo twig_escape_filter($this->env, (isset($context["focusId"]) || array_key_exists("focusId", $context) ? $context["focusId"] : (function () { throw new RuntimeError('Variable "focusId" does not exist.', 106, $this->source); })()), "html", null, true);
        echo "\"/>
";
        $context["formExtra"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 108
        echo "
";
        // line 109
        echo twig_include($this->env, $context, "@MauticForm/Builder/form.html.twig", ["form" =>         // line 110
(isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 110, $this->source); })()), "formPages" =>         // line 111
(isset($context["pages"]) || array_key_exists("pages", $context) ? $context["pages"] : (function () { throw new RuntimeError('Variable "pages" does not exist.', 111, $this->source); })()), "lastFormPage" =>         // line 112
(isset($context["lastPage"]) || array_key_exists("lastPage", $context) ? $context["lastPage"] : (function () { throw new RuntimeError('Variable "lastPage" does not exist.', 112, $this->source); })()), "formExtra" =>         // line 113
(isset($context["formExtra"]) || array_key_exists("formExtra", $context) ? $context["formExtra"] : (function () { throw new RuntimeError('Variable "formExtra" does not exist.', 113, $this->source); })()), "action" => ((        // line 114
(isset($context["preview"]) || array_key_exists("preview", $context) ? $context["preview"] : (function () { throw new RuntimeError('Variable "preview" does not exist.', 114, $this->source); })())) ? ("#") : (null)), "suffix" => "_focus", "contactFields" =>         // line 116
(isset($context["contactFields"]) || array_key_exists("contactFields", $context) ? $context["contactFields"] : (function () { throw new RuntimeError('Variable "contactFields" does not exist.', 116, $this->source); })()), "companyFields" =>         // line 117
(isset($context["companyFields"]) || array_key_exists("companyFields", $context) ? $context["companyFields"] : (function () { throw new RuntimeError('Variable "companyFields" does not exist.', 117, $this->source); })()), "viewOnlyFields" =>         // line 118
(isset($context["viewOnlyFields"]) || array_key_exists("viewOnlyFields", $context) ? $context["viewOnlyFields"] : (function () { throw new RuntimeError('Variable "viewOnlyFields" does not exist.', 118, $this->source); })()), "displayManager" =>         // line 119
(isset($context["displayManager"]) || array_key_exists("displayManager", $context) ? $context["displayManager"] : (function () { throw new RuntimeError('Variable "displayManager" does not exist.', 119, $this->source); })())], false);
        // line 120
        echo "
<!-- END FOCUS FORM -->
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticFocus/Builder/form.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  195 => 120,  193 => 119,  192 => 118,  191 => 117,  190 => 116,  189 => 114,  188 => 113,  187 => 112,  186 => 111,  185 => 110,  184 => 109,  181 => 108,  173 => 106,  171 => 105,  148 => 85,  129 => 69,  119 => 62,  111 => 56,  107 => 54,  103 => 52,  101 => 51,  92 => 45,  78 => 33,  72 => 31,  70 => 30,  65 => 29,  63 => 28,  56 => 24,  49 => 20,  45 => 18,  43 => 17,  41 => 16,  39 => 15,  37 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticFocus/Builder/form.html.twig", "C:\\xampp\\htdocs\\mautic\\plugins\\MauticFocusBundle\\Resources\\views\\Builder\\form.html.twig");
    }
}
