<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_bdfd1c4a2548b0bc2df85e3006d69115de16c8c5de2d2d06d251f24510e3bc86 extends Twig_Template
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
        $__internal_c8bec13fecf526fb6ce3c54805a29cbd676c985de34466178793e7327808109e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8bec13fecf526fb6ce3c54805a29cbd676c985de34466178793e7327808109e->enter($__internal_c8bec13fecf526fb6ce3c54805a29cbd676c985de34466178793e7327808109e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_d3ec62c312f04ee96f6f1aa38709c75297e14f7cf9939d45236e29e838bbe288 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3ec62c312f04ee96f6f1aa38709c75297e14f7cf9939d45236e29e838bbe288->enter($__internal_d3ec62c312f04ee96f6f1aa38709c75297e14f7cf9939d45236e29e838bbe288_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_c8bec13fecf526fb6ce3c54805a29cbd676c985de34466178793e7327808109e->leave($__internal_c8bec13fecf526fb6ce3c54805a29cbd676c985de34466178793e7327808109e_prof);

        
        $__internal_d3ec62c312f04ee96f6f1aa38709c75297e14f7cf9939d45236e29e838bbe288->leave($__internal_d3ec62c312f04ee96f6f1aa38709c75297e14f7cf9939d45236e29e838bbe288_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
