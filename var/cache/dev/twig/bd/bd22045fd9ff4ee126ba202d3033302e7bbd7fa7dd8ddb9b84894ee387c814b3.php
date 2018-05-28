<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_adff7e66d28e8c251b05b20a64e055107e624eb6c69a71332300bd399814b055 extends Twig_Template
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
        $__internal_a255b89cdd92262695c39f81ff30b0ea672ebc4c2d32f50a41cc3ff9a42fb1ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a255b89cdd92262695c39f81ff30b0ea672ebc4c2d32f50a41cc3ff9a42fb1ef->enter($__internal_a255b89cdd92262695c39f81ff30b0ea672ebc4c2d32f50a41cc3ff9a42fb1ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_cf3043e41edd89b5d4c0b57c87c3bf3a27211b7cd1be5a58a190c0ec6a4de1df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf3043e41edd89b5d4c0b57c87c3bf3a27211b7cd1be5a58a190c0ec6a4de1df->enter($__internal_cf3043e41edd89b5d4c0b57c87c3bf3a27211b7cd1be5a58a190c0ec6a4de1df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            echo twig_include($this->env, $context, "@Twig/Exception/trace.txt.twig", array("trace" => $context["trace"]), false);
            echo "

            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_a255b89cdd92262695c39f81ff30b0ea672ebc4c2d32f50a41cc3ff9a42fb1ef->leave($__internal_a255b89cdd92262695c39f81ff30b0ea672ebc4c2d32f50a41cc3ff9a42fb1ef_prof);

        
        $__internal_cf3043e41edd89b5d4c0b57c87c3bf3a27211b7cd1be5a58a190c0ec6a4de1df->leave($__internal_cf3043e41edd89b5d4c0b57c87c3bf3a27211b7cd1be5a58a190c0ec6a4de1df_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{{ include('@Twig/Exception/trace.txt.twig', { trace: trace }, with_context = false) }}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
