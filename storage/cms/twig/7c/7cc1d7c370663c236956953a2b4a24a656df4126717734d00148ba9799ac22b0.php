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

/* C:\xampp\htdocs\daigakudori/themes/zanor-zanor-mdb-loaded/partials/site/footer.htm */
class __TwigTemplate_f42e2a76271871567b5893a3e7b63052af5f0a978d7bfa519a6bd4d3b7f615fa extends \Twig\Template
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
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("footer/4-column"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 2
        echo "
<script src=\"";
        // line 3
        echo $this->extensions['Cms\Twig\Extension']->themeFilter([0 => "assets/js/jquery-3.2.1.min.js", 1 => "assets/js/popper.js", 2 => "assets/js/bootstrap.min.js", 3 => "assets/js/mdb.min.js"]);
        // line 8
        echo "\"></script>

    ";
        // line 10
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 11
        echo "    ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 12
        echo "
<script>
    new WOW().init();
</script>

</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  63 => 11,  48 => 10,  44 => 8,  42 => 3,  39 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% partial 'footer/4-column' %}

<script src=\"{{ [
        'assets/js/jquery-3.2.1.min.js',
        'assets/js/popper.js',
        'assets/js/bootstrap.min.js',
        'assets/js/mdb.min.js'
    ]|theme }}\"></script>

    {% framework extras %}
    {% scripts %}

<script>
    new WOW().init();
</script>

</body>
</html>", "C:\\xampp\\htdocs\\daigakudori/themes/zanor-zanor-mdb-loaded/partials/site/footer.htm", "");
    }
}
