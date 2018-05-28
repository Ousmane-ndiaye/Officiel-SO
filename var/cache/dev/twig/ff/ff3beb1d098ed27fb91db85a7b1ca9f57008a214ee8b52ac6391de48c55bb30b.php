<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_67417af1119ba75592b9b636a2f529736ea74d14ec1b5b1b7fe7bc4e8a3ecd85 extends Twig_Template
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
        $__internal_144d592dcf656fd97b189ae7fc15a99b0c135965ab3e440b12c992a23df2ecb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_144d592dcf656fd97b189ae7fc15a99b0c135965ab3e440b12c992a23df2ecb1->enter($__internal_144d592dcf656fd97b189ae7fc15a99b0c135965ab3e440b12c992a23df2ecb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_145185f53280a0577e81ae0e0f1bef8635b8445a9096f6d0e8a6d4e58dae4530 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_145185f53280a0577e81ae0e0f1bef8635b8445a9096f6d0e8a6d4e58dae4530->enter($__internal_145185f53280a0577e81ae0e0f1bef8635b8445a9096f6d0e8a6d4e58dae4530_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_144d592dcf656fd97b189ae7fc15a99b0c135965ab3e440b12c992a23df2ecb1->leave($__internal_144d592dcf656fd97b189ae7fc15a99b0c135965ab3e440b12c992a23df2ecb1_prof);

        
        $__internal_145185f53280a0577e81ae0e0f1bef8635b8445a9096f6d0e8a6d4e58dae4530->leave($__internal_145185f53280a0577e81ae0e0f1bef8635b8445a9096f6d0e8a6d4e58dae4530_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
