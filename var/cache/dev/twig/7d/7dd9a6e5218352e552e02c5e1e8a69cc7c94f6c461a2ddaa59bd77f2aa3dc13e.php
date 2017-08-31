<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_6aed9fe7618ecc79544c9c957a81eb85639cb0d7edabea7c2662fc0a379ec73b extends Twig_Template
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
        $__internal_0a9a02d1f8e45ce707d061907514462e9e402f009844d0a6b768234c83e97e3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9a02d1f8e45ce707d061907514462e9e402f009844d0a6b768234c83e97e3e->enter($__internal_0a9a02d1f8e45ce707d061907514462e9e402f009844d0a6b768234c83e97e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_a5dfd498326e022119c12d21188f6e329e02c663d3ac9549d1b3a2572824fa0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a5dfd498326e022119c12d21188f6e329e02c663d3ac9549d1b3a2572824fa0d->enter($__internal_a5dfd498326e022119c12d21188f6e329e02c663d3ac9549d1b3a2572824fa0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_0a9a02d1f8e45ce707d061907514462e9e402f009844d0a6b768234c83e97e3e->leave($__internal_0a9a02d1f8e45ce707d061907514462e9e402f009844d0a6b768234c83e97e3e_prof);

        
        $__internal_a5dfd498326e022119c12d21188f6e329e02c663d3ac9549d1b3a2572824fa0d->leave($__internal_a5dfd498326e022119c12d21188f6e329e02c663d3ac9549d1b3a2572824fa0d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
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
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\checkbox_widget.html.php");
    }
}
