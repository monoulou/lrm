<?php

/* @Framework/Form/percent_widget.html.php */
class __TwigTemplate_b11a637c84d86af9e8c82e99a762b40eb20c277dd5077b9aba8ab737e6c3a854 extends Twig_Template
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
        $__internal_b02be74c55d94be67269c83eae9ec4c07af55a9e45e221034b539010631e9e39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b02be74c55d94be67269c83eae9ec4c07af55a9e45e221034b539010631e9e39->enter($__internal_b02be74c55d94be67269c83eae9ec4c07af55a9e45e221034b539010631e9e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        $__internal_0e1a5d22fa65ce10a29f70dd637d0435d57e9433523a687c51e6356d39ffe307 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e1a5d22fa65ce10a29f70dd637d0435d57e9433523a687c51e6356d39ffe307->enter($__internal_0e1a5d22fa65ce10a29f70dd637d0435d57e9433523a687c51e6356d39ffe307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/percent_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
";
        
        $__internal_b02be74c55d94be67269c83eae9ec4c07af55a9e45e221034b539010631e9e39->leave($__internal_b02be74c55d94be67269c83eae9ec4c07af55a9e45e221034b539010631e9e39_prof);

        
        $__internal_0e1a5d22fa65ce10a29f70dd637d0435d57e9433523a687c51e6356d39ffe307->leave($__internal_0e1a5d22fa65ce10a29f70dd637d0435d57e9433523a687c51e6356d39ffe307_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/percent_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?> %
", "@Framework/Form/percent_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\percent_widget.html.php");
    }
}
