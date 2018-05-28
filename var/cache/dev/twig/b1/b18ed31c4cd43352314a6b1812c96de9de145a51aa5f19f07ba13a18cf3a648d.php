<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_468ee2cc33e31f153924ba199e5d4102e1d7f5e833b0e4a4e342cf053de75eef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_468ee2cc33e31f153924ba199e5d4102e1d7f5e833b0e4a4e342cf053de75eef->enter($__internal_468ee2cc33e31f153924ba199e5d4102e1d7f5e833b0e4a4e342cf053de75eef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2ef0d2310e6ff1f0a1310c573797d0f4619c2283d1e2005c91eb9b7fa2b85532 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef0d2310e6ff1f0a1310c573797d0f4619c2283d1e2005c91eb9b7fa2b85532->enter($__internal_2ef0d2310e6ff1f0a1310c573797d0f4619c2283d1e2005c91eb9b7fa2b85532_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_468ee2cc33e31f153924ba199e5d4102e1d7f5e833b0e4a4e342cf053de75eef->leave($__internal_468ee2cc33e31f153924ba199e5d4102e1d7f5e833b0e4a4e342cf053de75eef_prof);

        
        $__internal_2ef0d2310e6ff1f0a1310c573797d0f4619c2283d1e2005c91eb9b7fa2b85532->leave($__internal_2ef0d2310e6ff1f0a1310c573797d0f4619c2283d1e2005c91eb9b7fa2b85532_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
