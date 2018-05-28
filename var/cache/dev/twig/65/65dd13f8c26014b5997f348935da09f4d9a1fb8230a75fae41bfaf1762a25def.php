<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c1a87904b4fba1800c6f0240b0ce2678c5a771c0de4fc173729bd5d5f9df1f11 extends Twig_Template
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
        $__internal_5f57157ed4547e7911e760c60bce8ab668e203667989ac80626263a0296bf934 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5f57157ed4547e7911e760c60bce8ab668e203667989ac80626263a0296bf934->enter($__internal_5f57157ed4547e7911e760c60bce8ab668e203667989ac80626263a0296bf934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_20979d04a81fd1c1cab4a26343315c79f0c967a0df65745d086158021bb9a024 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20979d04a81fd1c1cab4a26343315c79f0c967a0df65745d086158021bb9a024->enter($__internal_20979d04a81fd1c1cab4a26343315c79f0c967a0df65745d086158021bb9a024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_5f57157ed4547e7911e760c60bce8ab668e203667989ac80626263a0296bf934->leave($__internal_5f57157ed4547e7911e760c60bce8ab668e203667989ac80626263a0296bf934_prof);

        
        $__internal_20979d04a81fd1c1cab4a26343315c79f0c967a0df65745d086158021bb9a024->leave($__internal_20979d04a81fd1c1cab4a26343315c79f0c967a0df65745d086158021bb9a024_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
