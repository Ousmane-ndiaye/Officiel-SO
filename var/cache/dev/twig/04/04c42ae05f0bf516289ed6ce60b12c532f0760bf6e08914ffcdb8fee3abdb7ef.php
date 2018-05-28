<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_ff2814c4535e25ff5cc9ea8737fa8de347b740af97908b15085b3dd34d2f999a extends Twig_Template
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
        $__internal_085981f8339b914ee77e945d9423b1e75c64d4557485a08ffe823fa5d1aa82c3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085981f8339b914ee77e945d9423b1e75c64d4557485a08ffe823fa5d1aa82c3->enter($__internal_085981f8339b914ee77e945d9423b1e75c64d4557485a08ffe823fa5d1aa82c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_77b06b3b22092d79c16f01f89b07e729ee7e6a3e221d35c56705bda5f2cba2c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77b06b3b22092d79c16f01f89b07e729ee7e6a3e221d35c56705bda5f2cba2c1->enter($__internal_77b06b3b22092d79c16f01f89b07e729ee7e6a3e221d35c56705bda5f2cba2c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_085981f8339b914ee77e945d9423b1e75c64d4557485a08ffe823fa5d1aa82c3->leave($__internal_085981f8339b914ee77e945d9423b1e75c64d4557485a08ffe823fa5d1aa82c3_prof);

        
        $__internal_77b06b3b22092d79c16f01f89b07e729ee7e6a3e221d35c56705bda5f2cba2c1->leave($__internal_77b06b3b22092d79c16f01f89b07e729ee7e6a3e221d35c56705bda5f2cba2c1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
