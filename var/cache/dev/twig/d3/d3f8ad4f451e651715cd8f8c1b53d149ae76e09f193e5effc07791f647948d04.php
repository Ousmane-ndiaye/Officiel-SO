<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_0d01ed36e21851bac524f384cc8f7ff211e8b511d7ac93f6ced078a7a5cdb145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d01ed36e21851bac524f384cc8f7ff211e8b511d7ac93f6ced078a7a5cdb145->enter($__internal_0d01ed36e21851bac524f384cc8f7ff211e8b511d7ac93f6ced078a7a5cdb145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_d87191a8f8075d41b7ea97a7db33df3c50027d72b6031149bf28d4338c85d734 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d87191a8f8075d41b7ea97a7db33df3c50027d72b6031149bf28d4338c85d734->enter($__internal_d87191a8f8075d41b7ea97a7db33df3c50027d72b6031149bf28d4338c85d734_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_0d01ed36e21851bac524f384cc8f7ff211e8b511d7ac93f6ced078a7a5cdb145->leave($__internal_0d01ed36e21851bac524f384cc8f7ff211e8b511d7ac93f6ced078a7a5cdb145_prof);

        
        $__internal_d87191a8f8075d41b7ea97a7db33df3c50027d72b6031149bf28d4338c85d734->leave($__internal_d87191a8f8075d41b7ea97a7db33df3c50027d72b6031149bf28d4338c85d734_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
