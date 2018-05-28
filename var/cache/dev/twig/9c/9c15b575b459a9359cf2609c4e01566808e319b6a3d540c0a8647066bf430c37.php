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
        $__internal_dcea063af318323427b333fc7f0ad4e1fadb6481fde3006e6a44d6beef010897 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dcea063af318323427b333fc7f0ad4e1fadb6481fde3006e6a44d6beef010897->enter($__internal_dcea063af318323427b333fc7f0ad4e1fadb6481fde3006e6a44d6beef010897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $__internal_21cf010f4bfbf32a68629549f607edd83562c0f2d179211d4fccf6dce952016b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21cf010f4bfbf32a68629549f607edd83562c0f2d179211d4fccf6dce952016b->enter($__internal_21cf010f4bfbf32a68629549f607edd83562c0f2d179211d4fccf6dce952016b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SenofficeBundle:Front:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dcea063af318323427b333fc7f0ad4e1fadb6481fde3006e6a44d6beef010897->leave($__internal_dcea063af318323427b333fc7f0ad4e1fadb6481fde3006e6a44d6beef010897_prof);

        
        $__internal_21cf010f4bfbf32a68629549f607edd83562c0f2d179211d4fccf6dce952016b->leave($__internal_21cf010f4bfbf32a68629549f607edd83562c0f2d179211d4fccf6dce952016b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_2b32042c758593f933e216fe0a326257af6e514739454b72fe30f385f1f85ac0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2b32042c758593f933e216fe0a326257af6e514739454b72fe30f385f1f85ac0->enter($__internal_2b32042c758593f933e216fe0a326257af6e514739454b72fe30f385f1f85ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ae8a507f5561c7344ea484675dc4d8682425cd9c384f1603c713bbd1996a3371 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae8a507f5561c7344ea484675dc4d8682425cd9c384f1603c713bbd1996a3371->enter($__internal_ae8a507f5561c7344ea484675dc4d8682425cd9c384f1603c713bbd1996a3371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Sen Office";
        
        $__internal_ae8a507f5561c7344ea484675dc4d8682425cd9c384f1603c713bbd1996a3371->leave($__internal_ae8a507f5561c7344ea484675dc4d8682425cd9c384f1603c713bbd1996a3371_prof);

        
        $__internal_2b32042c758593f933e216fe0a326257af6e514739454b72fe30f385f1f85ac0->leave($__internal_2b32042c758593f933e216fe0a326257af6e514739454b72fe30f385f1f85ac0_prof);

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
", "SenofficeBundle:Front:index.html.twig", "/var/www/html/senoffice/myoffice/src/ADOB/SenofficeBundle/Resources/views/Front/index.html.twig");
    }
}
