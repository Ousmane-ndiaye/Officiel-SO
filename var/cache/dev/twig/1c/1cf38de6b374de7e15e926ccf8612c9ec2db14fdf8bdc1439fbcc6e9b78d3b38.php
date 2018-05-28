<?php

/* OfficeBundle:Pagesadmin:acceuiladmin.html.twig */
class __TwigTemplate_042172b7a1deec30849102d9d95080ef1038ce9192add5bb51923981ddeb109e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'href' => array($this, 'block_href'),
            'body' => array($this, 'block_body'),
            'container' => array($this, 'block_container'),
            'javascript' => array($this, 'block_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_44c33d074b298e78d7cfd7944d606ac23e06c997ddfdaaa8dac105018dd5b388 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44c33d074b298e78d7cfd7944d606ac23e06c997ddfdaaa8dac105018dd5b388->enter($__internal_44c33d074b298e78d7cfd7944d606ac23e06c997ddfdaaa8dac105018dd5b388_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Pagesadmin:acceuiladmin.html.twig"));

        $__internal_68d754de7ec96a8c5aa7757ccfc98291cbada57c1588c77c57f73234823248f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68d754de7ec96a8c5aa7757ccfc98291cbada57c1588c77c57f73234823248f7->enter($__internal_68d754de7ec96a8c5aa7757ccfc98291cbada57c1588c77c57f73234823248f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OfficeBundle:Pagesadmin:acceuiladmin.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>

<head>
    <meta charset=\"utf-8\" />
    <title>MyOffice</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    ";
        // line 12
        $this->displayBlock('href', $context, $blocks);
        // line 48
        echo "
</head>


<body class=\"fixed-left\">
    ";
        // line 53
        $this->displayBlock('body', $context, $blocks);
        // line 539
        echo "</body>

</html>";
        
        $__internal_44c33d074b298e78d7cfd7944d606ac23e06c997ddfdaaa8dac105018dd5b388->leave($__internal_44c33d074b298e78d7cfd7944d606ac23e06c997ddfdaaa8dac105018dd5b388_prof);

        
        $__internal_68d754de7ec96a8c5aa7757ccfc98291cbada57c1588c77c57f73234823248f7->leave($__internal_68d754de7ec96a8c5aa7757ccfc98291cbada57c1588c77c57f73234823248f7_prof);

    }

    // line 12
    public function block_href($context, array $blocks = array())
    {
        $__internal_02ba2ab3812373871f91e89df5422c1f4f48025a99f91a861e962164c304be99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_02ba2ab3812373871f91e89df5422c1f4f48025a99f91a861e962164c304be99->enter($__internal_02ba2ab3812373871f91e89df5422c1f4f48025a99f91a861e962164c304be99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "href"));

        $__internal_b8430e49531d53e4d50dada341278a0016beb84ca84b351a354556f06b3f8fcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8430e49531d53e4d50dada341278a0016beb84ca84b351a354556f06b3f8fcd->enter($__internal_b8430e49531d53e4d50dada341278a0016beb84ca84b351a354556f06b3f8fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "href"));

        // line 13
        echo "
    <link rel=\"shortcut icon\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

     <link rel=\"stylesheet\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/magnific-popup.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">

    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">


    ";
        // line 30
        echo "
        <link rel=\"shortcut icon\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/favicon_1.ico"), "html", null, true);
        echo "\">

        ";
        // line 34
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/core.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/icons.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/components.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/pages.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/menu.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/responsive.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">
        ";
        // line 44
        echo "
    <script src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/modernizr.min.js"), "html", null, true);
        echo "\"></script>

    ";
        
        $__internal_b8430e49531d53e4d50dada341278a0016beb84ca84b351a354556f06b3f8fcd->leave($__internal_b8430e49531d53e4d50dada341278a0016beb84ca84b351a354556f06b3f8fcd_prof);

        
        $__internal_02ba2ab3812373871f91e89df5422c1f4f48025a99f91a861e962164c304be99->leave($__internal_02ba2ab3812373871f91e89df5422c1f4f48025a99f91a861e962164c304be99_prof);

    }

    // line 53
    public function block_body($context, array $blocks = array())
    {
        $__internal_f152cd3c2a42e9d5afec7d75c7f79192c67a6291260f4afe45a2b394ab2b6c41 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f152cd3c2a42e9d5afec7d75c7f79192c67a6291260f4afe45a2b394ab2b6c41->enter($__internal_f152cd3c2a42e9d5afec7d75c7f79192c67a6291260f4afe45a2b394ab2b6c41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b04928c952f07a07f23ef2f9298de9ebdbd48526594f2f83857920b80fd7302d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b04928c952f07a07f23ef2f9298de9ebdbd48526594f2f83857920b80fd7302d->enter($__internal_b04928c952f07a07f23ef2f9298de9ebdbd48526594f2f83857920b80fd7302d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 54
        echo "    ";
        // line 55
        echo "    <div id=\"wrapper\">

        ";
        // line 58
        echo "        <div class=\"topbar\">
            ";
        // line 60
        echo "            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("index.html"), "html", null, true);
        echo "\" class=\"logo\"><i class=\"md md-home\"></i> <span>MyOFFICE</span></a>
                </div>
            </div>
            ";
        // line 66
        echo "            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        {
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"";
        // line 152
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    ";
        // line 158
        echo "                </div>
            </div>
        </div>
        ";
        // line 162
        echo "


        ";
        // line 166
        echo "
        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"";
        // line 171
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/dieyna.jpeg"), "html", null, true);
        echo "\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">IBNALIOU<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 177
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"";
        // line 178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"";
        // line 179
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("javascript:void(0)"), "html", null, true);
        echo "\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrateur</p>
                    </div>
                </div>";
        // line 188
        echo "                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> ACCEUIL </span></a>

                            <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> SALLES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LISTE DES SALLES</a></li>
                                <li><a href=\"\">AJOUTER UN BIEN</a></li>
                            </ul>
                        </li>

                         <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS  </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LISTE DES RESERVATIONS</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span>  PROPRIETAIRES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">BIEN PROPOSER</a></li>
                                <li><a href=\"\">AJOUT LOCALITE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> TYPES DE SALLES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LISTE TYPES DE SALLES</a></li>
                                <li><a href=\"\">AJOUT TYPE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mail-inbox.html"), "html", null, true);
        echo "\">Inbox</a></li>
                                <li><a href=\"";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("mail-compose.html"), "html", null, true);
        echo "\">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                       

                      

                       

                       

                       
                      

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"";
        // line 255
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("maps-google.html"), "html", null, true);
        echo "\"> Google Map</a></li>
                                <li><a href=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("maps-vector.html"), "html", null, true);
        echo "\"> Vector Map</a></li>
                            </ul>
                        </li>

                      
                       
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        ";
        // line 269
        echo "

        ";
        // line 272
        echo "        ";
        // line 273
        echo "        ";
        // line 274
        echo "        ";
        $this->displayBlock('container', $context, $blocks);
        // line 299
        echo "        ";
        // line 300
        echo "        ";
        // line 301
        echo "        ";
        // line 302
        echo "

        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 341
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 351
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 361
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-7.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 381
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-8.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 391
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-9.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"";
        // line 401
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/users/avatar-10.jpg"), "html", null, true);
        echo "\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"";
        // line 404
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("fa fa-circle offline"), "html", null, true);
        echo "\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        ";
        // line 412
        echo "
    </div>
    ";
        // line 415
        echo "
