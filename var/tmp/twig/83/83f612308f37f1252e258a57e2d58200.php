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

/* @MauticCore/Notification/notifications.html.twig */
class __TwigTemplate_5b9ba9e32c7e65e31d91baf4317672ae extends Template
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
        echo "<li class=\"dropdown dropdown-custom\" id=\"notificationsDropdown\">
    <a href=\"javascript: void(0);\" onclick=\"Mautic.showNotifications();\" class=\"dropdown-toggle dropdown-notification\" data-toggle=\"dropdown\">
        ";
        // line 3
        $context["hideClass"] = (((twig_get_attribute($this->env, $this->source, (isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 3, $this->source); })()), "isNew", [], "any", false, false, false, 3) || (isset($context["showNewIndicator"]) || array_key_exists("showNewIndicator", $context) ? $context["showNewIndicator"] : (function () { throw new RuntimeError('Variable "showNewIndicator" does not exist.', 3, $this->source); })()))) ? ("") : (" hide"));
        // line 4
        echo "        <span class=\"label label-danger";
        echo twig_escape_filter($this->env, (isset($context["hideClass"]) || array_key_exists("hideClass", $context) ? $context["hideClass"] : (function () { throw new RuntimeError('Variable "hideClass" does not exist.', 4, $this->source); })()), "html", null, true);
        echo "\" id=\"newNotificationIndicator\"><i class=\"fa fa-asterisk\"></i></span>
        <span class=\"ri-notification-3-line ri-xl\"></span>
    </a>
    <div class=\"dropdown-menu\">
        <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
                <div class=\"panel-title notification notification-title\">
                    <h6 class=\"fw-sb\">";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.notifications", [], "messages");
        // line 12
        echo "                        <a href=\"javascript:void(0);\" class=\"btn-link btn-xs btn-nospin pull-right\" onclick=\"Mautic.clearNotification(0);\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("mautic.core.notifications.clearall", [], "messages");
        echo "</a>
                    </h6>
                </div>
            </div>
            <div class=\"pt-0 pb-xs pl-0 pr-0\">
                <div class=\"scroll-content slimscroll\" id=\"notifications\">
                    ";
        // line 18
        echo twig_include($this->env, $context, "@MauticCore/Notification/notification_messages.html.twig", ["notifications" =>         // line 19
(isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 19, $this->source); })()), "updateMessage" =>         // line 20
(isset($context["updateMessage"]) || array_key_exists("updateMessage", $context) ? $context["updateMessage"] : (function () { throw new RuntimeError('Variable "updateMessage" does not exist.', 20, $this->source); })())]);
        // line 21
        echo "
                    ";
        // line 22
        $context["class"] = (( !twig_test_empty((isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 22, $this->source); })()))) ? (" hide") : (""));
        // line 23
        echo "                    <div class=\"";
        echo twig_escape_filter($this->env, (isset($context["class"]) || array_key_exists("class", $context) ? $context["class"] : (function () { throw new RuntimeError('Variable "class" does not exist.', 23, $this->source); })()), "html", null, true);
        echo " mautibot-image notification-empty\" id=\"notificationMautibot\">
                        <img class=\"img img-responsive\" src=\"";
        // line 24
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\MautibotExtension']->getImage("wave");
        echo "\" />
                    </div>
                </div>
            </div>
            ";
        // line 28
        $context["lastNotification"] = twig_first($this->env, (isset($context["notifications"]) || array_key_exists("notifications", $context) ? $context["notifications"] : (function () { throw new RuntimeError('Variable "notifications" does not exist.', 28, $this->source); })()));
        // line 29
        echo "            <input id=\"mauticLastNotificationId\" type=\"hidden\" value=\"";
        echo ((twig_get_attribute($this->env, $this->source, ($context["lastNotification"] ?? null), "id", [], "any", true, true, false, 29)) ? (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["lastNotification"]) || array_key_exists("lastNotification", $context) ? $context["lastNotification"] : (function () { throw new RuntimeError('Variable "lastNotification" does not exist.', 29, $this->source); })()), "id", [], "any", false, false, false, 29))) : (""));
        echo "\" />
        </div>
    </div>
</li>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticCore/Notification/notifications.html.twig";
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
        return array (  89 => 29,  87 => 28,  80 => 24,  75 => 23,  73 => 22,  70 => 21,  68 => 20,  67 => 19,  66 => 18,  56 => 12,  54 => 11,  43 => 4,  41 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticCore/Notification/notifications.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Resources\\views\\Notification\\notifications.html.twig");
    }
}
