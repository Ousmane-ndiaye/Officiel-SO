<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_bc1bfe15eb0c1682c3df10213cf5a9ec1e103b13f1bcab79bcdc91cd6a77def5 extends Twig_Template
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
        $__internal_9b9d0216af66e04299d3c8f572a8572f4a842696fd39707694d8be1b5ddaf31a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b9d0216af66e04299d3c8f572a8572f4a842696fd39707694d8be1b5ddaf31a->enter($__internal_9b9d0216af66e04299d3c8f572a8572f4a842696fd39707694d8be1b5ddaf31a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_d28ea603e3cb999e4bcf40788441b6eebcea80139390f70b19a7aa99ec815ee2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d28ea603e3cb999e4bcf40788441b6eebcea80139390f70b19a7aa99ec815ee2->enter($__internal_d28ea603e3cb999e4bcf40788441b6eebcea80139390f70b19a7aa99ec815ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9b9d0216af66e04299d3c8f572a8572f4a842696fd39707694d8be1b5ddaf31a->leave($__internal_9b9d0216af66e04299d3c8f572a8572f4a842696fd39707694d8be1b5ddaf31a_prof);

        
        $__internal_d28ea603e3cb999e4bcf40788441b6eebcea80139390f70b19a7aa99ec815ee2->leave($__internal_d28ea603e3cb999e4bcf40788441b6eebcea80139390f70b19a7aa99ec815ee2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
