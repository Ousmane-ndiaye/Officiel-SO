<?php

/* SenofficeBundle:Front:index.html.twig */
class __TwigTemplate_9b982f0ac6108cb530399837c6dc339f7d569af0f3c45ac1df2451dfda6dfbd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "SenofficeBundle:Front:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4a506aeead9e1af97e42a680dd44332edeb55641806010c53b836ca6141dd0cc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a506aeead9e1af97e42a680dd44332edeb55641806010c53b836ca6141dd0cc->enter($__internal_4a506aeead9e1af97e42a680dd44332edeb55641806010c53b836ca6141dd0cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $__internal_b0c23c8524339c55334dfa1ac1dd4741f156d64dff1ae7fb4221e2f13a61ebbf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0c23c8524339c55334dfa1ac1dd4741f156d64dff1ae7fb4221e2f13a61ebbf->enter($__internal_b0c23c8524339c55334dfa1ac1dd4741f156d64dff1ae7fb4221e2f13a61ebbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4a506aeead9e1af97e42a680dd44332edeb55641806010c53b836ca6141dd0cc->leave($__internal_4a506aeead9e1af97e42a680dd44332edeb55641806010c53b836ca6141dd0cc_prof);

        
        $__internal_b0c23c8524339c55334dfa1ac1dd4741f156d64dff1ae7fb4221e2f13a61ebbf->leave($__internal_b0c23c8524339c55334dfa1ac1dd4741f156d64dff1ae7fb4221e2f13a61ebbf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3b3c48be0b4a8e77e6ae8853af6f89d5d6a6846e53442ef14c14ddca78fd2383 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3c48be0b4a8e77e6ae8853af6f89d5d6a6846e53442ef14c14ddca78fd2383->enter($__internal_3b3c48be0b4a8e77e6ae8853af6f89d5d6a6846e53442ef14c14ddca78fd2383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_4a7ef7dbf98eab1e6bc0ee74073b556f0784e9772a92232476289e9c96a2b840 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a7ef7dbf98eab1e6bc0ee74073b556f0784e9772a92232476289e9c96a2b840->enter($__internal_4a7ef7dbf98eab1e6bc0ee74073b556f0784e9772a92232476289e9c96a2b840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sen Office";
        
        $__internal_4a7ef7dbf98eab1e6bc0ee74073b556f0784e9772a92232476289e9c96a2b840->leave($__internal_4a7ef7dbf98eab1e6bc0ee74073b556f0784e9772a92232476289e9c96a2b840_prof);

        
        $__internal_3b3c48be0b4a8e77e6ae8853af6f89d5d6a6846e53442ef14c14ddca78fd2383->leave($__internal_3b3c48be0b4a8e77e6ae8853af6f89d5d6a6846e53442ef14c14ddca78fd2383_prof);

    }

    public function getTemplateName()
    {
        return "SenofficeBundle:Front:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}

{% block title %}Sen Office{% endblock %}
", "SenofficeBundle:Front:index.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/index.html.twig");
    }
}
