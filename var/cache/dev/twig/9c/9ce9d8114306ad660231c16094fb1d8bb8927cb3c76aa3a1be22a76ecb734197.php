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
        $__internal_5c25e5c29f6ed5668bc075ab75942bef58b3612bda154a916a8f15fe338788f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c25e5c29f6ed5668bc075ab75942bef58b3612bda154a916a8f15fe338788f5->enter($__internal_5c25e5c29f6ed5668bc075ab75942bef58b3612bda154a916a8f15fe338788f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_a1579679bdffa58ccbf2fd0234379789af4f9f1db39b8047eee95c5e737b3b5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1579679bdffa58ccbf2fd0234379789af4f9f1db39b8047eee95c5e737b3b5c->enter($__internal_a1579679bdffa58ccbf2fd0234379789af4f9f1db39b8047eee95c5e737b3b5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_5c25e5c29f6ed5668bc075ab75942bef58b3612bda154a916a8f15fe338788f5->leave($__internal_5c25e5c29f6ed5668bc075ab75942bef58b3612bda154a916a8f15fe338788f5_prof);

        
        $__internal_a1579679bdffa58ccbf2fd0234379789af4f9f1db39b8047eee95c5e737b3b5c->leave($__internal_a1579679bdffa58ccbf2fd0234379789af4f9f1db39b8047eee95c5e737b3b5c_prof);

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
", "@Framework/Form/form_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget.html.php");
    }
}
