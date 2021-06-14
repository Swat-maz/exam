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

/* modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig */
class __TwigTemplate_59f7283e55d603cbde3ef8edf1d0bb0cdc8d3e7b7ef191c01e2da96199efcd5e extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 14
        echo "<div class=\"readmore-extrafield\">";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\flag\TwigExtension\FlagCount']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 14, $this->source), $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 14, $this->source), $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 14, $this->source)), "html", null, true));
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 14,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * @file
 * Theme for readmore_extrafield readmore links.
 *
 * Available variables:
 * - title: The link text.
 * - url: The link URL. If omitted, the 'title' is shown as a plain text
 *     item in the links list. If 'href' is supplied, the entire link is passed
 *     to l() as its \$options parameter.
 * - attributes: (optional) HTML attributes for the anchor, or for the <span>
 */
#}
<div class=\"readmore-extrafield\">{{ link(title, url, attributes) }}</div>
", "modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig", "/var/www/web/modules/contrib/readmore_extrafield/templates/readmore-extrafield.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 14);
        static $functions = array("link" => 14);

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                ['link']
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
