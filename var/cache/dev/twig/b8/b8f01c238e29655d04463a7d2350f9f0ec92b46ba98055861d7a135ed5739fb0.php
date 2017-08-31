<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_09fe1b9ab03fd54edfb0782d48c6c23a7c18031226febb23c9122ca2684d37e5 extends Twig_Template
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
        $__internal_8644460efe701ac7e3756b70bfe963c58b73aefd15903e3a49453b7edd2d5145 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8644460efe701ac7e3756b70bfe963c58b73aefd15903e3a49453b7edd2d5145->enter($__internal_8644460efe701ac7e3756b70bfe963c58b73aefd15903e3a49453b7edd2d5145_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_db1d7dd005185ba4beef91fbda9bbe774d5f5b04dac3cb867e951905d85a8df8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_db1d7dd005185ba4beef91fbda9bbe774d5f5b04dac3cb867e951905d85a8df8->enter($__internal_db1d7dd005185ba4beef91fbda9bbe774d5f5b04dac3cb867e951905d85a8df8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_8644460efe701ac7e3756b70bfe963c58b73aefd15903e3a49453b7edd2d5145->leave($__internal_8644460efe701ac7e3756b70bfe963c58b73aefd15903e3a49453b7edd2d5145_prof);

        
        $__internal_db1d7dd005185ba4beef91fbda9bbe774d5f5b04dac3cb867e951905d85a8df8->leave($__internal_db1d7dd005185ba4beef91fbda9bbe774d5f5b04dac3cb867e951905d85a8df8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
