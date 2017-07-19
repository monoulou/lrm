<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_26693739b2c38f3b2e59d82887d47ec51421e0d3079600ea8417714b37c5321f extends Twig_Template
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
        $__internal_740d5c51ab6f15d69f303d50c51997c0e85f1c4f66d20527ee5386e96128fe3a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_740d5c51ab6f15d69f303d50c51997c0e85f1c4f66d20527ee5386e96128fe3a->enter($__internal_740d5c51ab6f15d69f303d50c51997c0e85f1c4f66d20527ee5386e96128fe3a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_ae570e044d8c2093f83d095d48a772d80840ca5eee9fc188bc1a5d91eff10f99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ae570e044d8c2093f83d095d48a772d80840ca5eee9fc188bc1a5d91eff10f99->enter($__internal_ae570e044d8c2093f83d095d48a772d80840ca5eee9fc188bc1a5d91eff10f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_740d5c51ab6f15d69f303d50c51997c0e85f1c4f66d20527ee5386e96128fe3a->leave($__internal_740d5c51ab6f15d69f303d50c51997c0e85f1c4f66d20527ee5386e96128fe3a_prof);

        
        $__internal_ae570e044d8c2093f83d095d48a772d80840ca5eee9fc188bc1a5d91eff10f99->leave($__internal_ae570e044d8c2093f83d095d48a772d80840ca5eee9fc188bc1a5d91eff10f99_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
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
", "TwigBundle:Exception:exception.css.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}
