<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_dde91e58019c47e54eaefbe1236fcd70cfeb4f728120e3b360dd999d43f6357b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dde91e58019c47e54eaefbe1236fcd70cfeb4f728120e3b360dd999d43f6357b->enter($__internal_dde91e58019c47e54eaefbe1236fcd70cfeb4f728120e3b360dd999d43f6357b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ea1ac22a42e6639a5bc87202c4db90ce4e63e4cd3b66a4c1454dc06fc89e2972 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea1ac22a42e6639a5bc87202c4db90ce4e63e4cd3b66a4c1454dc06fc89e2972->enter($__internal_ea1ac22a42e6639a5bc87202c4db90ce4e63e4cd3b66a4c1454dc06fc89e2972_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_dde91e58019c47e54eaefbe1236fcd70cfeb4f728120e3b360dd999d43f6357b->leave($__internal_dde91e58019c47e54eaefbe1236fcd70cfeb4f728120e3b360dd999d43f6357b_prof);

        
        $__internal_ea1ac22a42e6639a5bc87202c4db90ce4e63e4cd3b66a4c1454dc06fc89e2972->leave($__internal_ea1ac22a42e6639a5bc87202c4db90ce4e63e4cd3b66a4c1454dc06fc89e2972_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
