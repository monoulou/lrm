<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_9dc123c13a63e9fd9ec8e052d397a67c657a5317dd9536d15871dfa4d1ca23ae extends Twig_Template
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
        $__internal_28be372538d4e14599b561663b172d37dabb195691176b6ba0488d062574ef2b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28be372538d4e14599b561663b172d37dabb195691176b6ba0488d062574ef2b->enter($__internal_28be372538d4e14599b561663b172d37dabb195691176b6ba0488d062574ef2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_45263b03b7ab0a0383076fba222a9ac22b65b7235a584818c59f5fb8f9dde0ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_45263b03b7ab0a0383076fba222a9ac22b65b7235a584818c59f5fb8f9dde0ef->enter($__internal_45263b03b7ab0a0383076fba222a9ac22b65b7235a584818c59f5fb8f9dde0ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_28be372538d4e14599b561663b172d37dabb195691176b6ba0488d062574ef2b->leave($__internal_28be372538d4e14599b561663b172d37dabb195691176b6ba0488d062574ef2b_prof);

        
        $__internal_45263b03b7ab0a0383076fba222a9ac22b65b7235a584818c59f5fb8f9dde0ef->leave($__internal_45263b03b7ab0a0383076fba222a9ac22b65b7235a584818c59f5fb8f9dde0ef_prof);

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
", "@Framework/Form/choice_options.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_options.html.php");
    }
}
