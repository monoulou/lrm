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
        $__internal_64089b095c9e5ade1bee840cadb4d68a358aed478a160f073adf434a5a33607b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64089b095c9e5ade1bee840cadb4d68a358aed478a160f073adf434a5a33607b->enter($__internal_64089b095c9e5ade1bee840cadb4d68a358aed478a160f073adf434a5a33607b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        $__internal_ccea30bdfc58873bd3b9b05b3fc3730743ee335c1873b4d91e3b1efcd61b1362 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccea30bdfc58873bd3b9b05b3fc3730743ee335c1873b4d91e3b1efcd61b1362->enter($__internal_ccea30bdfc58873bd3b9b05b3fc3730743ee335c1873b4d91e3b1efcd61b1362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_64089b095c9e5ade1bee840cadb4d68a358aed478a160f073adf434a5a33607b->leave($__internal_64089b095c9e5ade1bee840cadb4d68a358aed478a160f073adf434a5a33607b_prof);

        
        $__internal_ccea30bdfc58873bd3b9b05b3fc3730743ee335c1873b4d91e3b1efcd61b1362->leave($__internal_ccea30bdfc58873bd3b9b05b3fc3730743ee335c1873b4d91e3b1efcd61b1362_prof);

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
