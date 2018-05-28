<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_ad145957b7e6009e00103b81e21719a83e9b6329a9c19ddc328ea13bcea926d4 extends Twig_Template
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
        $__internal_56e28fed0d9d854278d4050a7457b5890c26d5307ac96bb6eb32a85acd3414ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56e28fed0d9d854278d4050a7457b5890c26d5307ac96bb6eb32a85acd3414ac->enter($__internal_56e28fed0d9d854278d4050a7457b5890c26d5307ac96bb6eb32a85acd3414ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_ccb6b9b939590916ad8ae946b1c3708bcef5c8dfaf9b803dbdfe47c4e0fc4ca9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccb6b9b939590916ad8ae946b1c3708bcef5c8dfaf9b803dbdfe47c4e0fc4ca9->enter($__internal_ccb6b9b939590916ad8ae946b1c3708bcef5c8dfaf9b803dbdfe47c4e0fc4ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_56e28fed0d9d854278d4050a7457b5890c26d5307ac96bb6eb32a85acd3414ac->leave($__internal_56e28fed0d9d854278d4050a7457b5890c26d5307ac96bb6eb32a85acd3414ac_prof);

        
        $__internal_ccb6b9b939590916ad8ae946b1c3708bcef5c8dfaf9b803dbdfe47c4e0fc4ca9->leave($__internal_ccb6b9b939590916ad8ae946b1c3708bcef5c8dfaf9b803dbdfe47c4e0fc4ca9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}
