<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_bde844aa2457d72e49c1412f1abaaacab5460b987041c62c8a485669be47b9e9 extends Twig_Template
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
        $__internal_69bc9c2e682ca09d38036e0d87fd3dd0ea466105ca49f8d0133794662bd4f923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69bc9c2e682ca09d38036e0d87fd3dd0ea466105ca49f8d0133794662bd4f923->enter($__internal_69bc9c2e682ca09d38036e0d87fd3dd0ea466105ca49f8d0133794662bd4f923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_265513005d7e7443674f80bc4aaa2e09b0edd69dfbde49e2981401d9dace6946 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265513005d7e7443674f80bc4aaa2e09b0edd69dfbde49e2981401d9dace6946->enter($__internal_265513005d7e7443674f80bc4aaa2e09b0edd69dfbde49e2981401d9dace6946_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_69bc9c2e682ca09d38036e0d87fd3dd0ea466105ca49f8d0133794662bd4f923->leave($__internal_69bc9c2e682ca09d38036e0d87fd3dd0ea466105ca49f8d0133794662bd4f923_prof);

        
        $__internal_265513005d7e7443674f80bc4aaa2e09b0edd69dfbde49e2981401d9dace6946->leave($__internal_265513005d7e7443674f80bc4aaa2e09b0edd69dfbde49e2981401d9dace6946_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/var/www/html/dossier-html/Projets/Personnel/senoffice/myoffice/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
