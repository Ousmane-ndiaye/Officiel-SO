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
        $__internal_3c4a7a61fbfd8155889e5eac504e70e78a026e5f97560240084e77681a82f0ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c4a7a61fbfd8155889e5eac504e70e78a026e5f97560240084e77681a82f0ad->enter($__internal_3c4a7a61fbfd8155889e5eac504e70e78a026e5f97560240084e77681a82f0ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_8aa807f9825299a240ab0139d2337665e0aaca9acd131f853994bf0ce35bf7c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aa807f9825299a240ab0139d2337665e0aaca9acd131f853994bf0ce35bf7c1->enter($__internal_8aa807f9825299a240ab0139d2337665e0aaca9acd131f853994bf0ce35bf7c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, ($context["widget"] ?? $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_3c4a7a61fbfd8155889e5eac504e70e78a026e5f97560240084e77681a82f0ad->leave($__internal_3c4a7a61fbfd8155889e5eac504e70e78a026e5f97560240084e77681a82f0ad_prof);

        
        $__internal_8aa807f9825299a240ab0139d2337665e0aaca9acd131f853994bf0ce35bf7c1->leave($__internal_8aa807f9825299a240ab0139d2337665e0aaca9acd131f853994bf0ce35bf7c1_prof);

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
", "@Framework/Form/money_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}
