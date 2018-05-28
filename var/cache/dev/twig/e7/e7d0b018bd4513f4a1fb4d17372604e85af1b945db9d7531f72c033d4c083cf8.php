<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a673ceafd720c665011418fe4d7e17959c129a9bfa99d999ab0acaad0fb16271 extends Twig_Template
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
        $__internal_745eda437cbd2685872f06cf4dad5adba354aba64523d19adaf73083aee82b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_745eda437cbd2685872f06cf4dad5adba354aba64523d19adaf73083aee82b0f->enter($__internal_745eda437cbd2685872f06cf4dad5adba354aba64523d19adaf73083aee82b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_207a78e911a3e30ffd8dcd6feea22831d3ceca9542da41ee5ca11a04b9195d03 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_207a78e911a3e30ffd8dcd6feea22831d3ceca9542da41ee5ca11a04b9195d03->enter($__internal_207a78e911a3e30ffd8dcd6feea22831d3ceca9542da41ee5ca11a04b9195d03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_745eda437cbd2685872f06cf4dad5adba354aba64523d19adaf73083aee82b0f->leave($__internal_745eda437cbd2685872f06cf4dad5adba354aba64523d19adaf73083aee82b0f_prof);

        
        $__internal_207a78e911a3e30ffd8dcd6feea22831d3ceca9542da41ee5ca11a04b9195d03->leave($__internal_207a78e911a3e30ffd8dcd6feea22831d3ceca9542da41ee5ca11a04b9195d03_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}
