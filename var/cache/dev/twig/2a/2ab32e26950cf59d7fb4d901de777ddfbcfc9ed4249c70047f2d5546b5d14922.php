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
        $__internal_b7cb639bfa2e471b27680a6480945f15db4068e9b0c1837798c544f95117dddc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7cb639bfa2e471b27680a6480945f15db4068e9b0c1837798c544f95117dddc->enter($__internal_b7cb639bfa2e471b27680a6480945f15db4068e9b0c1837798c544f95117dddc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_4a6bdd0fcd184f5d22a22bd89e1eefbf8918f66c46b36567b896dd0c4690016d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a6bdd0fcd184f5d22a22bd89e1eefbf8918f66c46b36567b896dd0c4690016d->enter($__internal_4a6bdd0fcd184f5d22a22bd89e1eefbf8918f66c46b36567b896dd0c4690016d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_b7cb639bfa2e471b27680a6480945f15db4068e9b0c1837798c544f95117dddc->leave($__internal_b7cb639bfa2e471b27680a6480945f15db4068e9b0c1837798c544f95117dddc_prof);

        
        $__internal_4a6bdd0fcd184f5d22a22bd89e1eefbf8918f66c46b36567b896dd0c4690016d->leave($__internal_4a6bdd0fcd184f5d22a22bd89e1eefbf8918f66c46b36567b896dd0c4690016d_prof);

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
", "@Framework/Form/number_widget.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
