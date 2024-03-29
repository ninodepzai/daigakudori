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

/* C:\xampp\htdocs\daigakudori/themes/jtherczeg-multi/partials/team.htm */
class __TwigTemplate_96a0ad9f02d69072928d981bd8d3b5c9532600ea4c86d6749550ef3a85d5cb03 extends \Twig\Template
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
        echo "<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 11
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/01.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 29
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/02.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/03.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"";
        // line 65
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/team/04.jpg");
        echo "\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    ";
        // line 86
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("team/skills.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 87
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 90
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("team/history.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 91
        echo "                </div>

                <div class=\"col-sm-4\">
                    ";
        // line 94
        $context['__cms_content_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->contentFunction("team/faqs.htm"        , $context['__cms_content_params']        );
        unset($context['__cms_content_params']);
        // line 95
        echo "                </div>

            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/team.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 95,  152 => 94,  147 => 91,  143 => 90,  138 => 87,  134 => 86,  110 => 65,  89 => 47,  68 => 29,  47 => 11,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Meet The Team</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"0ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/01.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Bin Burhan</h3>
                            <span>Co-Founder</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"100ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/02.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"200ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/03.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Pahlwan</h3>
                            <span>Designer</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class=\"col-sm-6 col-md-3\">
                    <div class=\"team-member wow fadeInUp\" data-wow-duration=\"400ms\" data-wow-delay=\"300ms\">
                        <div class=\"team-img\">
                            <img class=\"img-responsive\" src=\"{{ 'assets/images/team/04.jpg'|theme }}\" alt=\"\">
                        </div>
                        <div class=\"team-info\">
                            <h3>Nasir uddin</h3>
                            <span>UI/UX</span>
                        </div>
                        <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                        <ul class=\"social-icons\">
                            <li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-google-plus\"></i></a></li>
                            <li><a href=\"#\"><i class=\"fa fa-linkedin\"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class=\"divider\"></div>

            <div class=\"row\">
                <div class=\"col-sm-4\">
                    {% content 'team/skills.htm' %}
                </div>

                <div class=\"col-sm-4\">
                    {% content 'team/history.htm' %}
                </div>

                <div class=\"col-sm-4\">
                    {% content 'team/faqs.htm' %}
                </div>

            </div>
        </div>", "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/team.htm", "");
    }
}
