<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_65cd183cbef2017a4ed5a8ab9559aeae8ec6a6ea905ba1e8c166a3923f4d11ca extends Twig_Template
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
        $__internal_94ef26842349677c70340cd475585ed28b4f16bba21a5135102c3eddb824f127 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_94ef26842349677c70340cd475585ed28b4f16bba21a5135102c3eddb824f127->enter($__internal_94ef26842349677c70340cd475585ed28b4f16bba21a5135102c3eddb824f127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        $__internal_cfbf776bfc0ed4c4aaeaf092a1680bc1e9a20b50ce640ebd90293427c9b4079b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfbf776bfc0ed4c4aaeaf092a1680bc1e9a20b50ce640ebd90293427c9b4079b->enter($__internal_cfbf776bfc0ed4c4aaeaf092a1680bc1e9a20b50ce640ebd90293427c9b4079b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
";
        
        $__internal_94ef26842349677c70340cd475585ed28b4f16bba21a5135102c3eddb824f127->leave($__internal_94ef26842349677c70340cd475585ed28b4f16bba21a5135102c3eddb824f127_prof);

        
        $__internal_cfbf776bfc0ed4c4aaeaf092a1680bc1e9a20b50ce640ebd90293427c9b4079b->leave($__internal_cfbf776bfc0ed4c4aaeaf092a1680bc1e9a20b50ce640ebd90293427c9b4079b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper {
    min-height: auto;
}
", "WebProfilerBundle:Collector:exception.css.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.css.twig");
    }
}
