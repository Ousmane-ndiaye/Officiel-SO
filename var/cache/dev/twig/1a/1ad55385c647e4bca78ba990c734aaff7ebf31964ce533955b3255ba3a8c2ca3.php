<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_d12ab78149d447052d7b64077350a769e0815b98adb61091ebab51b2533f4685 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d12ab78149d447052d7b64077350a769e0815b98adb61091ebab51b2533f4685->enter($__internal_d12ab78149d447052d7b64077350a769e0815b98adb61091ebab51b2533f4685_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_765dc563e6d7af9f7d6c0f01269e839463efceadc9258de329ac1691a4c8720c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_765dc563e6d7af9f7d6c0f01269e839463efceadc9258de329ac1691a4c8720c->enter($__internal_765dc563e6d7af9f7d6c0f01269e839463efceadc9258de329ac1691a4c8720c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_d12ab78149d447052d7b64077350a769e0815b98adb61091ebab51b2533f4685->leave($__internal_d12ab78149d447052d7b64077350a769e0815b98adb61091ebab51b2533f4685_prof);

        
        $__internal_765dc563e6d7af9f7d6c0f01269e839463efceadc9258de329ac1691a4c8720c->leave($__internal_765dc563e6d7af9f7d6c0f01269e839463efceadc9258de329ac1691a4c8720c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
