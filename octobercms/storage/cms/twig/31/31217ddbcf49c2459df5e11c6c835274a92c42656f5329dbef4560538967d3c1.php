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

/* /var/www/html/octobercms/themes/jtherczeg-corlate/partials/nav.htm */
class __TwigTemplate_06bd79271489b02eb45759226d53c9488ac416378799757de58ca95114745148 extends \Twig\Template
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
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        $context["links"] = ["home" => [0 => "home", 1 => "Home"], "about" => [0 => "samples/about", 1 => "About Us"], "services" => [0 => "samples/services", 1 => "Services"], "portfolio" => [0 => "samples/portfolio", 1 => "Portfolio"], "pages" => ["name" => "Pages", "sublinks" => ["pricing" => [0 => "samples/pricing", 1 => "Pricing Table"], "error" => [0 => "error", 1 => "Error Page"], "404" => [0 => "404", 1 => "404 Page"], "shortcodes" => [0 => "samples/shortcodes", 1 => "Shortcodes"]]], "blog" => ["name" => "Blog", "sublinks" => ["blog" => [0 => "blog/blog", 1 => "Blog"], "blog-item" => [0 => "blog/blog-item", 1 => "Blog Item"]]], "contact" => [0 => "samples/contact", 1 => "Contact"]];
        // line 27
        echo "
";
        // line 48
        echo "
";
        // line 49
        $macros["nav"] = $this->macros["nav"] = $this;
        // line 50
        echo "
<nav class=\"navbar navbar-inverse\" role=\"\" padding=\"10px\" clear=\"none\">
\t<div class=\"container\">
\t\t<div class=\"navbar-header\">
\t\t\t<button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
\t\t\t<span class=\"sr-only\">Toggle navigation</span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t<span class=\"icon-bar\"></span>
\t\t\t</button>
\t\t\t<a class=\"navbar-brand\" href=\"";
        // line 60
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\"><img src=\"";
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/LOGITO.png");
        echo "\" alt=\"logo\"></a>
\t\t</div>
\t\t<div class=\"collapse navbar-collapse navbar-right\">
\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t";
        // line 64
        echo twig_call_macro($macros["nav"], "macro_render_menu", [($context["links"] ?? null)], 64, $context, $this->getSourceContext());
        echo "
\t\t\t</ul>
\t\t</div>
\t</div>
</nav><!--/nav-->";
    }

    // line 28
    public function macro_render_menu($__links__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "links" => $__links__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 29
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["links"] ?? null));
            foreach ($context['_seq'] as $context["code"] => $context["link"]) {
                // line 30
                echo "        <li class=\"";
                echo ((($context["code"] == ($context["currentPage"] ?? null))) ? ("active") : (""));
                echo " ";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 30)) ? ("dropdown") : (""));
                echo "\">
            <a
                href=\"";
                // line 32
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 32)) ? ("#") : ($this->extensions['Cms\Twig\Extension']->pageFilter(((twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, true, 32)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "page", [], "any", false, false, true, 32)) : ((($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = $context["link"]) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null))))));
                echo "\"
                ";
                // line 33
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 33)) {
                    echo "data-toggle=\"dropdown\"";
                }
                // line 34
                echo "                class=\"";
                echo ((twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 34)) ? ("dropdown-toggle") : (""));
                echo "\"
            >
                ";
                // line 36
                echo twig_escape_filter($this->env, ((twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, true, 36)) ? (twig_get_attribute($this->env, $this->source, $context["link"], "name", [], "any", false, false, true, 36)) : ((($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = $context["link"]) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null))), "html", null, true);
                echo "
                ";
                // line 37
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 37)) {
                    echo "<span class=\"caret\"></span>";
                }
                // line 38
                echo "            </a>
            ";
                // line 39
                if (twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 39)) {
                    // line 40
                    echo "                <span class=\"dropdown-arrow\"></span>
                <ul class=\"dropdown-menu\">
                    ";
                    // line 42
                    echo twig_call_macro($macros["_self"], "macro_render_menu", [twig_get_attribute($this->env, $this->source, $context["link"], "sublinks", [], "any", false, false, true, 42)], 42, $context, $this->getSourceContext());
                    echo "
                </ul>
            ";
                }
                // line 45
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/jtherczeg-corlate/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  137 => 42,  133 => 40,  131 => 39,  128 => 38,  124 => 37,  120 => 36,  114 => 34,  110 => 33,  106 => 32,  98 => 30,  93 => 29,  80 => 28,  71 => 64,  62 => 60,  50 => 50,  48 => 49,  45 => 48,  42 => 27,  40 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/jtherczeg-corlate/partials/nav.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 2, "import" => 49, "macro" => 28, "for" => 29, "if" => 33);
        static $filters = array("page" => 60, "theme" => 60, "escape" => 36);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'import', 'macro', 'for', 'if'],
                ['page', 'theme', 'escape'],
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
