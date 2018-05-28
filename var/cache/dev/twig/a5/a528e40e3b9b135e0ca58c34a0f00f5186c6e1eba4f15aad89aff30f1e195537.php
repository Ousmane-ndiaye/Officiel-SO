<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_b568a4e5ad5ee8f8a71ee37d960e4e2d9c0e55ce8af49f736810b4afd8eae854 extends Twig_Template
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
        $__internal_b08ee4d46778aea68cebd1e1aa6956edca89f14e3f895aebb154a6de1a871b5a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b08ee4d46778aea68cebd1e1aa6956edca89f14e3f895aebb154a6de1a871b5a->enter($__internal_b08ee4d46778aea68cebd1e1aa6956edca89f14e3f895aebb154a6de1a871b5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d099b090a437a4ea7f47e9607d21ae0c8891df309965682c8da8d3d7328125c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d099b090a437a4ea7f47e9607d21ae0c8891df309965682c8da8d3d7328125c5->enter($__internal_d099b090a437a4ea7f47e9607d21ae0c8891df309965682c8da8d3d7328125c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_b08ee4d46778aea68cebd1e1aa6956edca89f14e3f895aebb154a6de1a871b5a->leave($__internal_b08ee4d46778aea68cebd1e1aa6956edca89f14e3f895aebb154a6de1a871b5a_prof);

        
        $__internal_d099b090a437a4ea7f47e9607d21ae0c8891df309965682c8da8d3d7328125c5->leave($__internal_d099b090a437a4ea7f47e9607d21ae0c8891df309965682c8da8d3d7328125c5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}
