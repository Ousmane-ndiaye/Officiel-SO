<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_c88fa095271f0b72c40f5caa69b7b8f0d25ed25e6f42e1cf82ff1111deec3979 extends Twig_Template
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
        $__internal_5bde61464fce924a51ab2b4499e034e9bd7197aae21e44e7331da1884119529c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bde61464fce924a51ab2b4499e034e9bd7197aae21e44e7331da1884119529c->enter($__internal_5bde61464fce924a51ab2b4499e034e9bd7197aae21e44e7331da1884119529c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_77dfde012300eec9dec3c1672933572f6a7b1f6e6a10f9d9323e1fb68951e17c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77dfde012300eec9dec3c1672933572f6a7b1f6e6a10f9d9323e1fb68951e17c->enter($__internal_77dfde012300eec9dec3c1672933572f6a7b1f6e6a10f9d9323e1fb68951e17c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_5bde61464fce924a51ab2b4499e034e9bd7197aae21e44e7331da1884119529c->leave($__internal_5bde61464fce924a51ab2b4499e034e9bd7197aae21e44e7331da1884119529c_prof);

        
        $__internal_77dfde012300eec9dec3c1672933572f6a7b1f6e6a10f9d9323e1fb68951e17c->leave($__internal_77dfde012300eec9dec3c1672933572f6a7b1f6e6a10f9d9323e1fb68951e17c_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
