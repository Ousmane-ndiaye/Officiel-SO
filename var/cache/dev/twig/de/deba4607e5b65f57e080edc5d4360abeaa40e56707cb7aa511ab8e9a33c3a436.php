<?php

/* @Framework/Form/password_widget.html.php */
class __TwigTemplate_52c014fc3cd0c4635ced7b994c29f11953e244a0aa7f52e7a871d0d09cbbeebf extends Twig_Template
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
        $__internal_563c3c2b7b4dcd719d6deedaab21850187452ab7c94632ff553f17e75816da0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_563c3c2b7b4dcd719d6deedaab21850187452ab7c94632ff553f17e75816da0a->enter($__internal_563c3c2b7b4dcd719d6deedaab21850187452ab7c94632ff553f17e75816da0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        $__internal_7f496ef21fd3f53dd657dddc8bba546d3991f9a4c900e533db44504c2271d934 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f496ef21fd3f53dd657dddc8bba546d3991f9a4c900e533db44504c2271d934->enter($__internal_7f496ef21fd3f53dd657dddc8bba546d3991f9a4c900e533db44504c2271d934_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/password_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
";
        
        $__internal_563c3c2b7b4dcd719d6deedaab21850187452ab7c94632ff553f17e75816da0a->leave($__internal_563c3c2b7b4dcd719d6deedaab21850187452ab7c94632ff553f17e75816da0a_prof);

        
        $__internal_7f496ef21fd3f53dd657dddc8bba546d3991f9a4c900e533db44504c2271d934->leave($__internal_7f496ef21fd3f53dd657dddc8bba546d3991f9a4c900e533db44504c2271d934_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/password_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'password')) ?>
", "@Framework/Form/password_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/password_widget.html.php");
    }
}