";
        // line 416
        $this->displayBlock('javascript', $context, $blocks);
        
        $__internal_b04928c952f07a07f23ef2f9298de9ebdbd48526594f2f83857920b80fd7302d->leave($__internal_b04928c952f07a07f23ef2f9298de9ebdbd48526594f2f83857920b80fd7302d_prof);

        
        $__internal_f152cd3c2a42e9d5afec7d75c7f79192c67a6291260f4afe45a2b394ab2b6c41->leave($__internal_f152cd3c2a42e9d5afec7d75c7f79192c67a6291260f4afe45a2b394ab2b6c41_prof);

    }

    // line 274
    public function block_container($context, array $blocks = array())
    {
        $__internal_a7783f5906cf6fc26cfb3b25f35e71df374c6f737e0cbddfa0b66e91c845a3f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7783f5906cf6fc26cfb3b25f35e71df374c6f737e0cbddfa0b66e91c845a3f5->enter($__internal_a7783f5906cf6fc26cfb3b25f35e71df374c6f737e0cbddfa0b66e91c845a3f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        $__internal_b5efbd8d4951978d8cb61ce83fb0341d135c18367516919b09630fd7eeb0b820 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b5efbd8d4951978d8cb61ce83fb0341d135c18367516919b09630fd7eeb0b820->enter($__internal_b5efbd8d4951978d8cb61ce83fb0341d135c18367516919b09630fd7eeb0b820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 275
        echo "        <div class=\"content-page\">
            ";
        // line 277
        echo "            <div class=\"content\">
                <div class=\"container\">

";
        // line 281
        echo "

<div class=\"row\">
                          
                        </div>
                         ";
        // line 287
        echo "                    </div>
                ";
        // line 289
        echo "
            </div>
            ";
        // line 292
        echo "
            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        ";
        
        $__internal_b5efbd8d4951978d8cb61ce83fb0341d135c18367516919b09630fd7eeb0b820->leave($__internal_b5efbd8d4951978d8cb61ce83fb0341d135c18367516919b09630fd7eeb0b820_prof);

        
        $__internal_a7783f5906cf6fc26cfb3b25f35e71df374c6f737e0cbddfa0b66e91c845a3f5->leave($__internal_a7783f5906cf6fc26cfb3b25f35e71df374c6f737e0cbddfa0b66e91c845a3f5_prof);

    }

    // line 416
    public function block_javascript($context, array $blocks = array())
    {
        $__internal_4e4e6146679dcfd2b7feb4b507622b8d8cc88fabcaea932789f07a0e8cfff066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e4e6146679dcfd2b7feb4b507622b8d8cc88fabcaea932789f07a0e8cfff066->enter($__internal_4e4e6146679dcfd2b7feb4b507622b8d8cc88fabcaea932789f07a0e8cfff066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        $__internal_75e47e518298de2f5ac3775af9774c5a99a98f31d75f6103bcc64edecfaecf70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75e47e518298de2f5ac3775af9774c5a99a98f31d75f6103bcc64edecfaecf70->enter($__internal_75e47e518298de2f5ac3775af9774c5a99a98f31d75f6103bcc64edecfaecf70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascript"));

        // line 417
        echo "
    <script>
        var resizefunc = [];
    </script>

    ";
        // line 423
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 425
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 426
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 427
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 428
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 429
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 430
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 431
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 432
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

    <script src=\"";
        // line 434
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.app.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 437
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/moment/moment.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 440
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/waypoints/lib/jquery.waypoints.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 441
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/counterup/jquery.counterup.min.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 444
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/sweetalert/dist/sweetalert.min.js"), "html", null, true);
        echo "\"></script>


    ";
        // line 448
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 449
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 450
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.tooltip.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 451
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 453
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.selection.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 454
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 455
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/flot-chart/jquery.flot.crosshair.js"), "html", null, true);
        echo "\"></script>




        <script>
            var resizefunc = [];
        </script>

";
        // line 465
        echo "

        ";
        // line 468
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 469
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 470
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/detect.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 471
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/fastclick.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 472
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.slimscroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 473
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.blockUI.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/waves.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 475
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/wow.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 476
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 477
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/js/jquery.scrollTo.min.js"), "html", null, true);
        echo "\"></script>

        <script src=\"assets/js/jquery.app.js\"></script>

        ";
        // line 482
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/dropzone/dist/dropzone.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 485
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.todo.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 488
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.chat.js"), "html", null, true);
        echo "\"></script>

    ";
        // line 491
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/pages/jquery.dashboard.js"), "html", null, true);
        echo "\"></script>


    <script src=\"";
        // line 494
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/jquery-datatables-editable/jquery.dataTables.js"), "html", null, true);
        echo "\"></script> 
        <script src=\"";
        // line 496
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/plugins/datatables/dataTables.bootstrap.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 497
        echo "assets/pages/datatables.editable.init.js";
        echo "\"></script>


            <script type=\"text/javascript\">
            \$(document).ready(function() {
            
                \$('#datatable-editable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"assets/plugins/datatables/json/scroller-demo.json\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-editable').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>



    <script type=\"text/javascript\">






        /* ==============================================
                            Counter Up
                            =============================================== */
        jQuery(document).ready(function(\$) {

            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
       
            
        
    
        });
    </script>

";
        
        $__internal_75e47e518298de2f5ac3775af9774c5a99a98f31d75f6103bcc64edecfaecf70->leave($__internal_75e47e518298de2f5ac3775af9774c5a99a98f31d75f6103bcc64edecfaecf70_prof);

        
        $__internal_4e4e6146679dcfd2b7feb4b507622b8d8cc88fabcaea932789f07a0e8cfff066->leave($__internal_4e4e6146679dcfd2b7feb4b507622b8d8cc88fabcaea932789f07a0e8cfff066_prof);

    }

    public function getTemplateName()
    {
        return "OfficeBundle:Pagesadmin:acceuiladmin.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  891 => 497,  887 => 496,  883 => 495,  879 => 494,  872 => 491,  866 => 488,  861 => 485,  854 => 482,  847 => 477,  843 => 476,  839 => 475,  835 => 474,  831 => 473,  827 => 472,  823 => 471,  819 => 470,  815 => 469,  810 => 468,  806 => 465,  794 => 455,  790 => 454,  786 => 453,  782 => 452,  778 => 451,  774 => 450,  770 => 449,  765 => 448,  758 => 444,  753 => 441,  748 => 440,  742 => 437,  737 => 434,  732 => 432,  728 => 431,  724 => 430,  720 => 429,  716 => 428,  712 => 427,  708 => 426,  704 => 425,  700 => 424,  695 => 423,  688 => 417,  679 => 416,  663 => 292,  659 => 289,  656 => 287,  649 => 281,  644 => 277,  641 => 275,  632 => 274,  622 => 416,  619 => 415,  615 => 412,  605 => 404,  599 => 401,  586 => 391,  573 => 381,  560 => 371,  547 => 361,  534 => 351,  521 => 341,  508 => 331,  495 => 321,  482 => 311,  471 => 302,  469 => 301,  467 => 300,  465 => 299,  462 => 274,  460 => 273,  458 => 272,  454 => 269,  439 => 256,  435 => 255,  410 => 233,  406 => 232,  360 => 188,  351 => 180,  347 => 179,  343 => 178,  339 => 177,  330 => 171,  323 => 166,  318 => 162,  313 => 158,  305 => 152,  301 => 151,  297 => 150,  293 => 149,  208 => 66,  202 => 62,  198 => 60,  195 => 58,  191 => 55,  189 => 54,  180 => 53,  167 => 45,  164 => 44,  160 => 42,  156 => 41,  152 => 40,  148 => 39,  144 => 38,  140 => 37,  136 => 36,  130 => 34,  125 => 31,  122 => 30,  116 => 26,  112 => 25,  108 => 24,  104 => 23,  100 => 22,  96 => 21,  92 => 20,  88 => 19,  82 => 16,  77 => 14,  74 => 13,  65 => 12,  53 => 539,  51 => 53,  44 => 48,  42 => 12,  29 => 1,);
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
    <title>MyOffice</title>
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no\" />
    <meta content=\"A fully featured admin theme which can be used to build CRM, CMS, etc.\" name=\"description\" />
    <meta content=\"Coderthemes\" name=\"author\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />

    {% block href %}

    <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

     <link rel=\"stylesheet\" href=\"{{asset('assets/plugins/magnific-popup/dist/magnific-popup.css')}}\">
        <link rel=\"stylesheet\" href=\"asset('assets/plugins/jquery-datatables-editable/datatables.css')}}\">

    <link href=\"{{asset('assets/plugins/sweetalert/dist/sweetalert.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/pages.css')}} \" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
    <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">


    {# upload images #}

        <link rel=\"shortcut icon\" href=\"{{asset('assets/images/favicon_1.ico')}}\">

        {# Dropzone css #}
        <link href=\"{{asset('assets/plugins/dropzone/dist/dropzone.css')}}\" rel=\"stylesheet\" type=\"text/css\">

        <link href=\"{{asset('assets/css/bootstrap.min.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/core.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/icons.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/components.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/pages.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/menu.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        <link href=\"{{asset('assets/css/responsive.css')}}\" rel=\"stylesheet\" type=\"text/css\">
        {#fin#}

    <script src=\"{{asset ('assets/js/modernizr.min.js')}}\"></script>

    {% endblock %}

</head>


<body class=\"fixed-left\">
    {% block body%}
    {# Begin page #}
    <div id=\"wrapper\">

        {# Top Bar Start #}
        <div class=\"topbar\">
            {# LOGO #}
            <div class=\"topbar-left\">
                <div class=\"text-center\">
                    <a href=\"{{asset ('index.html')}}\" class=\"logo\"><i class=\"md md-home\"></i> <span>MyOFFICE</span></a>
                </div>
            </div>
            {# Button mobile view to collapse sidebar menu #}
            <div class=\"navbar navbar-default\" role=\"navigation\">
                <div class=\"container\">
                    <div class=\"\">
                        <div class=\"pull-left\">
                            <button type=\"button\" class=\"button-menu-mobile open-left\">
                                    <i class=\"fa fa-bars\"></i>
                                </button>
                            <span class=\"clearfix\"></span>
                        </div>
                        <form class=\"navbar-form pull-left\" role=\"search\">
                            <div class=\"form-group\">
                                <input type=\"text\" class=\"form-control search-bar\" placeholder=\"Type here for search...\">
                            </div>
                            <button type=\"submit\" class=\"btn btn-search\"><i class=\"fa fa-search\"></i></button>
                        </form>

                        <ul class=\"nav navbar-nav navbar-right pull-right\">
                            <li class=\"dropdown hidden-xs\">
                                <a href=\"#\" data-target=\"#\" class=\"dropdown-toggle waves-effect waves-light\" data-toggle=\"dropdown\" aria-expanded=\"true\">
                                    <i class=\"md md-notifications\"></i> <span class=\"badge badge-xs badge-danger\">3</span>
                                </a>
                                <ul class=\"dropdown-menu dropdown-menu-lg\">
                                    <li class=\"text-center notifi-title\">Notification</li>
                                    <li class=\"list-group\">
                                        {
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-user-plus fa-2x text-info\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New user registered</div>
                                                    <p class=\"m-0\">
                                                        <small>You have 10 unread messages</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-diamond fa-2x text-primary\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">New settings</div>
                                                    <p class=\"m-0\">
                                                        <small>There are new settings available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <div class=\"media\">
                                                <div class=\"media-left\">
                                                    <em class=\"fa fa-bell-o fa-2x text-danger\"></em>
                                                </div>
                                                <div class=\"media-body clearfix\">
                                                    <div class=\"media-heading\">Updates</div>
                                                    <p class=\"m-0\">
                                                        <small>There are
                                                          <span class=\"text-primary\">2</span> new updates available</small>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                        
                                        <a href=\"javascript:void(0)\" class=\"list-group-item\">
                                            <small>See all notifications</small>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" id=\"btn-fullscreen\" class=\"waves-effect waves-light\"><i class=\"md md-crop-free\"></i></a>
                            </li>
                            <li class=\"hidden-xs\">
                                <a href=\"#\" class=\"right-bar-toggle waves-effect waves-light\"><i class=\"md md-chat\"></i></a>
                            </li>
                            <li class=\"dropdown\">
                                <a href=\"\" class=\"dropdown-toggle profile\" data-toggle=\"dropdown\" aria-expanded=\"true\"><img src=\"assets/images/users/avatar-1.jpg\" alt=\"user-img\" class=\"img-circle\"> </a>
                                <ul class=\"dropdown-menu\">
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-face-unlock\"></i> Profile</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings\"></i> Settings</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                    <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    {#/.nav-collapse #}
                </div>
            </div>
        </div>
        {# Top Bar End #}



        {# ========== Left Sidebar Start ========== #}

        <div class=\"left side-menu\">
            <div class=\"sidebar-inner slimscrollleft\">
                <div class=\"user-details\">
                    <div class=\"pull-left\">
                        <img src=\"{{asset ('assets/images/dieyna.jpeg')}}\" alt=\"\" class=\"thumb-md img-circle\">
                    </div>
                    <div class=\"user-info\">
                        <div class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">IBNALIOU<span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-face-unlock\"></i> Profile<div class=\"ripple-wrapper\"></div></a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings\"></i> Settings</a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-lock\"></i> Lock screen</a></li>
                                <li><a href=\"{{asset ('javascript:void(0)')}}\"><i class=\"md md-settings-power\"></i> Logout</a></li>
                            </ul>
                        </div>

                        <p class=\"text-muted m-0\">Administrateur</p>
                    </div>
                </div>
                {#- Divider #}
                <div id=\"sidebar-menu\">
                    <ul>
                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-home\"></i><span> ACCEUIL </span></a>

                            <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> SALLES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LISTE DES SALLES</a></li>
                                <li><a href=\"\">AJOUTER UN BIEN</a></li>
                            </ul>
                        </li>

                         <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> RESERVATIONS  </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LISTE DES RESERVATIONS</a></li>
                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span>  PROPRIETAIRES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">BIEN PROPOSER</a></li>
                                <li><a href=\"\">AJOUT LOCALITE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-view-list\"></i><span> TYPES DE SALLES </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled \">
                                <li><a href=\"\">LISTE TYPES DE SALLES</a></li>
                                <li><a href=\"\">AJOUT TYPE</a></li>

                            </ul>
                        </li>


                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-mail\"></i><span> Mail </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{asset ('mail-inbox.html')}}\">Inbox</a></li>
                                <li><a href=\"{{asset ('mail-compose.html')}}\">Compose Mail</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href=\"\" class=\"waves-effect\"><i class=\"md md-event\"></i><span> Calendar </span></a>
                        </li>

                       

                      

                       

                       

                       
                      

                        <li class=\"has_sub\">
                            <a href=\"#\" class=\"waves-effect\"><i class=\"md md-place\"></i><span> Maps </span><span class=\"pull-right\"><i class=\"md md-add\"></i></span></a>
                            <ul class=\"list-unstyled\">
                                <li><a href=\"{{asset ('maps-google.html')}}\"> Google Map</a></li>
                                <li><a href=\"{{asset ('maps-vector.html')}}\"> Vector Map</a></li>
                            </ul>
                        </li>

                      
                       
                    </ul>
                    <div class=\"clearfix\"></div>
                </div>
                <div class=\"clearfix\"></div>
            </div>
        </div>
        {# Left Sidebar End #}


        {# ============================================================== #}
        {# Start right Content here #}
        {# ========LE CONTENU DE LA PAGE====================================================== #}
        {% block container %}
        <div class=\"content-page\">
            {# Start content #}
            <div class=\"content\">
                <div class=\"container\">

{#NOTRE FORMIULAIRE#}


<div class=\"row\">
                          
                        </div>
                         {# End row #}
                    </div>
                {# container #}

            </div>
            {# content #}

            <footer class=\"footer text-right\">
                2016 © Moltran.
            </footer>

        </div>
        {% endblock container %}
        {# ============================================================== #}
        {# End Right content here #}
        {# ============================================================== #}


        <div class=\"side-bar right-bar nicescroll\">
            <h4 class=\"text-center\">Chat</h4>
            <div class=\"contact-list nicescroll\">
                <ul class=\"list-group contacts-list\">
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-1.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Chadengle</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-2.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Tomaslau</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-3.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Stillnotdavid</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-4.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Kurafire</span>
                            <i class=\"fa fa-circle online\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-5.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Shahedk</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-6.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Adhamdannaway</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-7.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Ok</span>
                            <i class=\"fa fa-circle away\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-8.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Arashasghari</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-9.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Joshaustin</span>
                            <i class=\"fa fa-circle offline\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                    <li class=\"list-group-item\">
                        <a href=\"#\">
                            <div class=\"avatar\">
                                <img src=\"{{asset ('assets/images/users/avatar-10.jpg')}}\" alt=\"\">
                            </div>
                            <span class=\"name\">Sortino</span>
                            <i class=\"{{asset ('fa fa-circle offline')}}\"></i>
                        </a>
                        <span class=\"clearfix\"></span>
                    </li>
                </ul>
            </div>
        </div>
        {# /Right-bar #}

    </div>
    {# END wrapper #}

{% block javascript %}

    <script>
        var resizefunc = [];
    </script>

    {# jQuery  #}
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

    {# jQuery  #}
    <script src=\"{{asset ('assets/plugins/moment/moment.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/plugins/waypoints/lib/jquery.waypoints.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/counterup/jquery.counterup.min.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/plugins/sweetalert/dist/sweetalert.min.js')}}\"></script>


    {# flot Chart #}
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.time.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.tooltip.min.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.resize.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.pie.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.selection.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.stack.js')}}\"></script>
    <script src=\"{{asset ('assets/plugins/flot-chart/jquery.flot.crosshair.js')}}\"></script>




        <script>
            var resizefunc = [];
        </script>

{# jQuery  #}


        {# jQuery  #}
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

        <script src=\"assets/js/jquery.app.js\"></script>

        {# Page Specific JS Libraries #}
        <script src=\"{{asset ('assets/plugins/dropzone/dist/dropzone.js')}}\"></script>


    <script src=\"{{asset ('assets/pages/jquery.todo.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/pages/jquery.chat.js')}}\"></script>

    {# jQuery  #}
    <script src=\"{{asset ('assets/pages/jquery.dashboard.js')}}\"></script>


    <script src=\"{{asset('assets/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}\"></script>
        <script src=\"{{asset('assets/plugins/jquery-datatables-editable/jquery.dataTables.js')}}\"></script> 
        <script src=\"{{asset('assets/plugins/datatables/dataTables.bootstrap.js')}}\"></script>
        <script src=\"{{('assets/pages/datatables.editable.init.js')}}\"></script>


            <script type=\"text/javascript\">
            \$(document).ready(function() {
            
                \$('#datatable-editable').dataTable();
                \$('#datatable-keytable').DataTable( { keys: true } );
                \$('#datatable-responsive').DataTable();
                \$('#datatable-scroller').DataTable( { ajax: \"assets/plugins/datatables/json/scroller-demo.json\", deferRender: true, scrollY: 380, scrollCollapse: true, scroller: true } );
                var table = \$('#datatable-editable').DataTable( { fixedHeader: true } );
            } );
            TableManageButtons.init();
        </script>



    <script type=\"text/javascript\">






        /* ==============================================
                            Counter Up
                            =============================================== */
        jQuery(document).ready(function(\$) {

            \$('.counter').counterUp({
                delay: 100,
                time: 1200
            });
       
            
        
    
        });
    </script>

{% endblock %}
{% endblock %}
</body>

</html>", "OfficeBundle:Pagesadmin:acceuiladmin.html.twig", "/var/www/html/senoffice/myoffice/src/OfficeBundle/Resources/views/Pagesadmin/acceuiladmin.html.twig");
    }
}
