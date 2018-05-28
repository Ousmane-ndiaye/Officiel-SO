<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_e8a4715959982d62a4eaa372133700d380573fa9f6c314ef5bd53288d0f741fa extends Twig_Template
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
        $__internal_c8a1c343a137ee9ca844ebb94dda2725b0aa5eaec2ad48a188dd58f1bcb639b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8a1c343a137ee9ca844ebb94dda2725b0aa5eaec2ad48a188dd58f1bcb639b0->enter($__internal_c8a1c343a137ee9ca844ebb94dda2725b0aa5eaec2ad48a188dd58f1bcb639b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        $__internal_5e2f0dffc604f6059c1d959044ef0f0d08aa72040b304645982bf7ec80e999ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2f0dffc604f6059c1d959044ef0f0d08aa72040b304645982bf7ec80e999ad->enter($__internal_5e2f0dffc604f6059c1d959044ef0f0d08aa72040b304645982bf7ec80e999ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_c8a1c343a137ee9ca844ebb94dda2725b0aa5eaec2ad48a188dd58f1bcb639b0->leave($__internal_c8a1c343a137ee9ca844ebb94dda2725b0aa5eaec2ad48a188dd58f1bcb639b0_prof);

        
        $__internal_5e2f0dffc604f6059c1d959044ef0f0d08aa72040b304645982bf7ec80e999ad->leave($__internal_5e2f0dffc604f6059c1d959044ef0f0d08aa72040b304645982bf7ec80e999ad_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.css.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.css.twig");
    }
}
