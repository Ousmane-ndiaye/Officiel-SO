<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_80c55c5087d3696954d172ff4a55ff231052f4df06063093bf12476658e03caf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_52be99b94ba5321b192a8faa51265dede54ef7743bb5bcf290114ed862d33a99 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52be99b94ba5321b192a8faa51265dede54ef7743bb5bcf290114ed862d33a99->enter($__internal_52be99b94ba5321b192a8faa51265dede54ef7743bb5bcf290114ed862d33a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_7180f7286c90fe2e598bfd26f5be8b878314e96db5e2996480f68bda25cdf226 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7180f7286c90fe2e598bfd26f5be8b878314e96db5e2996480f68bda25cdf226->enter($__internal_7180f7286c90fe2e598bfd26f5be8b878314e96db5e2996480f68bda25cdf226_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_52be99b94ba5321b192a8faa51265dede54ef7743bb5bcf290114ed862d33a99->leave($__internal_52be99b94ba5321b192a8faa51265dede54ef7743bb5bcf290114ed862d33a99_prof);

        
        $__internal_7180f7286c90fe2e598bfd26f5be8b878314e96db5e2996480f68bda25cdf226->leave($__internal_7180f7286c90fe2e598bfd26f5be8b878314e96db5e2996480f68bda25cdf226_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_1fcb43ae48f4a76767a808ab3396e61e30c995f2f46fe90a679c9675d17e530a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fcb43ae48f4a76767a808ab3396e61e30c995f2f46fe90a679c9675d17e530a->enter($__internal_1fcb43ae48f4a76767a808ab3396e61e30c995f2f46fe90a679c9675d17e530a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3da95e7cfcab8fca922c749fa7c046af87c09333a5b430d2cdc394e031943f4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3da95e7cfcab8fca922c749fa7c046af87c09333a5b430d2cdc394e031943f4a->enter($__internal_3da95e7cfcab8fca922c749fa7c046af87c09333a5b430d2cdc394e031943f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_3da95e7cfcab8fca922c749fa7c046af87c09333a5b430d2cdc394e031943f4a->leave($__internal_3da95e7cfcab8fca922c749fa7c046af87c09333a5b430d2cdc394e031943f4a_prof);

        
        $__internal_1fcb43ae48f4a76767a808ab3396e61e30c995f2f46fe90a679c9675d17e530a->leave($__internal_1fcb43ae48f4a76767a808ab3396e61e30c995f2f46fe90a679c9675d17e530a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
