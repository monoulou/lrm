<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_15e745d9c973813b724db5b5aaf3f8cc1fb317184344031a472fb835e5cb17ae extends Twig_Template
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
        $__internal_51d76b728782d2188c4b0420c1fc6ce1f28c8f6ec67151f6e4b83e31c729760a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51d76b728782d2188c4b0420c1fc6ce1f28c8f6ec67151f6e4b83e31c729760a->enter($__internal_51d76b728782d2188c4b0420c1fc6ce1f28c8f6ec67151f6e4b83e31c729760a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_5636b7c3062358190ee0ea2f0630234f69268cf35cd92db8e5ed631e1abd8845 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5636b7c3062358190ee0ea2f0630234f69268cf35cd92db8e5ed631e1abd8845->enter($__internal_5636b7c3062358190ee0ea2f0630234f69268cf35cd92db8e5ed631e1abd8845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_51d76b728782d2188c4b0420c1fc6ce1f28c8f6ec67151f6e4b83e31c729760a->leave($__internal_51d76b728782d2188c4b0420c1fc6ce1f28c8f6ec67151f6e4b83e31c729760a_prof);

        
        $__internal_5636b7c3062358190ee0ea2f0630234f69268cf35cd92db8e5ed631e1abd8845->leave($__internal_5636b7c3062358190ee0ea2f0630234f69268cf35cd92db8e5ed631e1abd8845_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\money_widget.html.php");
    }
}
