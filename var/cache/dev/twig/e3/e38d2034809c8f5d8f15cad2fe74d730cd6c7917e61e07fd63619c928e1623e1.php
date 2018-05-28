<?php

/* @Framework/Form/container_attributes.html.php */
class __TwigTemplate_5a2fe667ffb853048e57f164ce6f24e226f1ff151c606fe9cb902b81e31f21e6 extends Twig_Template
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
        $__internal_1752bc958b7653ac3fc053624f332293fd52cdc7fff9ae0ca3b2fb8d3a498c3b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1752bc958b7653ac3fc053624f332293fd52cdc7fff9ae0ca3b2fb8d3a498c3b->enter($__internal_1752bc958b7653ac3fc053624f332293fd52cdc7fff9ae0ca3b2fb8d3a498c3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        $__internal_b7df4a0d79a6bf54651ac516550595ac72371f46d36c70611b147b8159222675 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7df4a0d79a6bf54651ac516550595ac72371f46d36c70611b147b8159222675->enter($__internal_b7df4a0d79a6bf54651ac516550595ac72371f46d36c70611b147b8159222675_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/container_attributes.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
";
        
        $__internal_1752bc958b7653ac3fc053624f332293fd52cdc7fff9ae0ca3b2fb8d3a498c3b->leave($__internal_1752bc958b7653ac3fc053624f332293fd52cdc7fff9ae0ca3b2fb8d3a498c3b_prof);

        
        $__internal_b7df4a0d79a6bf54651ac516550595ac72371f46d36c70611b147b8159222675->leave($__internal_b7df4a0d79a6bf54651ac516550595ac72371f46d36c70611b147b8159222675_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/container_attributes.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>
", "@Framework/Form/container_attributes.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/container_attributes.html.php");
    }
}
