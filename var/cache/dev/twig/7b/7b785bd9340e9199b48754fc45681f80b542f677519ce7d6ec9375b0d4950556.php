<?php

/* @Framework/Form/email_widget.html.php */
class __TwigTemplate_964e8ad35f4cbf0d7dcd1b9d02a66645a5af639f97878953f462401a21938253 extends Twig_Template
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
        $__internal_baf7113c6a7f5d54d47720d064877cfee2592820cc8751d117c28071f873741b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_baf7113c6a7f5d54d47720d064877cfee2592820cc8751d117c28071f873741b->enter($__internal_baf7113c6a7f5d54d47720d064877cfee2592820cc8751d117c28071f873741b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        $__internal_131629021afb9d625ad5c2b3ba658c3127ef797869ed20bc2329c0c9e75f6dd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_131629021afb9d625ad5c2b3ba658c3127ef797869ed20bc2329c0c9e75f6dd5->enter($__internal_131629021afb9d625ad5c2b3ba658c3127ef797869ed20bc2329c0c9e75f6dd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/email_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
";
        
        $__internal_baf7113c6a7f5d54d47720d064877cfee2592820cc8751d117c28071f873741b->leave($__internal_baf7113c6a7f5d54d47720d064877cfee2592820cc8751d117c28071f873741b_prof);

        
        $__internal_131629021afb9d625ad5c2b3ba658c3127ef797869ed20bc2329c0c9e75f6dd5->leave($__internal_131629021afb9d625ad5c2b3ba658c3127ef797869ed20bc2329c0c9e75f6dd5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/email_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'email')) ?>
", "@Framework/Form/email_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/email_widget.html.php");
    }
}
