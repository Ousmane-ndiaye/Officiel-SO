<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_426715d15a10e67499cb0f79af6dc60ac848ad426fa8e22c415a951118105d86 extends Twig_Template
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
        $__internal_0422a7485b7ae061117563ae955327d057e69f30b52d158d21d08cbc4d993fd1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0422a7485b7ae061117563ae955327d057e69f30b52d158d21d08cbc4d993fd1->enter($__internal_0422a7485b7ae061117563ae955327d057e69f30b52d158d21d08cbc4d993fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_89c881655b42ef4238dc5ebea238ad5955694df21b26cb745b07d3059e1cd82f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89c881655b42ef4238dc5ebea238ad5955694df21b26cb745b07d3059e1cd82f->enter($__internal_89c881655b42ef4238dc5ebea238ad5955694df21b26cb745b07d3059e1cd82f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_0422a7485b7ae061117563ae955327d057e69f30b52d158d21d08cbc4d993fd1->leave($__internal_0422a7485b7ae061117563ae955327d057e69f30b52d158d21d08cbc4d993fd1_prof);

        
        $__internal_89c881655b42ef4238dc5ebea238ad5955694df21b26cb745b07d3059e1cd82f->leave($__internal_89c881655b42ef4238dc5ebea238ad5955694df21b26cb745b07d3059e1cd82f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
