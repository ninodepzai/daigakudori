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

/* C:\xampp\htdocs\daigakudori/themes/jtherczeg-multi/partials/blogs.htm */
class __TwigTemplate_c2001f4452c80fc6a49234ee1909988411554d98e19af0c0618a67ef3ac651bc extends \Twig\Template
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
                <h2 class=\"section-title text-center wow fadeInDown\">Latest Blogs</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                        <article>
                            <header class=\"entry-header\">
                                <div class=\"entry-thumbnail\">
                                    <img class=\"img-responsive\" src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/01.jpg");
        echo "\" alt=\"\">
                                    <span class=\"post-format post-format-video\"><i class=\"fa fa-film\"></i></span>
                                </div>
                                <div class=\"entry-date\">25 November 2014</div>
                                <h2 class=\"entry-title\"><a href=\"#\">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class=\"entry-content\">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                            </div>

                            <footer class=\"entry-meta\">
                                <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Victor</a></span>
                                <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Tutorial</a></span>
                                <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">15</a></span>
                            </footer>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" src=\"";
        // line 37
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/02.jpg");
        echo "\" alt=\"\">
                                <span class=\"post-format post-format-gallery\"><i class=\"fa fa-image\"></i></span>
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">01 December 2014</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">BeReviews was a awesome envent in dhaka</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Campbell</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Tutorial</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" src=\"";
        // line 62
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/blog/03.jpg");
        echo "\" alt=\"\">
                                <span class=\"post-format post-format-audio\"><i class=\"fa fa-music\"></i></span>
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">03 November 2014</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">Play list of old bangle  music and gajal</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ruth</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Tutorial</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>";
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/blogs.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 62,  76 => 37,  49 => 13,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"container\">
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">Latest Blogs</h2>
                <p class=\"text-center wow fadeInDown\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>

            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-large wow fadeInLeft\" data-wow-duration=\"300ms\" data-wow-delay=\"0ms\">
                        <article>
                            <header class=\"entry-header\">
                                <div class=\"entry-thumbnail\">
                                    <img class=\"img-responsive\" src=\"{{ 'assets/images/blog/01.jpg'|theme }}\" alt=\"\">
                                    <span class=\"post-format post-format-video\"><i class=\"fa fa-film\"></i></span>
                                </div>
                                <div class=\"entry-date\">25 November 2014</div>
                                <h2 class=\"entry-title\"><a href=\"#\">While now the fated Pequod had been so long afloat this</a></h2>
                            </header>

                            <div class=\"entry-content\">
                                <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the mate the long iron rod remaining, bade him hold it upright, without its touching off the steel head of the lance, and then handing to the mate the long iron rod remaining. without its touching off the steel without its touching off the steel</P>
                                <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                            </div>

                            <footer class=\"entry-meta\">
                                <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Victor</a></span>
                                <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Tutorial</a></span>
                                <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">15</a></span>
                            </footer>
                        </article>
                    </div>
                </div><!--/.col-sm-6-->
                <div class=\"col-sm-6\">
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"100ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/blog/02.jpg'|theme }}\" alt=\"\">
                                <span class=\"post-format post-format-gallery\"><i class=\"fa fa-image\"></i></span>
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">01 December 2014</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">BeReviews was a awesome envent in dhaka</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Campbell</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Tutorial</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                    <div class=\"blog-post blog-media wow fadeInRight\" data-wow-duration=\"300ms\" data-wow-delay=\"200ms\">
                        <article class=\"media clearfix\">
                            <div class=\"entry-thumbnail pull-left\">
                                <img class=\"img-responsive\" src=\"{{ 'assets/images/blog/03.jpg'|theme }}\" alt=\"\">
                                <span class=\"post-format post-format-audio\"><i class=\"fa fa-music\"></i></span>
                            </div>
                            <div class=\"media-body\">
                                <header class=\"entry-header\">
                                    <div class=\"entry-date\">03 November 2014</div>
                                    <h2 class=\"entry-title\"><a href=\"#\">Play list of old bangle  music and gajal</a></h2>
                                </header>

                                <div class=\"entry-content\">
                                    <P>With a blow from the top-maul Ahab knocked off the steel head of the lance, and then handing to the steel</P>
                                    <a class=\"btn btn-primary\" href=\"#\">Read More</a>
                                </div>

                                <footer class=\"entry-meta\">
                                    <span class=\"entry-author\"><i class=\"fa fa-pencil\"></i> <a href=\"#\">Ruth</a></span>
                                    <span class=\"entry-category\"><i class=\"fa fa-folder-o\"></i> <a href=\"#\">Tutorial</a></span>
                                    <span class=\"entry-comments\"><i class=\"fa fa-comments-o\"></i> <a href=\"#\">15</a></span>
                                </footer>
                            </div>
                        </article>
                    </div>
                </div>
            </div>

        </div>", "C:\\xampp\\htdocs\\daigakudori/themes/jtherczeg-multi/partials/blogs.htm", "");
    }
}
