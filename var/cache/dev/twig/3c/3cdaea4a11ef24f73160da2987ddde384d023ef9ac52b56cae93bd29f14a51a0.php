<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_36240d46c59f697a97fd7ad0c7c42d7db8160946714d65dbea52ff93455359ab extends Twig_Template
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
        $__internal_3c7ba63b2ef49805e81e86900bae7ca7b765171051d7f6e99dc5432b47cc431e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c7ba63b2ef49805e81e86900bae7ca7b765171051d7f6e99dc5432b47cc431e->enter($__internal_3c7ba63b2ef49805e81e86900bae7ca7b765171051d7f6e99dc5432b47cc431e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_aa15b3c2a40bb20f8c51ab81386e00145a8ae51a2828030bea0b0e0101be3037 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa15b3c2a40bb20f8c51ab81386e00145a8ae51a2828030bea0b0e0101be3037->enter($__internal_aa15b3c2a40bb20f8c51ab81386e00145a8ae51a2828030bea0b0e0101be3037_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_3c7ba63b2ef49805e81e86900bae7ca7b765171051d7f6e99dc5432b47cc431e->leave($__internal_3c7ba63b2ef49805e81e86900bae7ca7b765171051d7f6e99dc5432b47cc431e_prof);

        
        $__internal_aa15b3c2a40bb20f8c51ab81386e00145a8ae51a2828030bea0b0e0101be3037->leave($__internal_aa15b3c2a40bb20f8c51ab81386e00145a8ae51a2828030bea0b0e0101be3037_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/error.xml.twig' %}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
