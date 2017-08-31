<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_bbaaf57b86424dca22207dc4551543d2acf3c3b3230b80139466ae7062fe2ebe extends Twig_Template
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
        $__internal_f3597996a7699e3908c12e0b941e430637278947993a737143d9adb3710cf63c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f3597996a7699e3908c12e0b941e430637278947993a737143d9adb3710cf63c->enter($__internal_f3597996a7699e3908c12e0b941e430637278947993a737143d9adb3710cf63c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_df62eac7672279000f097ec6c36168648bb42fd2b8902ad059fcee7478235eba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df62eac7672279000f097ec6c36168648bb42fd2b8902ad059fcee7478235eba->enter($__internal_df62eac7672279000f097ec6c36168648bb42fd2b8902ad059fcee7478235eba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_f3597996a7699e3908c12e0b941e430637278947993a737143d9adb3710cf63c->leave($__internal_f3597996a7699e3908c12e0b941e430637278947993a737143d9adb3710cf63c_prof);

        
        $__internal_df62eac7672279000f097ec6c36168648bb42fd2b8902ad059fcee7478235eba->leave($__internal_df62eac7672279000f097ec6c36168648bb42fd2b8902ad059fcee7478235eba_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
