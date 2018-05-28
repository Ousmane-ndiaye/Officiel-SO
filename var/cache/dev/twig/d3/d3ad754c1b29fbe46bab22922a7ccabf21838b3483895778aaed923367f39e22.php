<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_cc9fae85d52094140cdb8b7a0c6582e3d66e16c384a68aa3d2462db8a09be459 extends Twig_Template
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
        $__internal_1a8dbdd1ec5d5a05b87a43d5b6d637e20aab95dca1921158a07d741266e2426a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1a8dbdd1ec5d5a05b87a43d5b6d637e20aab95dca1921158a07d741266e2426a->enter($__internal_1a8dbdd1ec5d5a05b87a43d5b6d637e20aab95dca1921158a07d741266e2426a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        $__internal_df4ba09ea257affed24a1dc58ddfaae043f9ca8521dc29b38cbedfb066e3295a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df4ba09ea257affed24a1dc58ddfaae043f9ca8521dc29b38cbedfb066e3295a->enter($__internal_df4ba09ea257affed24a1dc58ddfaae043f9ca8521dc29b38cbedfb066e3295a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_1a8dbdd1ec5d5a05b87a43d5b6d637e20aab95dca1921158a07d741266e2426a->leave($__internal_1a8dbdd1ec5d5a05b87a43d5b6d637e20aab95dca1921158a07d741266e2426a_prof);

        
        $__internal_df4ba09ea257affed24a1dc58ddfaae043f9ca8521dc29b38cbedfb066e3295a->leave($__internal_df4ba09ea257affed24a1dc58ddfaae043f9ca8521dc29b38cbedfb066e3295a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
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
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}
