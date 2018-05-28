<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_b9fe2bef1d1b026e3c0b7736f21e572ac9473006c19ab78375174fdd839a7745 extends Twig_Template
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
        $__internal_b59a7294299710dd69468bf1e88298e3e90d8126607ad7c4acd6862aab497f25 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b59a7294299710dd69468bf1e88298e3e90d8126607ad7c4acd6862aab497f25->enter($__internal_b59a7294299710dd69468bf1e88298e3e90d8126607ad7c4acd6862aab497f25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_26116f3f7e9fe4131d4e179c9f230532db149a8d054e841eef98e5b87619b5b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26116f3f7e9fe4131d4e179c9f230532db149a8d054e841eef98e5b87619b5b2->enter($__internal_26116f3f7e9fe4131d4e179c9f230532db149a8d054e841eef98e5b87619b5b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_b59a7294299710dd69468bf1e88298e3e90d8126607ad7c4acd6862aab497f25->leave($__internal_b59a7294299710dd69468bf1e88298e3e90d8126607ad7c4acd6862aab497f25_prof);

        
        $__internal_26116f3f7e9fe4131d4e179c9f230532db149a8d054e841eef98e5b87619b5b2->leave($__internal_26116f3f7e9fe4131d4e179c9f230532db149a8d054e841eef98e5b87619b5b2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
