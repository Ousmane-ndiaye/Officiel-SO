<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_6c1891cfa0df1ad9c01e564727ba2e8328fa05bf37295d26f76c26e49bb91e73 extends Twig_Template
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
        $__internal_04c1abb77ccdd1ac6e75f3ba6eab7898afd3c379a74b161dd779ca24eb686f7f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04c1abb77ccdd1ac6e75f3ba6eab7898afd3c379a74b161dd779ca24eb686f7f->enter($__internal_04c1abb77ccdd1ac6e75f3ba6eab7898afd3c379a74b161dd779ca24eb686f7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_1919bf666f8da9128e7fb5075847506174a0ef02470ad213d08242a510680895 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1919bf666f8da9128e7fb5075847506174a0ef02470ad213d08242a510680895->enter($__internal_1919bf666f8da9128e7fb5075847506174a0ef02470ad213d08242a510680895_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_04c1abb77ccdd1ac6e75f3ba6eab7898afd3c379a74b161dd779ca24eb686f7f->leave($__internal_04c1abb77ccdd1ac6e75f3ba6eab7898afd3c379a74b161dd779ca24eb686f7f_prof);

        
        $__internal_1919bf666f8da9128e7fb5075847506174a0ef02470ad213d08242a510680895->leave($__internal_1919bf666f8da9128e7fb5075847506174a0ef02470ad213d08242a510680895_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
