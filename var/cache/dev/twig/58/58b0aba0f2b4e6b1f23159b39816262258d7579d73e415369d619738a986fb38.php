<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_36ad9e7e8f14078c02ec478cec0b2ca9201c6ae985cb598b03c5191159e3899d extends Twig_Template
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
        $__internal_7476f8402beb0e1f062d5e2366f357a24480791e853b297bc0202b3b46aa7fe0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7476f8402beb0e1f062d5e2366f357a24480791e853b297bc0202b3b46aa7fe0->enter($__internal_7476f8402beb0e1f062d5e2366f357a24480791e853b297bc0202b3b46aa7fe0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_56c1f0beef7121c42d2240301278ceb3ed33d4284395b05d710a5348c5b75b6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_56c1f0beef7121c42d2240301278ceb3ed33d4284395b05d710a5348c5b75b6c->enter($__internal_56c1f0beef7121c42d2240301278ceb3ed33d4284395b05d710a5348c5b75b6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_7476f8402beb0e1f062d5e2366f357a24480791e853b297bc0202b3b46aa7fe0->leave($__internal_7476f8402beb0e1f062d5e2366f357a24480791e853b297bc0202b3b46aa7fe0_prof);

        
        $__internal_56c1f0beef7121c42d2240301278ceb3ed33d4284395b05d710a5348c5b75b6c->leave($__internal_56c1f0beef7121c42d2240301278ceb3ed33d4284395b05d710a5348c5b75b6c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
