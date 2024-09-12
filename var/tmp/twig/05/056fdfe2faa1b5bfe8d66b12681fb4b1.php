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

/* @themes/fresh-fixed/html/page.html.twig */
class __TwigTemplate_d03dc32c96a4e9dc7a7c43471ae3fa4a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return $this->loadTemplate((("@themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 1, $this->source); })())) . "/html/base.html.twig"), "@themes/fresh-fixed/html/page.html.twig", 1);
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "<header data-section-wrapper=\"1\" id=\"top\">
  <div data-section=\"1\">
    <div class=\"container\">
      <div class=\"c6\" data-slot-container=\"1\">
        <div data-slot=\"text\">
          <img class=\"logo\" src=\"";
        // line 8
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 8, $this->source); })())) . "/assets/logo_white.svg"));
        echo "\">
        </div>
      </div>
    </div>
  </div>
</header>
<section data-section-wrapper=\"1\" class=\"hero\" style=\"background-color: #00bf9a;\">
  <div data-section=\"1\" class=\"background\">
    <div data-slot-container=\"1\">
      <div data-slot=\"text\">
        <img class=\"background-image\" src=\"";
        // line 18
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 18, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
      </div>
    </div>
  </div>
  <div class=\"container\" data-slot-container=\"1\">
    <div class=\"c6\">
      <div data-slot=\"text\">
        <h1>H1 Header</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
      </div>
      <div data-slot=\"text\">
        <h2>H2 Customers</h2>
        <div class=\"customers\">
          <div class=\"logos\">
            <div class=\"logo-container\">
              <img class=\"logo\" src=\"";
        // line 33
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 33, $this->source); })())) . "/assets/logo_demo-company-i.svg"));
        echo "\">
            </div>
            <div class=\"logo-container\">
              <img class=\"logo\" src=\"";
        // line 36
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 36, $this->source); })())) . "/assets/logo_demo-company-ii.svg"));
        echo "\">
            </div>
            <div class=\"logo-container\">
              <img class=\"logo\" src=\"";
        // line 39
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 39, $this->source); })())) . "/assets/logo_demo-company-iii.svg"));
        echo "\">
            </div>
            <div class=\"logo-container\">
              <img class=\"logo\" src=\"";
        // line 42
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 42, $this->source); })())) . "/assets/logo_demo-company-iv.svg"));
        echo "\">
            </div>
            <div class=\"logo-container\">
              <img class=\"logo\" src=\"";
        // line 45
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 45, $this->source); })())) . "/assets/logo_demo-company-v.svg"));
        echo "\">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<div data-section-wrapper=\"1\" class=\"fixed-form\">
  <div data-section=\"1\">
    <div data-slot-container=\"1\">
      <div data-slot=\"text\">
          <div class=\"form white\">
            <h2>H2 Call-To-Action</h2>
            <div>
              <img src=\"";
        // line 60
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 60, $this->source); })())) . "/assets/img_form-demo.jpg"));
        echo "\" style=\"margin: 0 auto;\">
              <!-- PLACE FORM HERE -->
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section data-section-wrapper=\"1\" class=\"details\" style=\"background-color: #f5f5f5;\">
  <div data-section=\"1\" class=\"container\">
    <div data-slot-container=\"1\" class=\"c6\">
      <div data-slot=\"text\">
        <h2>H2 Details</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"speakers\" style=\"background-color: #f5f5f5;\">
  <div data-section=\"1\" class=\"container\">
    <div class=\"speakers-container\">
      <div class=\"c6\" data-slot-container=\"1\">
        <div data-slot=\"text\">
          <h2>H2 Speakers</h2>
        </div>
        <div class=\"speaker\" data-slot=\"text\">
          <div class=\"speaker-image\">
            <img src=\"";
        // line 88
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 88, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
          </div>
          <div class=\"speaker-details\">
            <h3>H3 Name</h3>
            <p>Details about speaker</p>
            <p>More details about speaker</p>
          </div>
        </div>
        <div class=\"speaker\" data-slot=\"text\">
          <div class=\"speaker-image\">
            <img src=\"";
        // line 98
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 98, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
          </div>
          <div class=\"speaker-details\">
            <h3>H3 Name</h3>
            <p>Details about speaker</p>
            <p>More details about speaker</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"grid\" style=\"background-color: #00bf9a;\">
  <div data-section=\"1\" class=\"container\">
    <div class=\"c6\" data-slot-container=\"1\">
      <div data-slot=\"text\">
        <h2>H2 Grid</h2>
      </div>
      <div data-slot=\"text\" class=\"grid-container\">
        <div class=\"grid-item\">
          <img class=\"grid-background-image\" src=\"";
        // line 118
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 118, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
          <img class=\"icon\" src=\"";
        // line 119
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 119, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
          <h3>H3 Grid Item</h3>
          <p>Grid item details</p>
        </div>
      </div>
      <div data-slot=\"text\" class=\"grid-container\">
        <div class=\"grid-item\">
          <img class=\"icon\" src=\"";
        // line 126
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 126, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
          <h3>H3 Grid Item</h3>
          <p>Grid item details</p>
        </div>
        <div class=\"grid-item\">
          <img class=\"grid-background-image\" src=\"";
        // line 131
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 131, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
          <img class=\"icon\" src=\"";
        // line 132
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 132, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
          <h3>H3 Grid Item</h3>
          <p>Grid item details</p>
        </div>
      </div>
      <div data-slot=\"text\" class=\"grid-container\">
        <div class=\"grid-item\">
          <img class=\"grid-background-image\" src=\"";
        // line 139
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 139, $this->source); })())) . "/assets/photo_hero-background.jpg"));
        echo "\">
          <img class=\"icon\" src=\"";
        // line 140
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 140, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
          <h3>H3 Grid Item</h3>
          <p>Grid item details</p>
        </div>
        <div class=\"grid-item\">
          <img class=\"icon\" src=\"";
        // line 145
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 145, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
          <h3>H3 Grid Item</h3>
          <p>Grid item details</p>
        </div>
        <div class=\"grid-item\">
          <img class=\"icon\" src=\"";
        // line 150
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 150, $this->source); })())) . "/assets/icon_grid.svg"));
        echo "\">
          <h3>H3 Grid Item</h3>
          <p>Grid item details</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" style=\"background-color: #3f3f45;\">
  <div data-section=\"1\" class=\"container\">
    <div data-slot-container=\"1\" class=\"c6\">
      <div data-slot=\"text\">
        <h2 class=\"green\">H2 About Company</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" class=\"testimonials\" style=\"background-color: #3f3f45;\">
  <div data-slot=\"text\" class=\"container\">
    <div class=\"c6\">
      <div data-slot-container=\"1\" class=\"testimonials-container\">
        <div class=\"testimonial\" data-slot=\"text\">
          <div class=\"c12 testimonial-quote\">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula.”</p>
          </div>
          <div class=\"testimonial-details\">
            <div class=\"c5\">
                <div class=\"speaker-image\">
                    <img src=\"";
        // line 179
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 179, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
                </div>
            </div>
            <div class=\"c7 details\">
              <h3>H3 Name</h3>
              <p>Details about speaker</p>
              <p>More details about speaker</p>
            </div>
          </div>
        </div>
        <div class=\"testimonial\" data-slot=\"text\">
          <div class=\"c12 testimonial-quote\">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula.”</p>
          </div>
          <div class=\"testimonial-details\">
            <div class=\"c5\">
                <div class=\"speaker-image\">
                    <img src=\"";
        // line 196
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 196, $this->source); })())) . "/assets/photo_man.jpg"));
        echo "\">
                </div>
            </div>
            <div class=\"c7 details\">
              <h3>H3 Name</h3>
              <p>Details about speaker</p>
              <p>More details about speaker</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section data-section-wrapper=\"1\" style=\"background-color: #00bf9a;\" class=\"thank-you\">
  <div data-section=\"1\" class=\"container\">
    <div data-slot-container=\"1\" class=\"c6\">
      <div data-slot=\"text\">
        <h1>H1 Thank You</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed metus felis, convallis porta cursus vehicula, iaculis at erat. Suspendisse quis pulvinar ligula. Etiam sagittis, velit a cursus sollicitudin, enim ex vestibulum felis, ac finibus dui dui ac est.</p>
        <a class=\"button\">Get Your Asset</a>
      </div>
    </div>
  </div>
