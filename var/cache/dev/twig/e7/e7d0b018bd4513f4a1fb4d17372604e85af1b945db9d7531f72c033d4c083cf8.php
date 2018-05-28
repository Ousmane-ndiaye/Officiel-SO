<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_97c4d70817e1788976daff43e81004489669e905dad28ca2c6f45405f64c59c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_97c4d70817e1788976daff43e81004489669e905dad28ca2c6f45405f64c59c7->enter($__internal_97c4d70817e1788976daff43e81004489669e905dad28ca2c6f45405f64c59c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_a38c33f8b2cacc7a095bb3748f4239cf50537bbb7ca986252c7ec44f26a1cdec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a38c33f8b2cacc7a095bb3748f4239cf50537bbb7ca986252c7ec44f26a1cdec->enter($__internal_a38c33f8b2cacc7a095bb3748f4239cf50537bbb7ca986252c7ec44f26a1cdec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_97c4d70817e1788976daff43e81004489669e905dad28ca2c6f45405f64c59c7->leave($__internal_97c4d70817e1788976daff43e81004489669e905dad28ca2c6f45405f64c59c7_prof);

        
        $__internal_a38c33f8b2cacc7a095bb3748f4239cf50537bbb7ca986252c7ec44f26a1cdec->leave($__internal_a38c33f8b2cacc7a095bb3748f4239cf50537bbb7ca986252c7ec44f26a1cdec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
