<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_71e7de65dc322f3baf9afdbd684d2d1da932942dc33f335d8588eb99db32a9d5 extends Twig_Template
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
        $__internal_4e7da5161e19d8d4beff14065e1867e986ef68e241f6a29affda3481afe4f0ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e7da5161e19d8d4beff14065e1867e986ef68e241f6a29affda3481afe4f0ec->enter($__internal_4e7da5161e19d8d4beff14065e1867e986ef68e241f6a29affda3481afe4f0ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_5d5aba009c1996dbc2655b9b0cb8029f279f4c85cc3991c8a4d35726673a743c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d5aba009c1996dbc2655b9b0cb8029f279f4c85cc3991c8a4d35726673a743c->enter($__internal_5d5aba009c1996dbc2655b9b0cb8029f279f4c85cc3991c8a4d35726673a743c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4e7da5161e19d8d4beff14065e1867e986ef68e241f6a29affda3481afe4f0ec->leave($__internal_4e7da5161e19d8d4beff14065e1867e986ef68e241f6a29affda3481afe4f0ec_prof);

        
        $__internal_5d5aba009c1996dbc2655b9b0cb8029f279f4c85cc3991c8a4d35726673a743c->leave($__internal_5d5aba009c1996dbc2655b9b0cb8029f279f4c85cc3991c8a4d35726673a743c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
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
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}
