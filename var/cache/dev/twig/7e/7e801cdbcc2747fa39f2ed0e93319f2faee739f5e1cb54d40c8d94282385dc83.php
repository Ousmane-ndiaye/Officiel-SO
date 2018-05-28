<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_d8add65daa6b4b2b35f02ed7c4b0ab966cc0d9d0bcaa1ee841fb5270089c261e extends Twig_Template
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
        $__internal_a069d5648895628088eb680123c9a954df1a36dd74650278ea1e42ef411e6ebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a069d5648895628088eb680123c9a954df1a36dd74650278ea1e42ef411e6ebd->enter($__internal_a069d5648895628088eb680123c9a954df1a36dd74650278ea1e42ef411e6ebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_dd435c1aa75fcab2f1c083129c8f16de7d6df90616409af500dce151ac68284b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd435c1aa75fcab2f1c083129c8f16de7d6df90616409af500dce151ac68284b->enter($__internal_dd435c1aa75fcab2f1c083129c8f16de7d6df90616409af500dce151ac68284b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_a069d5648895628088eb680123c9a954df1a36dd74650278ea1e42ef411e6ebd->leave($__internal_a069d5648895628088eb680123c9a954df1a36dd74650278ea1e42ef411e6ebd_prof);

        
        $__internal_dd435c1aa75fcab2f1c083129c8f16de7d6df90616409af500dce151ac68284b->leave($__internal_dd435c1aa75fcab2f1c083129c8f16de7d6df90616409af500dce151ac68284b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_container_attributes.html.php");
    }
}
