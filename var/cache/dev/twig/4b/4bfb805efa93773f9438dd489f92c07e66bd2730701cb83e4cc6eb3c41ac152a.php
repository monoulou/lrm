<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_903d9d5422dbdddcab784029ea505821681cf97159c1ae32376447b5ad160038 extends Twig_Template
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
        $__internal_12b75de9a3e7c3ac4349134af61b05566a63eee591233c50b8968521f66958ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12b75de9a3e7c3ac4349134af61b05566a63eee591233c50b8968521f66958ac->enter($__internal_12b75de9a3e7c3ac4349134af61b05566a63eee591233c50b8968521f66958ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_ef119d0daa663c337894fc0a9fb231b26826655a3b6f4bcfb65fef3c457b87b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef119d0daa663c337894fc0a9fb231b26826655a3b6f4bcfb65fef3c457b87b0->enter($__internal_ef119d0daa663c337894fc0a9fb231b26826655a3b6f4bcfb65fef3c457b87b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_12b75de9a3e7c3ac4349134af61b05566a63eee591233c50b8968521f66958ac->leave($__internal_12b75de9a3e7c3ac4349134af61b05566a63eee591233c50b8968521f66958ac_prof);

        
        $__internal_ef119d0daa663c337894fc0a9fb231b26826655a3b6f4bcfb65fef3c457b87b0->leave($__internal_ef119d0daa663c337894fc0a9fb231b26826655a3b6f4bcfb65fef3c457b87b0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
