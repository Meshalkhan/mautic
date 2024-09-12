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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/draggable.less */
class __TwigTemplate_101f0586367654f8bb15260cd836b970 extends Template
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
        echo "/*!
 * froala_editor v2.4.2 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2017 Froala Labs
 */

.clearfix::after {
  clear: both;
  display: block;
  content: \"\";
  height: 0;
}
.hide-by-clipping {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0;
}
.fr-drag-helper {
  background: #1e88e5;
  height: 2px;
  margin-top: -1px;
  -webkit-opacity: 0.2;
  -moz-opacity: 0.2;
  opacity: 0.2;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
  position: absolute;
  z-index: 9999;
  display: none;
}
.fr-drag-helper.fr-visible {
  display: block;
}
.fr-dragging {
  -webkit-opacity: 0.4;
  -moz-opacity: 0.4;
  opacity: 0.4;
  -ms-filter: \"progid:DXImageTransform.Microsoft.Alpha(Opacity=0)\";
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/draggable.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/draggable.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\froala\\plugins\\draggable.less");
    }
}
