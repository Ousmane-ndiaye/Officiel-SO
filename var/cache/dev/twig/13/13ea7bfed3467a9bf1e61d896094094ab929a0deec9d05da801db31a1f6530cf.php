<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_ec03dc96dbfb1a26d7fd588348b8dd0968ae4e0891b641a19b68775ff46a340e extends Twig_Template
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
        $__internal_ea66794e378abf0494f95938df0c92275f1ffd0980dc9248628aaadbd536500d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea66794e378abf0494f95938df0c92275f1ffd0980dc9248628aaadbd536500d->enter($__internal_ea66794e378abf0494f95938df0c92275f1ffd0980dc9248628aaadbd536500d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_97a77f8c40f484f9b51936cd49631844be2d6ebd62a75133c702c80165ce8d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97a77f8c40f484f9b51936cd49631844be2d6ebd62a75133c702c80165ce8d9d->enter($__internal_97a77f8c40f484f9b51936cd49631844be2d6ebd62a75133c702c80165ce8d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ea66794e378abf0494f95938df0c92275f1ffd0980dc9248628aaadbd536500d->leave($__internal_ea66794e378abf0494f95938df0c92275f1ffd0980dc9248628aaadbd536500d_prof);

        
        $__internal_97a77f8c40f484f9b51936cd49631844be2d6ebd62a75133c702c80165ce8d9d->leave($__internal_97a77f8c40f484f9b51936cd49631844be2d6ebd62a75133c702c80165ce8d9d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
", "TwigBundle:Exception:error.js.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}
