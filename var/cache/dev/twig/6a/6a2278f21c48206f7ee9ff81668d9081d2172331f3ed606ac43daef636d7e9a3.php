<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_e890e2471bf63b9d90d0658ad6bb37d460be625522422327e9f6ddf2f41e11a0 extends Twig_Template
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
        $__internal_0f8112401461d17d3dd17ba04c790733eb84676d5d839205263e7772b7290f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f8112401461d17d3dd17ba04c790733eb84676d5d839205263e7772b7290f7d->enter($__internal_0f8112401461d17d3dd17ba04c790733eb84676d5d839205263e7772b7290f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_e742dfa593a592090dc5e235eaf78d8514471ec4f93c7075cf862d5cb35e7a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e742dfa593a592090dc5e235eaf78d8514471ec4f93c7075cf862d5cb35e7a71->enter($__internal_e742dfa593a592090dc5e235eaf78d8514471ec4f93c7075cf862d5cb35e7a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_0f8112401461d17d3dd17ba04c790733eb84676d5d839205263e7772b7290f7d->leave($__internal_0f8112401461d17d3dd17ba04c790733eb84676d5d839205263e7772b7290f7d_prof);

        
        $__internal_e742dfa593a592090dc5e235eaf78d8514471ec4f93c7075cf862d5cb35e7a71->leave($__internal_e742dfa593a592090dc5e235eaf78d8514471ec4f93c7075cf862d5cb35e7a71_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
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
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "/var/www/html/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_row.html.php");
    }
}
