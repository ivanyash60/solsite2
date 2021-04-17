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

/* /var/www/html/octobercms/themes/jtherczeg-corlate/pages/samples/pricing.htm */
class __TwigTemplate_5c7e625e8f7562dafd5b3a0918eb81e6ea2a3329b73b3636b51a7a8d2acc0fd7 extends \Twig\Template
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
        // line 1
        echo "<section class=\"pricing-page\">
        <div class=\"container\">
            <div class=\"center\">  
                <h2>Pricing Table</h2>
                <p class=\"lead\">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut <br> et dolore magna aliqua. Ut enim ad minim veniam</p>
            </div>  
            <div class=\"pricing-area text-center\">
                <div class=\"row\">
                    <div class=\"col-sm-4 plan price-one wow fadeInDown\">
                        <ul>
                            <li class=\"heading-one\">
                                <h1>Start Up</h1>
                                <span>\$6/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dedicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-two wow fadeInDown\">
                        <ul>
                            <li class=\"heading-two\">
                                <h1>Standard</h1>
                                <span>\$12/Month</span>
                            </li>
                            <li>10 Gb Disk Space</li>
                            <li>2GB Dedicated Ram</li>
                            <li>20 Addon Domain</li>
                            <li>20 Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-4 plan price-three wow fadeInDown\">
                        <img src=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ribon_one.png");
        echo "\">
                        <ul>
                            <li class=\"heading-three\">
                                <h1>Premium</h1>
                                <span>\$24/Month</span>
                            </li>
                            <li>50 Gb Disk Space</li>
                            <li>8GB Dedicated Ram</li>
                            <li>Unlimited Addon Domain</li>
                            <li>Unlimited Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-6 col-md-3 plan price-four wow fadeInDown\">
                        <ul>
                            <li class=\"heading-four\">
                                <h1>Basic</h1>
                                <span>\$3/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dedicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-6 col-md-3 plan price-five wow fadeInDown\">
                        <ul>
                            <li class=\"heading-five\">
                                <h1>Standard</h1>
                                <span>\$6/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dedicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>

                    <div class=\"col-sm-6 col-md-3 plan price-six wow fadeInDown\">
                         <img src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/images/ribon_two.png");
        echo "\">
                        <ul>
                            <li class=\"heading-six\">
                                <h1>Premium</h1>
                                <span>\$12/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dedicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>

                     <div class=\"col-sm-6 col-md-3 plan price-seven wow fadeInDown\">
                        <ul>
                            <li class=\"heading-seven\">
                                <h1>Developer</h1>
                                <span>\$19/Month</span>
                            </li>
                            <li>5 Gb Disk Space</li>
                            <li>1GB Dedicated Ram</li>
                            <li>10 Addon Domain</li>
                            <li>10 Email Account</li>
                            <li>24/7 Support</li>
                            <li class=\"plan-action\">
                                <a href=\"\" class=\"btn btn-primary\">Sign up</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->";
    }

    public function getTemplateName()
    {
        return "/var/www/html/octobercms/themes/jtherczeg-corlate/pages/samples/pricing.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 96,  84 => 44,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "/var/www/html/octobercms/themes/jtherczeg-corlate/pages/samples/pricing.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("theme" => 44);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['theme'],
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
