<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_b0972ea85d093d38911027a775a817705c22243169e9b5875e4b3eceefab67c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1307d536884d2bf661a8848e4118c76d77070e52720a6902f46b4518d134a23 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1307d536884d2bf661a8848e4118c76d77070e52720a6902f46b4518d134a23->enter($__internal_c1307d536884d2bf661a8848e4118c76d77070e52720a6902f46b4518d134a23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_e993b243754cfbdc17145f42b52ae1f92bd72b834734293ce60fad1126093046 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e993b243754cfbdc17145f42b52ae1f92bd72b834734293ce60fad1126093046->enter($__internal_e993b243754cfbdc17145f42b52ae1f92bd72b834734293ce60fad1126093046_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1307d536884d2bf661a8848e4118c76d77070e52720a6902f46b4518d134a23->leave($__internal_c1307d536884d2bf661a8848e4118c76d77070e52720a6902f46b4518d134a23_prof);

        
        $__internal_e993b243754cfbdc17145f42b52ae1f92bd72b834734293ce60fad1126093046->leave($__internal_e993b243754cfbdc17145f42b52ae1f92bd72b834734293ce60fad1126093046_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_bd74c6fea0d413cb2daacaecafa0aa53cc551f1ffd05b73a0c9be1120a7c1ef2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd74c6fea0d413cb2daacaecafa0aa53cc551f1ffd05b73a0c9be1120a7c1ef2->enter($__internal_bd74c6fea0d413cb2daacaecafa0aa53cc551f1ffd05b73a0c9be1120a7c1ef2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_85de280b898910b6edda7ed6aecfd378eef93dd2be73442620a494e032443955 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85de280b898910b6edda7ed6aecfd378eef93dd2be73442620a494e032443955->enter($__internal_85de280b898910b6edda7ed6aecfd378eef93dd2be73442620a494e032443955_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_85de280b898910b6edda7ed6aecfd378eef93dd2be73442620a494e032443955->leave($__internal_85de280b898910b6edda7ed6aecfd378eef93dd2be73442620a494e032443955_prof);

        
        $__internal_bd74c6fea0d413cb2daacaecafa0aa53cc551f1ffd05b73a0c9be1120a7c1ef2->leave($__internal_bd74c6fea0d413cb2daacaecafa0aa53cc551f1ffd05b73a0c9be1120a7c1ef2_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_930624616a0afbdca53b7a547fbae9c115c1c086665a3b8ef7658a0655df575f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_930624616a0afbdca53b7a547fbae9c115c1c086665a3b8ef7658a0655df575f->enter($__internal_930624616a0afbdca53b7a547fbae9c115c1c086665a3b8ef7658a0655df575f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6d7279de163aa9692c94cb8091d01e1c21810e46368d68db4825fc69e97d4cd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d7279de163aa9692c94cb8091d01e1c21810e46368d68db4825fc69e97d4cd5->enter($__internal_6d7279de163aa9692c94cb8091d01e1c21810e46368d68db4825fc69e97d4cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6d7279de163aa9692c94cb8091d01e1c21810e46368d68db4825fc69e97d4cd5->leave($__internal_6d7279de163aa9692c94cb8091d01e1c21810e46368d68db4825fc69e97d4cd5_prof);

        
        $__internal_930624616a0afbdca53b7a547fbae9c115c1c086665a3b8ef7658a0655df575f->leave($__internal_930624616a0afbdca53b7a547fbae9c115c1c086665a3b8ef7658a0655df575f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2a042088856e2cfb8d28aa6794fd277a3b2f94845b834428e3bbc66fefa94b6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a042088856e2cfb8d28aa6794fd277a3b2f94845b834428e3bbc66fefa94b6a->enter($__internal_2a042088856e2cfb8d28aa6794fd277a3b2f94845b834428e3bbc66fefa94b6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14d74b44c2cecfb50e5a203f634ae297e8fe074a798e0d203a3a0ac848515f91 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14d74b44c2cecfb50e5a203f634ae297e8fe074a798e0d203a3a0ac848515f91->enter($__internal_14d74b44c2cecfb50e5a203f634ae297e8fe074a798e0d203a3a0ac848515f91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_14d74b44c2cecfb50e5a203f634ae297e8fe074a798e0d203a3a0ac848515f91->leave($__internal_14d74b44c2cecfb50e5a203f634ae297e8fe074a798e0d203a3a0ac848515f91_prof);

        
        $__internal_2a042088856e2cfb8d28aa6794fd277a3b2f94845b834428e3bbc66fefa94b6a->leave($__internal_2a042088856e2cfb8d28aa6794fd277a3b2f94845b834428e3bbc66fefa94b6a_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}
