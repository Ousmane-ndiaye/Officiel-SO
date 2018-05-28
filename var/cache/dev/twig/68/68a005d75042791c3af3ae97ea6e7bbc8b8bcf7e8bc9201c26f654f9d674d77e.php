<?php

/* @Framework/Form/url_widget.html.php */
class __TwigTemplate_54d037e5162dfa915310efd058dc1aa6cbcf6bbba891aa6883f83f55c86cb241 extends Twig_Template
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
        $__internal_573f62851af2012bc1498e6c3ebe6cdd12b487341ac272a1f542839f99beae38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_573f62851af2012bc1498e6c3ebe6cdd12b487341ac272a1f542839f99beae38->enter($__internal_573f62851af2012bc1498e6c3ebe6cdd12b487341ac272a1f542839f99beae38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        $__internal_127be9b4ef276103cc3162761ab7d522930be1da856294c9670a59540769a3ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_127be9b4ef276103cc3162761ab7d522930be1da856294c9670a59540769a3ef->enter($__internal_127be9b4ef276103cc3162761ab7d522930be1da856294c9670a59540769a3ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/url_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
";
        
        $__internal_573f62851af2012bc1498e6c3ebe6cdd12b487341ac272a1f542839f99beae38->leave($__internal_573f62851af2012bc1498e6c3ebe6cdd12b487341ac272a1f542839f99beae38_prof);

        
        $__internal_127be9b4ef276103cc3162761ab7d522930be1da856294c9670a59540769a3ef->leave($__internal_127be9b4ef276103cc3162761ab7d522930be1da856294c9670a59540769a3ef_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/url_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'url')) ?>
", "@Framework/Form/url_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/url_widget.html.php");
    }
}
