<?php

/* OfficeBundle:connexion:login.html.twig */
class __TwigTemplate_265dadab4ce4957d37d08ef36c36d401119023aaf129bcdd122fb1d44845f3c7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5f6e5cfb0b6157a218c601937aa1e8baa303b8fcc39cad0178e9d311aec1b502 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f6e5cfb0b6157a218c601937aa1e8baa303b8fcc39cad0178e9d311aec1b502->enter($__internal_5f6e5cfb0b6157a218c601937aa1e8baa303b8fcc39cad0178e9d311aec1b502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:connexion:login.html.twig"));

        $__internal_8acf035e10b78f7a24dcb02a2dd224445595f0bab40f32cddf87452e79a69e20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acf035e10b78f7a24dcb02a2dd224445595f0bab40f32cddf87452e79a69e20->enter($__internal_8acf035e10b78f7a24dcb02a2dd224445595f0bab40f32cddf87452e79a69e20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:connexion:login.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Premium Immobilier</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

        <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class=\"wrapper-page\">
            <div class=\"panel panel-color panel-primary panel-pages\">
                <div class=\"panel-heading bg-img\"> 
                    <div class=\"bg-overlay\"></div>
                    <h3 class=\"text-center m-t-10 text-white\"> Se Connecter a <strong>MyOFFICE</strong> </h3>
                </div> 


                <div class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"";
        // line 44
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("acceuil");
        echo "\">
                    
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" required=\"\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\">
                                <label for=\"checkbox-signup\">
                                    Se souvenir de moi
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">SE CONNECTER</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"pages-recoverpw.html\"><i class=\"fa fa-lock m-r-5\"></i> Mot de passe Oublié?</a>
                        </div>
                        <div class=\"col-sm-5 text-right\">
                            <a href=\"pages-register.html\">Creer Compte</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    \t<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src=\"";
        // line 96
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 103
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>
\t
\t</body>
</html>";
        
        $__internal_5f6e5cfb0b6157a218c601937aa1e8baa303b8fcc39cad0178e9d311aec1b502->leave($__internal_5f6e5cfb0b6157a218c601937aa1e8baa303b8fcc39cad0178e9d311aec1b502_prof);

        
        $__internal_8acf035e10b78f7a24dcb02a2dd224445595f0bab40f32cddf87452e79a69e20->leave($__internal_8acf035e10b78f7a24dcb02a2dd224445595f0bab40f32cddf87452e79a69e20_prof);

    }

    public function getTemplateName()
    {
        return "OfficeBundle:connexion:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 107,  188 => 105,  184 => 104,  180 => 103,  176 => 102,  172 => 101,  168 => 100,  164 => 99,  160 => 98,  156 => 97,  152 => 96,  97 => 44,  71 => 21,  66 => 19,  62 => 18,  58 => 17,  54 => 16,  50 => 15,  46 => 14,  42 => 13,  37 => 11,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\" />
        <title>Premium Immobilier</title>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
        <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
        <meta content=\"Coderthemes\" name=\"author\" />
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

        <link rel=\"shortcut icon\" href=\"{{asset ('assets/images/favicon_1.ico')}}\">

        <link href=\"{{asset ('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset ('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <script src=\"{{asset ('assets/js/modernizr.min.js')}}\"></script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src=\"https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js\"></script>
        <script src=\"https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js\"></script>
        <![endif]-->

        
    </head>
    <body>


        <div class=\"wrapper-page\">
            <div class=\"panel panel-color panel-primary panel-pages\">
                <div class=\"panel-heading bg-img\"> 
                    <div class=\"bg-overlay\"></div>
                    <h3 class=\"text-center m-t-10 text-white\"> Se Connecter a <strong>MyOFFICE</strong> </h3>
                </div> 


                <div class=\"panel-body\">
                <form class=\"form-horizontal m-t-20\" method=\"post\" action=\"{{path ('acceuil')}}\">
                    
                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"text\" required=\"\" placeholder=\"Username\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <input class=\"form-control input-lg\" type=\"password\" required=\"\" placeholder=\"Password\">
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <div class=\"col-xs-12\">
                            <div class=\"checkbox checkbox-primary\">
                                <input id=\"checkbox-signup\" type=\"checkbox\">
                                <label for=\"checkbox-signup\">
                                    Se souvenir de moi
                                </label>
                            </div>
                            
                        </div>
                    </div>
                    
                    <div class=\"form-group text-center m-t-40\">
                        <div class=\"col-xs-12\">
                            <button class=\"btn btn-primary btn-lg w-lg waves-effect waves-light\" type=\"submit\">SE CONNECTER</button>
                        </div>
                    </div>

                    <div class=\"form-group m-t-30\">
                        <div class=\"col-sm-7\">
                            <a href=\"pages-recoverpw.html\"><i class=\"fa fa-lock m-r-5\"></i> Mot de passe Oublié?</a>
                        </div>
                        <div class=\"col-sm-5 text-right\">
                            <a href=\"pages-register.html\">Creer Compte</a>
                        </div>
                    </div>
                </form> 
                </div>                                 
                
            </div>
        </div>

        
    \t<script>
            var resizefunc = [];
        </script>

        <!-- Main  -->
        <script src=\"{{asset ('assets/js/jquery.min.js')}}\"></script>
        <script src=\"{{asset ('assets/js/bootstrap.min.js')}}\"></script>
        <script src=\"{{asset ('assets/js/detect.js')}}\"></script>
        <script src=\"{{asset ('assets/js/fastclick.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.slimscroll.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.blockUI.js')}}\"></script>
        <script src=\"{{asset ('assets/js/waves.js')}}\"></script>
        <script src=\"{{asset ('assets/js/wow.min.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.nicescroll.js')}}\"></script>
        <script src=\"{{asset ('assets/js/jquery.scrollTo.min.js')}}\"></script>

        <script src=\"{{asset ('assets/js/jquery.app.js')}}\"></script>
\t
\t</body>
</html>", "OfficeBundle:connexion:login.html.twig", "/var/www/html/senoffice/myoffice/src/OfficeBundle/Resources/views/connexion/login.html.twig");
    }
}
