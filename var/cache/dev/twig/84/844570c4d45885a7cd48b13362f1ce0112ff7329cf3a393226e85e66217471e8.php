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
        $__internal_cfade3ebf78125e09e93a7ad273ec952a37c9464997ec4146b6ec438241c7350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfade3ebf78125e09e93a7ad273ec952a37c9464997ec4146b6ec438241c7350->enter($__internal_cfade3ebf78125e09e93a7ad273ec952a37c9464997ec4146b6ec438241c7350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_a11b3ba1fd2e9f321a9cf453fc03e5945b53e64a7c072140577a0fa599f8edb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a11b3ba1fd2e9f321a9cf453fc03e5945b53e64a7c072140577a0fa599f8edb6->enter($__internal_a11b3ba1fd2e9f321a9cf453fc03e5945b53e64a7c072140577a0fa599f8edb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_cfade3ebf78125e09e93a7ad273ec952a37c9464997ec4146b6ec438241c7350->leave($__internal_cfade3ebf78125e09e93a7ad273ec952a37c9464997ec4146b6ec438241c7350_prof);

        
        $__internal_a11b3ba1fd2e9f321a9cf453fc03e5945b53e64a7c072140577a0fa599f8edb6->leave($__internal_a11b3ba1fd2e9f321a9cf453fc03e5945b53e64a7c072140577a0fa599f8edb6_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_8125a93216bb26e47fa8c894ca89b930918d49e774c3efdf3b868b743e3ead58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8125a93216bb26e47fa8c894ca89b930918d49e774c3efdf3b868b743e3ead58->enter($__internal_8125a93216bb26e47fa8c894ca89b930918d49e774c3efdf3b868b743e3ead58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ac7c7ec1f283935fc9e5e38f4f86178ee35e4c60f0342cdcf5114c24edcaaa44 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac7c7ec1f283935fc9e5e38f4f86178ee35e4c60f0342cdcf5114c24edcaaa44->enter($__internal_ac7c7ec1f283935fc9e5e38f4f86178ee35e4c60f0342cdcf5114c24edcaaa44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ac7c7ec1f283935fc9e5e38f4f86178ee35e4c60f0342cdcf5114c24edcaaa44->leave($__internal_ac7c7ec1f283935fc9e5e38f4f86178ee35e4c60f0342cdcf5114c24edcaaa44_prof);

        
        $__internal_8125a93216bb26e47fa8c894ca89b930918d49e774c3efdf3b868b743e3ead58->leave($__internal_8125a93216bb26e47fa8c894ca89b930918d49e774c3efdf3b868b743e3ead58_prof);

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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
