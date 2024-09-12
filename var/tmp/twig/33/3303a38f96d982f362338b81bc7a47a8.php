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

/* @MauticPoint/Event/actions.html.twig */
class __TwigTemplate_7b646cd70b1375aa71d9254383885446 extends Template
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
        // line 8
        $context["action"] = (((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 8, $this->source); })())) ? ("undelete") : ("delete"));
        // line 9
        $context["iconClass"] = (((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 9, $this->source); })())) ? ("fa-undo") : ("ri-close-line"));
        // line 10
        $context["btnClass"] = (((isset($context["deleted"]) || array_key_exists("deleted", $context) ? $context["deleted"] : (function () { throw new RuntimeError('Variable "deleted" does not exist.', 10, $this->source); })())) ? ("btn-warning") : ("btn-danger"));
        // line 11
        $context["route"] = ((array_key_exists("route", $context)) ? (_twig_default_filter((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 11, $this->source); })()), "mautic_pointtriggerevent_action")) : ("mautic_pointtriggerevent_action"));
        // line 12
        echo "<div class=\"form-buttons hide\">
    <a data-toggle=\"ajaxmodal\" data-target=\"#triggerEventModal\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 13, $this->source); })()), ["objectAction" => "edit", "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 13, $this->source); })()), "triggerId" => (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 13, $this->source); })())]), "html", null, true);
        echo "\" class=\"btn btn-primary btn-xs btn-edit\">
        <i class=\"ri-edit-line\"></i>
    </a>
    <a data-menu-link=\"mautic_point_index\" data-toggle=\"ajax\" data-ignore-formexit=\"true\" data-method=\"POST\" data-hide-loadingbar=\"true\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath((isset($context["route"]) || array_key_exists("route", $context) ? $context["route"] : (function () { throw new RuntimeError('Variable "route" does not exist.', 16, $this->source); })()), ["objectAction" => (isset($context["action"]) || array_key_exists("action", $context) ? $context["action"] : (function () { throw new RuntimeError('Variable "action" does not exist.', 16, $this->source); })()), "objectId" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 16, $this->source); })()), "triggerId" => (isset($context["sessionId"]) || array_key_exists("sessionId", $context) ? $context["sessionId"] : (function () { throw new RuntimeError('Variable "sessionId" does not exist.', 16, $this->source); })())]), "html", null, true);
        echo "\"  class=\"btn ";
        echo twig_escape_filter($this->env, (isset($context["btnClass"]) || array_key_exists("btnClass", $context) ? $context["btnClass"] : (function () { throw new RuntimeError('Variable "btnClass" does not exist.', 16, $this->source); })()), "html", null, true);
        echo " btn-xs\">
        <i class=\"fa ";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["iconClass"]) || array_key_exists("iconClass", $context) ? $context["iconClass"] : (function () { throw new RuntimeError('Variable "iconClass" does not exist.', 17, $this->source); })()), "html", null, true);
        echo "\"></i>
    </a>
    <i class=\"fa fa-fw fa-ellipsis-v reorder-handle\"></i>
</div>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@MauticPoint/Event/actions.html.twig";
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
        return array (  60 => 17,  54 => 16,  48 => 13,  45 => 12,  43 => 11,  41 => 10,  39 => 9,  37 => 8,);
    }

    public function getSourceContext()
    {
        return new Source("", "@MauticPoint/Event/actions.html.twig", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\PointBundle\\Resources\\views\\Event\\actions.html.twig");
    }
}
