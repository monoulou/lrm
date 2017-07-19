<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_782cbbaf9d8c0bc8a56e5104a4a0e48c306ef66369d6cd89cea424af1d951af5 extends Twig_Template
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
        $__internal_8da62fbd1a3c81b7f2a2f80f31c50ace88cafb7aa9e5988c55326f7d66547df9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da62fbd1a3c81b7f2a2f80f31c50ace88cafb7aa9e5988c55326f7d66547df9->enter($__internal_8da62fbd1a3c81b7f2a2f80f31c50ace88cafb7aa9e5988c55326f7d66547df9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_610faab4a007b957bab90f90802052f16a398bdd5692de273203378f915104ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_610faab4a007b957bab90f90802052f16a398bdd5692de273203378f915104ba->enter($__internal_610faab4a007b957bab90f90802052f16a398bdd5692de273203378f915104ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_8da62fbd1a3c81b7f2a2f80f31c50ace88cafb7aa9e5988c55326f7d66547df9->leave($__internal_8da62fbd1a3c81b7f2a2f80f31c50ace88cafb7aa9e5988c55326f7d66547df9_prof);

        
        $__internal_610faab4a007b957bab90f90802052f16a398bdd5692de273203378f915104ba->leave($__internal_610faab4a007b957bab90f90802052f16a398bdd5692de273203378f915104ba_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}
