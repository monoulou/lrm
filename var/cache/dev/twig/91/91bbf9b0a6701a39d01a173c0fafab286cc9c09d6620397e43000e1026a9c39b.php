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
        $__internal_60d0faa55010f262c1b95fbdfdf607acd17bf22a0049f78f0e3b11971cb6e767 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60d0faa55010f262c1b95fbdfdf607acd17bf22a0049f78f0e3b11971cb6e767->enter($__internal_60d0faa55010f262c1b95fbdfdf607acd17bf22a0049f78f0e3b11971cb6e767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_e5af99d99b0e27e3b8149cdfb8b3425c3222cf153122369768a956c66aa7afbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5af99d99b0e27e3b8149cdfb8b3425c3222cf153122369768a956c66aa7afbe->enter($__internal_e5af99d99b0e27e3b8149cdfb8b3425c3222cf153122369768a956c66aa7afbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_60d0faa55010f262c1b95fbdfdf607acd17bf22a0049f78f0e3b11971cb6e767->leave($__internal_60d0faa55010f262c1b95fbdfdf607acd17bf22a0049f78f0e3b11971cb6e767_prof);

        
        $__internal_e5af99d99b0e27e3b8149cdfb8b3425c3222cf153122369768a956c66aa7afbe->leave($__internal_e5af99d99b0e27e3b8149cdfb8b3425c3222cf153122369768a956c66aa7afbe_prof);

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
