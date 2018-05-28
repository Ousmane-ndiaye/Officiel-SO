<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_d610b6f7cbf271f814bc81037ab9817720676c898364090f3be1a24adc0fd1de extends Twig_Template
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
        $__internal_c8514f5c70b91367dbf4a6e0c40e8669cd8d70ec0bcfa20bbfc47f49366eed10 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c8514f5c70b91367dbf4a6e0c40e8669cd8d70ec0bcfa20bbfc47f49366eed10->enter($__internal_c8514f5c70b91367dbf4a6e0c40e8669cd8d70ec0bcfa20bbfc47f49366eed10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_12105c52ef6c1c34ff294d9d20ff9bb19b28285b3546351e6bb238cac7a75f98 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12105c52ef6c1c34ff294d9d20ff9bb19b28285b3546351e6bb238cac7a75f98->enter($__internal_12105c52ef6c1c34ff294d9d20ff9bb19b28285b3546351e6bb238cac7a75f98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_c8514f5c70b91367dbf4a6e0c40e8669cd8d70ec0bcfa20bbfc47f49366eed10->leave($__internal_c8514f5c70b91367dbf4a6e0c40e8669cd8d70ec0bcfa20bbfc47f49366eed10_prof);

        
        $__internal_12105c52ef6c1c34ff294d9d20ff9bb19b28285b3546351e6bb238cac7a75f98->leave($__internal_12105c52ef6c1c34ff294d9d20ff9bb19b28285b3546351e6bb238cac7a75f98_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
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
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}
