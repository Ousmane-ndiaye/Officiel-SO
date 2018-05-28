<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_9359811080183b2bba609c5259ca8b40a6020e024e821399c25d469fcc7f31a0 extends Twig_Template
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
        $__internal_e4b44d64869523f9fe14768be4ab07f98ff3e0375bc587322a9f09e11184cf17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4b44d64869523f9fe14768be4ab07f98ff3e0375bc587322a9f09e11184cf17->enter($__internal_e4b44d64869523f9fe14768be4ab07f98ff3e0375bc587322a9f09e11184cf17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_33c55c2f41410b322f928cafdc8b9af2e48185393bfb4b072e9e4b87d59f702a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33c55c2f41410b322f928cafdc8b9af2e48185393bfb4b072e9e4b87d59f702a->enter($__internal_33c55c2f41410b322f928cafdc8b9af2e48185393bfb4b072e9e4b87d59f702a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_e4b44d64869523f9fe14768be4ab07f98ff3e0375bc587322a9f09e11184cf17->leave($__internal_e4b44d64869523f9fe14768be4ab07f98ff3e0375bc587322a9f09e11184cf17_prof);

        
        $__internal_33c55c2f41410b322f928cafdc8b9af2e48185393bfb4b072e9e4b87d59f702a->leave($__internal_33c55c2f41410b322f928cafdc8b9af2e48185393bfb4b072e9e4b87d59f702a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_attributes.html.php");
    }
}
