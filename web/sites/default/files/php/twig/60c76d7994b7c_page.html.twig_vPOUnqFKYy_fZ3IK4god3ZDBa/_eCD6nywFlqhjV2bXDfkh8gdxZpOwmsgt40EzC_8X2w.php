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

/* themes/custom/exam/templates/system/page.html.twig */
class __TwigTemplate_64c20d2b57916d91a1c85da56b80f2445573acf8baf3e5848e1e103e23401575 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'navbar' => [$this, 'block_navbar'],
            'main' => [$this, 'block_main'],
            'header' => [$this, 'block_header'],
            'sidebar_first' => [$this, 'block_sidebar_first'],
            'highlighted' => [$this, 'block_highlighted'],
            'help' => [$this, 'block_help'],
            'content' => [$this, 'block_content'],
            'sidebar_second' => [$this, 'block_sidebar_second'],
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 54
        $context["container"] = ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 54), "fluid_container", [], "any", false, false, true, 54)) ? ("container-fluid") : ("container"));
        // line 56
        if ((twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 56) || twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 56))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 94
        echo "
";
        // line 96
        $this->displayBlock('main', $context, $blocks);
        // line 163
        echo "
";
        // line 164
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 164)) {
            // line 165
            echo "  ";
            $this->displayBlock('footer', $context, $blocks);
        }
    }

    // line 57
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = [0 => "navbar", 1 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["theme"] ?? null), "settings", [], "any", false, false, true, 61), "navbar_inverse", [], "any", false, false, true, 61)) ? ("navbar-inverse") : ("navbar-default")), 2 => ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62)) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["theme"] ?? null), "settings", [], "any", false, false, true, 62), "navbar_position", [], "any", false, false, true, 62), 62, $this->source)))) : (""))];
        // line 65
        echo "    <header";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["navbar_attributes"] ?? null), "addClass", [0 => ($context["navbar_classes"] ?? null)], "method", false, false, true, 65), 65, $this->source), "html", null, true));
        echo " id=\"navbar\" role=\"banner\">
";
        // line 67
        echo "        <div class=\"container\">
";
        // line 69
        echo "      <div class=\"navbar-header\">
        ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation", [], "any", false, false, true, 70), 70, $this->source), "html", null, true));
        echo "
        ";
        // line 72
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 72)) {
            // line 73
            echo "          <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
            <span class=\"sr-only\">";
            // line 74
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Toggle navigation")));
            echo "</span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
            <span class=\"icon-bar\"></span>
          </button>
        ";
        }
        // line 80
        echo "      </div>

      ";
        // line 83
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 83)) {
            // line 84
            echo "        <div id=\"navbar-collapse\" class=\"navbar-collapse collapse\">
          ";
            // line 85
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "navigation_collapsible", [], "any", false, false, true, 85), 85, $this->source), "html", null, true));
            echo "
        </div>
      ";
        }
        // line 89
        echo "        </div>
";
        // line 91
        echo "    </header>
  ";
    }

    // line 96
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 97
        echo "  <div role=\"main\" class=\"main-container ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["container"] ?? null), 97, $this->source), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 101
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 101)) {
            // line 102
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 107
            echo "      ";
        }
        // line 108
        echo "
      ";
        // line 110
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 110)) {
            // line 111
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 116
            echo "      ";
        }
        // line 117
        echo "      <div class=\"container\">
        ";
        // line 118
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "about", [], "any", false, false, true, 118), 118, $this->source), "html", null, true));
        echo "
      </div>
      ";
        // line 121
        echo "      ";
        // line 122
        $context["content_classes"] = [0 => (((twig_get_attribute($this->env, $this->source,         // line 123
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 123) && twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 123))) ? ("col-sm-6") : ("")), 1 => (((twig_get_attribute($this->env, $this->source,         // line 124
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 124) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 124)))) ? ("col-sm-9") : ("")), 2 => (((twig_get_attribute($this->env, $this->source,         // line 125
($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 125) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 125)))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty(twig_get_attribute($this->env, $this->source,         // line 126
($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 126)) && twig_test_empty(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 126)))) ? ("col-sm-12") : (""))];
        // line 129
        echo "      <section";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", [0 => ($context["content_classes"] ?? null)], "method", false, false, true, 129), 129, $this->source), "html", null, true));
        echo ">

        ";
        // line 132
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 132)) {
            // line 133
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 136
            echo "        ";
        }
        // line 137
        echo "
        ";
        // line 139
        echo "        ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 139)) {
            // line 140
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 143
            echo "        ";
        }
        // line 144
        echo "
        ";
        // line 146
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 150
        echo "      </section>

      ";
        // line 153
        echo "      ";
        if (twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 153)) {
            // line 154
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 159
            echo "      ";
        }
        // line 160
        echo "    </div>
  </div>
";
    }

    // line 102
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 103
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 104
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 104), 104, $this->source), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 111
    public function block_sidebar_first($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 112
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 113
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_first", [], "any", false, false, true, 113), 113, $this->source), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 133
    public function block_highlighted($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 134
        echo "            <div class=\"highlighted\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "highlighted", [], "any", false, false, true, 134), 134, $this->source), "html", null, true));
        echo "</div>
          ";
    }

    // line 140
    public function block_help($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 141
        echo "            ";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "help", [], "any", false, false, true, 141), 141, $this->source), "html", null, true));
        echo "
          ";
    }

    // line 146
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        echo "          <a id=\"main-content\"></a>
          ";
        // line 148
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 148), 148, $this->source), "html", null, true));
        echo "
        ";
    }

    // line 154
    public function block_sidebar_second($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 155
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 156
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "sidebar_second", [], "any", false, false, true, 156), 156, $this->source), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 165
    public function block_footer($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 166
        echo "    <footer class=\"footer\" role=\"contentinfo\">
      <div class=\"container\">
      ";
        // line 168
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "footer", [], "any", false, false, true, 168), 168, $this->source), "html", null, true));
        echo "
      </div>
    </footer>
  ";
    }

    public function getTemplateName()
    {
        return "themes/custom/exam/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 168,  317 => 166,  313 => 165,  306 => 156,  303 => 155,  299 => 154,  293 => 148,  290 => 147,  286 => 146,  279 => 141,  275 => 140,  268 => 134,  264 => 133,  257 => 113,  254 => 112,  250 => 111,  243 => 104,  240 => 103,  236 => 102,  230 => 160,  227 => 159,  224 => 154,  221 => 153,  217 => 150,  214 => 146,  211 => 144,  208 => 143,  205 => 140,  202 => 139,  199 => 137,  196 => 136,  193 => 133,  190 => 132,  184 => 129,  182 => 126,  181 => 125,  180 => 124,  179 => 123,  178 => 122,  176 => 121,  171 => 118,  168 => 117,  165 => 116,  162 => 111,  159 => 110,  156 => 108,  153 => 107,  150 => 102,  147 => 101,  140 => 97,  136 => 96,  131 => 91,  128 => 89,  122 => 85,  119 => 84,  116 => 83,  112 => 80,  103 => 74,  100 => 73,  97 => 72,  93 => 70,  90 => 69,  87 => 67,  82 => 65,  80 => 62,  79 => 61,  78 => 59,  76 => 58,  72 => 57,  66 => 165,  64 => 164,  61 => 163,  59 => 96,  56 => 94,  52 => 57,  50 => 56,  48 => 54,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/exam/templates/system/page.html.twig", "/var/www/web/themes/custom/exam/templates/system/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 54, "if" => 56, "block" => 57);
        static $filters = array("clean_class" => 62, "escape" => 65, "t" => 74);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'escape', 't'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
