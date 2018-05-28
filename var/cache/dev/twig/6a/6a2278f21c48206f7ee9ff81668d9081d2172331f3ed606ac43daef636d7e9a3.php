<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_2fdd86b8465b45123d347319dd57be56f069d7eae8acc99192f89bef72b5e2cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2fdd86b8465b45123d347319dd57be56f069d7eae8acc99192f89bef72b5e2cf->enter($__internal_2fdd86b8465b45123d347319dd57be56f069d7eae8acc99192f89bef72b5e2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_143adea69211b52eab26500bc24a9ee9acab3b78a94dae69b02f268f4f3b69a2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_143adea69211b52eab26500bc24a9ee9acab3b78a94dae69b02f268f4f3b69a2->enter($__internal_143adea69211b52eab26500bc24a9ee9acab3b78a94dae69b02f268f4f3b69a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_2fdd86b8465b45123d347319dd57be56f069d7eae8acc99192f89bef72b5e2cf->leave($__internal_2fdd86b8465b45123d347319dd57be56f069d7eae8acc99192f89bef72b5e2cf_prof);

        
        $__internal_143adea69211b52eab26500bc24a9ee9acab3b78a94dae69b02f268f4f3b69a2->leave($__internal_143adea69211b52eab26500bc24a9ee9acab3b78a94dae69b02f268f4f3b69a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
