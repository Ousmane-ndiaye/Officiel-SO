<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_811229ae714a98849d9f4e1c4dae9bb2a5342a12ffb1d8d2bd3935da346b2e9c extends Twig_Template
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
        $__internal_4cfdbaf0dc1eb62fdfa123c4d806dc1c457d8c6a4e7b1005cc14cbe345b0f5cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4cfdbaf0dc1eb62fdfa123c4d806dc1c457d8c6a4e7b1005cc14cbe345b0f5cf->enter($__internal_4cfdbaf0dc1eb62fdfa123c4d806dc1c457d8c6a4e7b1005cc14cbe345b0f5cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_2acd3e2b8345ca7a06cdc33f6174eca63d89070db5228f2019b1f7ee26e981ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2acd3e2b8345ca7a06cdc33f6174eca63d89070db5228f2019b1f7ee26e981ae->enter($__internal_2acd3e2b8345ca7a06cdc33f6174eca63d89070db5228f2019b1f7ee26e981ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_4cfdbaf0dc1eb62fdfa123c4d806dc1c457d8c6a4e7b1005cc14cbe345b0f5cf->leave($__internal_4cfdbaf0dc1eb62fdfa123c4d806dc1c457d8c6a4e7b1005cc14cbe345b0f5cf_prof);

        
        $__internal_2acd3e2b8345ca7a06cdc33f6174eca63d89070db5228f2019b1f7ee26e981ae->leave($__internal_2acd3e2b8345ca7a06cdc33f6174eca63d89070db5228f2019b1f7ee26e981ae_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/integer_widget.html.php");
    }
}
