<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_0113cc4c94bd1ac6ec36fdbd435c6207e37718e921bca34caf2f0edb6c69b0f0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0113cc4c94bd1ac6ec36fdbd435c6207e37718e921bca34caf2f0edb6c69b0f0->enter($__internal_0113cc4c94bd1ac6ec36fdbd435c6207e37718e921bca34caf2f0edb6c69b0f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_182ff3bf8ddade8b76045b0679c30408abc020b62fdcdc9ae32a8dbe86d68110 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_182ff3bf8ddade8b76045b0679c30408abc020b62fdcdc9ae32a8dbe86d68110->enter($__internal_182ff3bf8ddade8b76045b0679c30408abc020b62fdcdc9ae32a8dbe86d68110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0113cc4c94bd1ac6ec36fdbd435c6207e37718e921bca34caf2f0edb6c69b0f0->leave($__internal_0113cc4c94bd1ac6ec36fdbd435c6207e37718e921bca34caf2f0edb6c69b0f0_prof);

        
        $__internal_182ff3bf8ddade8b76045b0679c30408abc020b62fdcdc9ae32a8dbe86d68110->leave($__internal_182ff3bf8ddade8b76045b0679c30408abc020b62fdcdc9ae32a8dbe86d68110_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
