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

/* C:\xampp\htdocs\daigakudori/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm */
class __TwigTemplate_850fdb0c8bd4440ee857bf9ec0a234cc5a25e76ccad29a9dfeed6da858a70663 extends \Twig\Template
{
    private $source;

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
        // line 1
        echo "<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        ";
        // line 13
        if (twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 13)) {
            // line 14
            echo "        ";
            $context["items"] = twig_get_attribute($this->env, $this->source, ($context["staticMenu"] ?? null), "menuItems", [], "any", false, false, false, 14);
            // line 15
            echo "        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            ";
            // line 17
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 18
                echo "                <li class=\"nav-item ";
                echo (((twig_get_attribute($this->env, $this->source, $context["item"], "isActive", [], "any", false, false, false, 18) || twig_get_attribute($this->env, $this->source, $context["item"], "isChildActive", [], "any", false, false, false, 18))) ? ("active") : (""));
                echo "
                    ";
                // line 19
                echo ((twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 19)) ? ("dropdown btn-group") : (""));
                echo "\"
                >
                    <a class=\"nav-link ";
                // line 21
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 21)) {
                    echo "'dropdown-toggle' ";
                }
                echo "\"
                            ";
                // line 22
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 22)) {
                    echo " id=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 22), [" " => "-"]), "html", null, true);
                    echo "\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"";
                }
                // line 23
                echo "                       href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 23), "html", null, true);
                echo "\"
                    >
                        ";
                // line 25
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 25), "html", null, true);
                echo "

                        ";
                // line 27
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 27)) {
                    echo "<span class=\"sr-only\">(current)</span>";
                }
                // line 28
                echo "                    </a>

                    ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 30)) {
                    // line 31
                    echo "                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu";
                    echo twig_escape_filter($this->env, twig_replace_filter(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 31), [" " => "-"]), "html", null, true);
                    echo "\">
                            ";
                    // line 32
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["item"], "items", [], "any", false, false, false, 32));
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 33
                        echo "                                <a class=\"dropdown-item\" href=\"";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "url", [], "any", false, false, false, 33), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["child"], "title", [], "any", false, false, false, 33), "html", null, true);
                        echo "</a>
                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 35
                    echo "                        </div>
                    ";
                }
                // line 37
                echo "                </li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "        ";
        }
        // line 40
        echo "        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 40,  136 => 39,  129 => 37,  125 => 35,  114 => 33,  110 => 32,  105 => 31,  103 => 30,  99 => 28,  95 => 27,  90 => 25,  84 => 23,  78 => 22,  72 => 21,  67 => 19,  62 => 18,  58 => 17,  54 => 15,  51 => 14,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Navbar-->
<nav class=\"navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar\">

    <!-- Navbar brand -->
    <a class=\"navbar-brand\" href=\"#\">Navbar</a>

    <!-- Collapse button -->
    <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\"
        aria-expanded=\"false\" aria-label=\"Toggle navigation\"><span class=\"navbar-toggler-icon\"></span></button>

    <!-- Collapsible content -->
    <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
        {% if staticMenu.menuItems %}
        {% set items = staticMenu.menuItems %}
        <!-- Links -->
        <ul class=\"navbar-nav mr-auto\">
            {% for item in items %}
                <li class=\"nav-item {{ item.isActive or item.isChildActive ? 'active' : '' }}
                    {{ item.items ? 'dropdown btn-group' : '' }}\"
                >
                    <a class=\"nav-link {% if item.items %}'dropdown-toggle' {% endif %}\"
                            {% if item.items %} id=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\" data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\"{% endif %}
                       href=\"{{ item.url }}\"
                    >
                        {{ item.title }}

                        {% if item.items %}<span class=\"sr-only\">(current)</span>{% endif %}
                    </a>

                    {% if item.items %}
                        <div class=\"dropdown-menu dropdown\" aria-labelledby=\"dropdownMenu{{ item.title|replace({' ':'-'}) }}\">
                            {% for child in item.items %}
                                <a class=\"dropdown-item\" href=\"{{ child.url }}\">{{ child.title }}</a>
                            {% endfor %}
                        </div>
                    {% endif %}
                </li>
            {% endfor %}
        {% endif %}
        </ul>
        <!-- Links -->

        <!-- Search form -->
        <form class=\"form-inline\">
            <input class=\"form-control mr-sm-2\" type=\"text\" placeholder=\"Search\" aria-label=\"Search\">
        </form>
    </div>
    <!-- Collapsible content -->

</nav>
<!--/.Navbar-->", "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/partials/site/scrollingNavbar.htm", "");
    }
}
