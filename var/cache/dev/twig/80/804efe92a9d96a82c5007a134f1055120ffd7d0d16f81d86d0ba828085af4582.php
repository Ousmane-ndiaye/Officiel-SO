<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_2a3726c8ee160b6e7e6ec19455e1b5132f877b116a8ed2a93d8875e57ccfdb0d extends Twig_Template
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
        $__internal_5d4efe522b2c41edbf8c8e48b188a1db57f1fd19f0457f354f0e24a83c72e0ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5d4efe522b2c41edbf8c8e48b188a1db57f1fd19f0457f354f0e24a83c72e0ab->enter($__internal_5d4efe522b2c41edbf8c8e48b188a1db57f1fd19f0457f354f0e24a83c72e0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        $__internal_666a9e9aad2fb6e1584a4f677203e81c1925b21d015392188da90a99112e0539 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_666a9e9aad2fb6e1584a4f677203e81c1925b21d015392188da90a99112e0539->enter($__internal_666a9e9aad2fb6e1584a4f677203e81c1925b21d015392188da90a99112e0539_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_5d4efe522b2c41edbf8c8e48b188a1db57f1fd19f0457f354f0e24a83c72e0ab->leave($__internal_5d4efe522b2c41edbf8c8e48b188a1db57f1fd19f0457f354f0e24a83c72e0ab_prof);

        
        $__internal_666a9e9aad2fb6e1584a4f677203e81c1925b21d015392188da90a99112e0539->leave($__internal_666a9e9aad2fb6e1584a4f677203e81c1925b21d015392188da90a99112e0539_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.atom.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}
