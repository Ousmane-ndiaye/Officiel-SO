<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_72d2795269b48c1a2e47de39ec1384490077f581dbfa8a2ec31f1bc0f73a3e56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72d2795269b48c1a2e47de39ec1384490077f581dbfa8a2ec31f1bc0f73a3e56->enter($__internal_72d2795269b48c1a2e47de39ec1384490077f581dbfa8a2ec31f1bc0f73a3e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_e0c033ec28369c834f585d4a1bd733ad83a8cbbcfdd135ebc260482b4ad17502 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0c033ec28369c834f585d4a1bd733ad83a8cbbcfdd135ebc260482b4ad17502->enter($__internal_e0c033ec28369c834f585d4a1bd733ad83a8cbbcfdd135ebc260482b4ad17502_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_72d2795269b48c1a2e47de39ec1384490077f581dbfa8a2ec31f1bc0f73a3e56->leave($__internal_72d2795269b48c1a2e47de39ec1384490077f581dbfa8a2ec31f1bc0f73a3e56_prof);

        
        $__internal_e0c033ec28369c834f585d4a1bd733ad83a8cbbcfdd135ebc260482b4ad17502->leave($__internal_e0c033ec28369c834f585d4a1bd733ad83a8cbbcfdd135ebc260482b4ad17502_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