</section>
<footer data-section-wrapper=\"1\" id=\"bottom\">
  <div data-section=\"1\" class=\"container\">
    <div data-slot-container=\"1\" class=\"c6\">
      <div data-slot=\"text\" class=\"c6 logo-container\">
        <img class=\"logo\" src=\"";
        // line 225
        echo $this->extensions['Mautic\CoreBundle\Twig\Extension\AssetExtension']->getAssetUrl((("themes/" . (isset($context["template"]) || array_key_exists("template", $context) ? $context["template"] : (function () { throw new RuntimeError('Variable "template" does not exist.', 225, $this->source); })())) . "/assets/logo_white.svg"));
        echo "\">
      </div>
      <div data-slot=\"text\" class=\"c6\">
        <p class=\"copyright\">&copy; Mautic 2017</p>
      </div>
    </div>
  </div>
</footer>
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@themes/fresh-fixed/html/page.html.twig";
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
        return array (  336 => 225,  304 => 196,  284 => 179,  252 => 150,  244 => 145,  236 => 140,  232 => 139,  222 => 132,  218 => 131,  210 => 126,  200 => 119,  196 => 118,  173 => 98,  160 => 88,  129 => 60,  111 => 45,  105 => 42,  99 => 39,  93 => 36,  87 => 33,  69 => 18,  56 => 8,  49 => 3,  45 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@themes/fresh-fixed/html/page.html.twig", "C:\\xampp\\htdocs\\mautic\\themes\\fresh-fixed\\html\\page.html.twig");
    }
}
