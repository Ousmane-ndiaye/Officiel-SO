<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_f7d9f8e8fbcea9b3c8677f32fbe40fda8a081396a22a0e80f2a6a54f024dde09 extends Twig_Template
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
        $__internal_013c32ed00dec770e9f0dbb6a8c345cbed9c6e4e272d2e309894e9b94401566f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_013c32ed00dec770e9f0dbb6a8c345cbed9c6e4e272d2e309894e9b94401566f->enter($__internal_013c32ed00dec770e9f0dbb6a8c345cbed9c6e4e272d2e309894e9b94401566f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        $__internal_e7f7cc9f7e6db88373a86e68a1859a74b89c0a88b0bb800c60e018b58709cfb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7f7cc9f7e6db88373a86e68a1859a74b89c0a88b0bb800c60e018b58709cfb8->enter($__internal_e7f7cc9f7e6db88373a86e68a1859a74b89c0a88b0bb800c60e018b58709cfb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_013c32ed00dec770e9f0dbb6a8c345cbed9c6e4e272d2e309894e9b94401566f->leave($__internal_013c32ed00dec770e9f0dbb6a8c345cbed9c6e4e272d2e309894e9b94401566f_prof);

        
        $__internal_e7f7cc9f7e6db88373a86e68a1859a74b89c0a88b0bb800c60e018b58709cfb8->leave($__internal_e7f7cc9f7e6db88373a86e68a1859a74b89c0a88b0bb800c60e018b58709cfb8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "TwigBundle:Exception:error.txt.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.txt.twig");
    }
}
