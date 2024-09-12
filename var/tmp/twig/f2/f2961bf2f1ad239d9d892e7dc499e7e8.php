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

/* @bundles/CoreBundle/Assets/css/libraries/froala/plugins/gated_video.less */
class __TwigTemplate_d460c30d969517ab23dd1d669be00d92 extends Template
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
        echo "html body .fr-gatedvideo {
    position:relative;
    display:table;
    min-height:140px;
}
html body .fr-gatedvideo video {
    background-color:rgba(67, 83, 147, .5);
}
html body .fr-gatedvideo:after {
    content:\"\";
    position:absolute;
    background-repeat:no-repeat;
    background-position:50% 40%;
    height:100%;
    width:100%;
    top:0;
    left:0;
    display:block;
    clear:both;
    background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
/*!
 * froala_editor v2.2.4 (https://www.froala.com/wysiwyg-editor)
 * License https://froala.com/wysiwyg-editor/terms/
 * Copyright 2014-2016 Froala Labs
 */

html body .clearfix::after {
    clear: both;
    display: block;
    content: \"\";
}
html body .fr-element .fr-gatedvideo {
    user-select: none;
    -o-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}
html body .fr-element .fr-gatedvideo::after {
    content:\"\";
    position:absolute;
    background-repeat:no-repeat;
    background-position:50% 40%;
    height:100%;
    width:100%;
    top:0;
    left:0;
    display:block;
    clear:both;
    background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAByCAMAAAC4A3VPAAAA/1BMVEUAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAD64ociAAAAVHRSTlMAAQIDBAUGCAkKCw0PEBEUFxsfICUmKistLjE1Njo8QExNVl9iY2RmZ2hpa2xtb3Bxc3R8gIWGkZedoquwt8XP0dXX2drc4OLm6Ont7/Hz9ff5+/3esbxfAAACIklEQVRo3u3aW1fTQBSG4a9BKIUKVCi0IqCIp3pAjYpQaEGQYlWk5fv/v8WLrkKbJjNNsmeu9nuXrFnruclhJXsATdM0TdNSVihVqrV6itZXl2ZyeLM7Rz1mqN1YyQaWwltmrrUxDfHgUSUYOdztM1fNBav4rE/+fjI8mjtm3q5rFnFvsK46OFo4p0BPpxHZBADMd0jX5ovhor8AEJxSqLpdJAHgQErkddI19JJjZI1yNePFVxwjC5eCJDesIoEtSZGtGPE1I2RLlOTks+9NZAUWZUU2bCKxLUy2I2JjYgVCYZIzFpE4kSaXLCLRkSZXR8S3cQtwI02uW0RCWhx5zr6jb/I9fZNJojvyA32T+/RNGkRHpEl0QxpFJ+RHeiYff6Jv8oLeSSqppJJKKqmkkkoqqWTe9rveyfrDrncSFtPJl5fZdPN9aTQdfUWbTFf/Cgymsz8i5a53Mtl0+HcryZQn7+dQCSb+SJNVWEycSZMVWEwcSpMlWMy7gZtUvQIsJtaEyaPIBGHSRNCTJXdgM4GvouLtLGwmsCxKhjEzr4gJ4Lug2C/FTfbKvyJk8Z8cuRs/vxwzAWBTTDxOmguPmqaBRurO5zCFOTjxRUTsmHYz3JkX5sFNqk7njfsKhubn4YnN3NfQQWDZPVG+Iskf9zduMd+9cmnbrgGgGP5sPx8bby5/y/zsa20VMm74Cdb2Ds/SvbNvOifh9iI0TdM0TZPtP32lY4xP2bT1AAAAAElFTkSuQmCC);
}
html body .fr-element .fr-gatedvideo.fr-active > * {
    z-index: 2;
    position: relative;
}
html body .fr-element .fr-gatedvideo > * {
    -webkit-box-sizing: content-box;
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    max-width: 100%;
    border: none;
}
html body .fr-box .fr-gatedvideo-resizer {
    position: absolute;
    border: solid 1px #1e88e5;
    display: none;
    user-select: none;
    -o-user-select: none;
    -moz-user-select: none;
    -khtml-user-select: none;
    -webkit-user-select: none;
    -ms-user-select: none;
}
html body .fr-box .fr-gatedvideo-resizer.fr-active {
    display: block;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
    display: block;
    position: absolute;
    background: #1e88e5;
    border: solid 1px #ffffff;
    z-index: 4;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
    cursor: nw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
    cursor: ne-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
    cursor: sw-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
    cursor: se-resize;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler {
    width: 12px;
    height: 12px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
    left: -6px;
    top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
    right: -6px;
    top: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
    left: -6px;
    bottom: -6px;
}
html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
    right: -6px;
    bottom: -6px;
}
@media (min-width: 1200px) {
    html body .fr-box .fr-gatedvideo-resizer .fr-handler {
        width: 10px;
        height: 10px;
    }
    html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hnw {
        left: -5px;
        top: -5px;
    }
    html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hne {
        right: -5px;
        top: -5px;
    }
    html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hsw {
        left: -5px;
        bottom: -5px;
    }
    html body .fr-box .fr-gatedvideo-resizer .fr-handler.fr-hse {
        right: -5px;
        bottom: -5px;
    }
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line {
    display: inline-block;
}
html body .fr-gatedvideo-size-layer .fr-gatedvideo-group .fr-input-line + .fr-input-line {
    margin-left: 10px;
}
html body .fr-gatedvideo-overlay {
    position: fixed;
    top: 0;
    left: 0;
    bottom: 0;
    right: 0;
    z-index: 9999;
    display: none;
}
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/gated_video.less";
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
        return new Source("", "@bundles/CoreBundle/Assets/css/libraries/froala/plugins/gated_video.less", "C:\\xampp\\htdocs\\mautic\\app\\bundles\\CoreBundle\\Assets\\css\\libraries\\froala\\plugins\\gated_video.less");
    }
}
