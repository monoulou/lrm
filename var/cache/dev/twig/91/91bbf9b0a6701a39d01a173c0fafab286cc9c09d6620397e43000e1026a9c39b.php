<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_502145a6c9d464a24db3085d794d21df5ac1141bba010f56db26c21c45bb005c extends Twig_Template
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
        $__internal_a88089248f64e17bc30bff187a6f5b97af4d6d3a527147284d7802aeb3f5bac3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a88089248f64e17bc30bff187a6f5b97af4d6d3a527147284d7802aeb3f5bac3->enter($__internal_a88089248f64e17bc30bff187a6f5b97af4d6d3a527147284d7802aeb3f5bac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_0d1cec54bcae402b3300f5f938324f6690b161998962ecda335eef9c000ec94e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d1cec54bcae402b3300f5f938324f6690b161998962ecda335eef9c000ec94e->enter($__internal_0d1cec54bcae402b3300f5f938324f6690b161998962ecda335eef9c000ec94e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a88089248f64e17bc30bff187a6f5b97af4d6d3a527147284d7802aeb3f5bac3->leave($__internal_a88089248f64e17bc30bff187a6f5b97af4d6d3a527147284d7802aeb3f5bac3_prof);

        
        $__internal_0d1cec54bcae402b3300f5f938324f6690b161998962ecda335eef9c000ec94e->leave($__internal_0d1cec54bcae402b3300f5f938324f6690b161998962ecda335eef9c000ec94e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}
