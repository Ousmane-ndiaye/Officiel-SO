<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_bbb0aa1f805fd68f685c79c392f39261e47eb7f562a943d2e9ed1d80ab763973 extends Twig_Template
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
        $__internal_a07518fc621196051d8a94a0166e312b8124fbba7ccac6c463e957f77f6637f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a07518fc621196051d8a94a0166e312b8124fbba7ccac6c463e957f77f6637f6->enter($__internal_a07518fc621196051d8a94a0166e312b8124fbba7ccac6c463e957f77f6637f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        $__internal_ab280fd210552839f3de8bf4d9898c52106fa47c905ab36abaa250d029d1b30f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab280fd210552839f3de8bf4d9898c52106fa47c905ab36abaa250d029d1b30f->enter($__internal_ab280fd210552839f3de8bf4d9898c52106fa47c905ab36abaa250d029d1b30f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_a07518fc621196051d8a94a0166e312b8124fbba7ccac6c463e957f77f6637f6->leave($__internal_a07518fc621196051d8a94a0166e312b8124fbba7ccac6c463e957f77f6637f6_prof);

        
        $__internal_ab280fd210552839f3de8bf4d9898c52106fa47c905ab36abaa250d029d1b30f->leave($__internal_ab280fd210552839f3de8bf4d9898c52106fa47c905ab36abaa250d029d1b30f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}
