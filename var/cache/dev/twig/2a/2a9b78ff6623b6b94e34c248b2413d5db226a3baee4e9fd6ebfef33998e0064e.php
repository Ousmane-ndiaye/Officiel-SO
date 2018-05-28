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
        $__internal_51b0bc434014319aec8f01fd6b003c26ee10294da9e8691bc5527c4e6f76e145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51b0bc434014319aec8f01fd6b003c26ee10294da9e8691bc5527c4e6f76e145->enter($__internal_51b0bc434014319aec8f01fd6b003c26ee10294da9e8691bc5527c4e6f76e145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_1d83eaa5865fa6119a5e3cb81b39710f42ddd718628c7c5c0b32bd9616617ab3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d83eaa5865fa6119a5e3cb81b39710f42ddd718628c7c5c0b32bd9616617ab3->enter($__internal_1d83eaa5865fa6119a5e3cb81b39710f42ddd718628c7c5c0b32bd9616617ab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_51b0bc434014319aec8f01fd6b003c26ee10294da9e8691bc5527c4e6f76e145->leave($__internal_51b0bc434014319aec8f01fd6b003c26ee10294da9e8691bc5527c4e6f76e145_prof);

        
        $__internal_1d83eaa5865fa6119a5e3cb81b39710f42ddd718628c7c5c0b32bd9616617ab3->leave($__internal_1d83eaa5865fa6119a5e3cb81b39710f42ddd718628c7c5c0b32bd9616617ab3_prof);

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
", "@Framework/Form/radio_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}
