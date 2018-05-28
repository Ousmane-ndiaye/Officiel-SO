<?php

/* @Framework/Form/button_row.html.php */
class __TwigTemplate_6e2cd8997458de8dcd3f435ed9c87348b1b76877eaeadbb74e1360f924f641f6 extends Twig_Template
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
        $__internal_cc8c12515b4bfadb4b1259faecda7f8266b61c6dbe8d60c8c7cceed76c6d6ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc8c12515b4bfadb4b1259faecda7f8266b61c6dbe8d60c8c7cceed76c6d6ebc->enter($__internal_cc8c12515b4bfadb4b1259faecda7f8266b61c6dbe8d60c8c7cceed76c6d6ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        $__internal_2a4794b720098eaf9ee4f9d3d1f0658aa375ea35c67c45c68c02d00beb969f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2a4794b720098eaf9ee4f9d3d1f0658aa375ea35c67c45c68c02d00beb969f80->enter($__internal_2a4794b720098eaf9ee4f9d3d1f0658aa375ea35c67c45c68c02d00beb969f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cc8c12515b4bfadb4b1259faecda7f8266b61c6dbe8d60c8c7cceed76c6d6ebc->leave($__internal_cc8c12515b4bfadb4b1259faecda7f8266b61c6dbe8d60c8c7cceed76c6d6ebc_prof);

        
        $__internal_2a4794b720098eaf9ee4f9d3d1f0658aa375ea35c67c45c68c02d00beb969f80->leave($__internal_2a4794b720098eaf9ee4f9d3d1f0658aa375ea35c67c45c68c02d00beb969f80_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_row.html.php";
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
        return new Twig_Source("<div>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/button_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/button_row.html.php");
    }
}
