<?php

/* @Framework/Form/submit_widget.html.php */
class __TwigTemplate_229013a302df9d17dc51ed91f2085062b20b3dea64486f8ce4981a3dd907fd31 extends Twig_Template
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
        $__internal_368dc3d074656fb408ab1ee490f45cb981e1ac9c6277353bf3bf98dc80a1a179 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_368dc3d074656fb408ab1ee490f45cb981e1ac9c6277353bf3bf98dc80a1a179->enter($__internal_368dc3d074656fb408ab1ee490f45cb981e1ac9c6277353bf3bf98dc80a1a179_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        $__internal_662834d052fb91b136af03b89245329b1bdf0c4bf1b0ba01e4a0e2841c9443df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_662834d052fb91b136af03b89245329b1bdf0c4bf1b0ba01e4a0e2841c9443df->enter($__internal_662834d052fb91b136af03b89245329b1bdf0c4bf1b0ba01e4a0e2841c9443df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/submit_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
";
        
        $__internal_368dc3d074656fb408ab1ee490f45cb981e1ac9c6277353bf3bf98dc80a1a179->leave($__internal_368dc3d074656fb408ab1ee490f45cb981e1ac9c6277353bf3bf98dc80a1a179_prof);

        
        $__internal_662834d052fb91b136af03b89245329b1bdf0c4bf1b0ba01e4a0e2841c9443df->leave($__internal_662834d052fb91b136af03b89245329b1bdf0c4bf1b0ba01e4a0e2841c9443df_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/submit_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'submit')) ?>
", "@Framework/Form/submit_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/submit_widget.html.php");
    }
}
