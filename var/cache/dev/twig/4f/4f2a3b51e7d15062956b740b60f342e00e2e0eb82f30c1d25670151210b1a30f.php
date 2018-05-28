<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_592e8f8412ccbe3048199d3164834fc70e57b6dab8d3604c10b287881c004b04 extends Twig_Template
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
        $__internal_6e71a08c915496ba1a1602002576c748070eb1c47440f8b1b3c559ebdefa7a2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e71a08c915496ba1a1602002576c748070eb1c47440f8b1b3c559ebdefa7a2b->enter($__internal_6e71a08c915496ba1a1602002576c748070eb1c47440f8b1b3c559ebdefa7a2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_9720a0d4c86ebcf6cde5cfafc08c8fe7fcfed01fc80cbac69cb782b2aa18b474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9720a0d4c86ebcf6cde5cfafc08c8fe7fcfed01fc80cbac69cb782b2aa18b474->enter($__internal_9720a0d4c86ebcf6cde5cfafc08c8fe7fcfed01fc80cbac69cb782b2aa18b474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_6e71a08c915496ba1a1602002576c748070eb1c47440f8b1b3c559ebdefa7a2b->leave($__internal_6e71a08c915496ba1a1602002576c748070eb1c47440f8b1b3c559ebdefa7a2b_prof);

        
        $__internal_9720a0d4c86ebcf6cde5cfafc08c8fe7fcfed01fc80cbac69cb782b2aa18b474->leave($__internal_9720a0d4c86ebcf6cde5cfafc08c8fe7fcfed01fc80cbac69cb782b2aa18b474_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
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
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}
