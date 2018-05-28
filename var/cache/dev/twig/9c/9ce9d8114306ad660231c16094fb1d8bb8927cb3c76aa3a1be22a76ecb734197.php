<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_2f2e5890ceb5219354dfa04e1836adfa25b0acab71c7ad33dcab7a774e484068 extends Twig_Template
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
        $__internal_d3ec74a18d7ba085c0120590bc778ccec036edccc3ec6e9f660ec224a5811af7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d3ec74a18d7ba085c0120590bc778ccec036edccc3ec6e9f660ec224a5811af7->enter($__internal_d3ec74a18d7ba085c0120590bc778ccec036edccc3ec6e9f660ec224a5811af7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5dd6f44411558704b06a04f1e77363f8583b4141e11e92b9203abcca12278d1f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5dd6f44411558704b06a04f1e77363f8583b4141e11e92b9203abcca12278d1f->enter($__internal_5dd6f44411558704b06a04f1e77363f8583b4141e11e92b9203abcca12278d1f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_d3ec74a18d7ba085c0120590bc778ccec036edccc3ec6e9f660ec224a5811af7->leave($__internal_d3ec74a18d7ba085c0120590bc778ccec036edccc3ec6e9f660ec224a5811af7_prof);

        
        $__internal_5dd6f44411558704b06a04f1e77363f8583b4141e11e92b9203abcca12278d1f->leave($__internal_5dd6f44411558704b06a04f1e77363f8583b4141e11e92b9203abcca12278d1f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
