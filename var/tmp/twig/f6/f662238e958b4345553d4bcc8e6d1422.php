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

/* @bundles/CoreBundle/Assets/css/libraries/builder.less */
class __TwigTemplate_20c0974e12da7e6ee6ae99421db31bcc extends Template
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
        echo "@import \"../app/less/variables\";

//Froala
@import \"froala/froala_editor\";
//@import \"froala/froala_style\";
@import \"froala/plugins/char_counter\";
@import \"froala/plugins/draggable\";
@import \"froala/plugins/fullscreen\";
@import \"froala/plugins/line_breaker\";
@import \"froala/plugins/video\";
@import \"froala/plugins/code_view\";
@import \"froala/plugins/emoticons\";
@import \"froala/plugins/image\";
@import \"froala/plugins/quick_insert\";
@import \"froala/plugins/image_manager\";
@import \"froala/plugins/colors\";
@import \"froala/plugins/file\";
@import \"froala/plugins/table\";
@import \"froala/plugins/gated_video\";

//Font-awesome
@import \"font-awesome/font-awesome\";

//Other
@import \"other/at\";

.fr-popup {
    z-index: 9999 !important;
}

/* BUILDER CSS */
div[data-slot-focus] {
    top: -1px;
    right: -1px;
    bottom: -1px;
    left: -1px;
    content: '';
    margin: 0;
    padding: 0;
    position: absolute;
    border: 1px solid @mautic-primary;
    z-index: 1;
}

div[data-section-focus] {
    content: '';
    position: absolute;
    border: 1px solid @mautic-secondary;
}

div[data-section-focus=\"top\"] {
    left: 0px;
    right: 0px;
    top: 0px;
}

div[data-section-focus=\"right\"] {
    bottom: 0px;
    right: 0px;
    top: 0px;
}

div[data-section-focus=\"bottom\"] {
    bottom: 0px;
    right: 0px;
    left: 0px;
}

div[data-section-focus=\"left\"] {
    bottom: 0px;
    top: 0px;
    left: 0px;
}

div[data-section-focus=\"clone\"] {
  width: 25px;
  height: 25px;
  bottom: 62px;
  left: 10px;
  background: #4e5e9e;
  color: #fff;
  text-align: center;
  border: 0;
  line-height: 25px;
}

div[data-section-focus=\"handle\"] {
  width: 25px;
  height: 25px;
  bottom: 10px;
  left: 10px;
  background: #4e5e9e;
  color: #fff;
  text-align: center;
  border: 0;
  line-height: 25px;
}

div[data-section-focus=\"delete\"] {
  width: 25px;
  height: 25px;
  bottom: 36px;
  left: 10px;
  background: #4e5e9e;
  color: #fff;
  text-align: center;
  border: 0;
  line-height: 25px;
}

div[data-section-focus=\"handle\"], div[data-section-focus=\"clone\"], div[data-section-focus=\"delete\"] {
    z-index: 1000;
}

div[data-slot-toolbar] {
    position: absolute;
    top: -24px;
    left: -1px;
    right: -1px;
    height: 25px;
    width: 100%;
    z-index: 10;
    cursor: pointer;
    cursor: move;
    background-color: @mautic-primary;
    border-left: 1px solid @mautic-primary;
    border-right: 1px solid @mautic-primary;
    padding-top:2px;
}

div[data-slot-toolbar] .btn {
    width: 20px;
    height: 20px;
    padding: 0;
    display: inline-block;
    margin-bottom: 0;
    font-weight: 600;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    border: 1px solid transparent;
    white-space: nowrap;
    line-height: 1.3856;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-size: 11px;
    line-height: 1.456;
    float: right;
    margin-right: 2px;
    color: #fff;
}

div[data-slot-toolbar] .btn .fa {
    padding-top: 4px;
}

div[data-slot], [data-section-wrapper] {
    position: relative;
    font-size: initial;
    line-height: initial;
}

div[data-slot^=\"image\"] {
    padding-top: 1px; // prevent z-index of image from hiding the bottom border of a slot with focus above it
    padding-bottom: 1px;
}

div[data-slot^=\"image\"] img {
    z-index: 2;
    position: relative;
}

div[data-slot].ui-sortable-helper {
    border: 1px solid @mautic-primary;
}

.slot-placeholder {
    border: 2px dotted @mautic-primary;
}

[data-slot=\"text\"] {
    &.fr-box {
        padding: initial;

        .fr-toolbar {
            border-top: 2px solid @mautic-primary;
            position: absolute;
            left: -15px;
            bottom: initial !important;
            min-width: 385px;

            &.fr-top {
                top: -78px !important;
                bottom: initial !important;
            }
            &.fr-bottom {
                bottom: -78px !important;
                top: initial !important;
            }
        }
        .fr-wrapper {
            border-radius: 0 0 0px 0px;
            -moz-border-radius: 0 0 0px 0px;
            -webkit-border-radius: 0 0 0px 0px;
            -webkit-box-shadow: none  !important;
            -moz-box-shadow: none  !important;
            box-shadow: none  !important;
            background: transparent !important;

            .fr-element {
                text-align: inherit !important;
                padding: 0 !important;
                overflow-x: initial !important;
                color: inherit !important;
                min-height: inherit !important;
            }
        }
    }
}

.slot-type-handle.btn, .section-type-handle.btn {
    float: left;
    width: 111px;
    margin: 2px;
    height: 75px;
    padding-left:5px;
    padding-right:5px;
    text-align:center;
    word-wrap: break-word;
}

.slot-type-handle.ui-draggable-dragging, .section-type-handle.ui-draggable-dragging{
    color: #5d6c7c;
    background-color: #f5f5f5;
    border-color: #d3d3d3;
    padding: 10px 16px;
    font-size: 16px;
    line-height: 1.25;
    border-radius: 4px;
    margin: 2px;
    text-align: center;
}

.theme-list {
    .panel-body {
        height: 350px;
    }
    .select-theme-link {
        margin-top: 5px;
    }
    .select-theme-selected {
        margin-top:5px;
    }
}

[data-slot=\"dynamicContent\"] {
    z-index:50;
}

.chosen-container .chosen-results li {
    font-family: \"Source Sans 3\",Helvetica,Arial,sans-serif;
    &:before {
        font: normal normal normal 14px/1 FontAwesome;
        padding-right: 6px;
    }
}
div:empty[data-slot],div.empty[data-slot] {
    padding:1em 0 0em 0;
    display:block;
    position:relative;
    margin-bottom:2px;
}
div:empty[data-slot]:before,div.empty[data-slot]:before {
    content: \"\\f044\";
    font: normal normal normal 14px/1 FontAwesome;
    position:absolute;
    left: 2px;
    top: 2px;
    color:gray;
    font-size:small;
}";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/builder.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/builder.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\builder.less");
    }
}
