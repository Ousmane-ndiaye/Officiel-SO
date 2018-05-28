<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_652c6f5da4d22f130958983ebeea86daebc195a5a376933eae19786aaffdeeb3 extends Twig_Template
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
        $__internal_adc8548e2aca4df09837811fddfa886324976f9e77363f6a8132728cb1a6a2c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_adc8548e2aca4df09837811fddfa886324976f9e77363f6a8132728cb1a6a2c2->enter($__internal_adc8548e2aca4df09837811fddfa886324976f9e77363f6a8132728cb1a6a2c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_fd17adc7ff80f93599261d3d2dbfe153caef34db36cdc7ec5d949b40cf231123 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fd17adc7ff80f93599261d3d2dbfe153caef34db36cdc7ec5d949b40cf231123->enter($__internal_fd17adc7ff80f93599261d3d2dbfe153caef34db36cdc7ec5d949b40cf231123_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_adc8548e2aca4df09837811fddfa886324976f9e77363f6a8132728cb1a6a2c2->leave($__internal_adc8548e2aca4df09837811fddfa886324976f9e77363f6a8132728cb1a6a2c2_prof);

        
        $__internal_fd17adc7ff80f93599261d3d2dbfe153caef34db36cdc7ec5d949b40cf231123->leave($__internal_fd17adc7ff80f93599261d3d2dbfe153caef34db36cdc7ec5d949b40cf231123_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}
