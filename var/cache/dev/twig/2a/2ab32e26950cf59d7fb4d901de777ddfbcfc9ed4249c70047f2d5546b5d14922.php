<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_5f270917a48f234e4fd9496ccf82bf7dea7e8dfaa2a11e2256bf27a95bd32720 extends Twig_Template
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
        $__internal_c067dceafd7a8ad1c949d4a0fe9701afdc21bd667d10641f4504e0ccd0f2bf52 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c067dceafd7a8ad1c949d4a0fe9701afdc21bd667d10641f4504e0ccd0f2bf52->enter($__internal_c067dceafd7a8ad1c949d4a0fe9701afdc21bd667d10641f4504e0ccd0f2bf52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_6f2c55d2a6e24e1d6fe6ca5baecafb54577be5623a2efa40a016fe9e0d8b72e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f2c55d2a6e24e1d6fe6ca5baecafb54577be5623a2efa40a016fe9e0d8b72e6->enter($__internal_6f2c55d2a6e24e1d6fe6ca5baecafb54577be5623a2efa40a016fe9e0d8b72e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_c067dceafd7a8ad1c949d4a0fe9701afdc21bd667d10641f4504e0ccd0f2bf52->leave($__internal_c067dceafd7a8ad1c949d4a0fe9701afdc21bd667d10641f4504e0ccd0f2bf52_prof);

        
        $__internal_6f2c55d2a6e24e1d6fe6ca5baecafb54577be5623a2efa40a016fe9e0d8b72e6->leave($__internal_6f2c55d2a6e24e1d6fe6ca5baecafb54577be5623a2efa40a016fe9e0d8b72e6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
