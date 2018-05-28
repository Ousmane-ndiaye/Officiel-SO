<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_35adecb451e73ce7cceefb6918fd41de51bebb7b720e57934a1b209162db4a81 extends Twig_Template
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
        $__internal_6d37c117995a57982d67d1f610a0a49964eef76a1d0315c2e778f77d9f12ef16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d37c117995a57982d67d1f610a0a49964eef76a1d0315c2e778f77d9f12ef16->enter($__internal_6d37c117995a57982d67d1f610a0a49964eef76a1d0315c2e778f77d9f12ef16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        $__internal_948ff6697f6cc7e239bfd47a57b4504101c6f6972ed1e77fb9e3de5062041db8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_948ff6697f6cc7e239bfd47a57b4504101c6f6972ed1e77fb9e3de5062041db8->enter($__internal_948ff6697f6cc7e239bfd47a57b4504101c6f6972ed1e77fb9e3de5062041db8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_6d37c117995a57982d67d1f610a0a49964eef76a1d0315c2e778f77d9f12ef16->leave($__internal_6d37c117995a57982d67d1f610a0a49964eef76a1d0315c2e778f77d9f12ef16_prof);

        
        $__internal_948ff6697f6cc7e239bfd47a57b4504101c6f6972ed1e77fb9e3de5062041db8->leave($__internal_948ff6697f6cc7e239bfd47a57b4504101c6f6972ed1e77fb9e3de5062041db8_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "TwigBundle:Exception:error.atom.twig", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.atom.twig");
    }
}
