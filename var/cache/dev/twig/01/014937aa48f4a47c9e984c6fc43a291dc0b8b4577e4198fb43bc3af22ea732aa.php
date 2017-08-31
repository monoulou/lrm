<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_45c74ad9c352e0fe193ba114e407f0d1bbba4b3ec18b3092800f71e5f5db9fbf extends Twig_Template
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
        $__internal_c7cf4449e7ecd4821828ba8259e0b69e68f1629ec6f4ffbffb7bbcaee9456ec7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c7cf4449e7ecd4821828ba8259e0b69e68f1629ec6f4ffbffb7bbcaee9456ec7->enter($__internal_c7cf4449e7ecd4821828ba8259e0b69e68f1629ec6f4ffbffb7bbcaee9456ec7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_88611ba47268201e3cd649e690ca5bd24b36338f0af5166bf2aaa2a70a0ab573 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88611ba47268201e3cd649e690ca5bd24b36338f0af5166bf2aaa2a70a0ab573->enter($__internal_88611ba47268201e3cd649e690ca5bd24b36338f0af5166bf2aaa2a70a0ab573_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c7cf4449e7ecd4821828ba8259e0b69e68f1629ec6f4ffbffb7bbcaee9456ec7->leave($__internal_c7cf4449e7ecd4821828ba8259e0b69e68f1629ec6f4ffbffb7bbcaee9456ec7_prof);

        
        $__internal_88611ba47268201e3cd649e690ca5bd24b36338f0af5166bf2aaa2a70a0ab573->leave($__internal_88611ba47268201e3cd649e690ca5bd24b36338f0af5166bf2aaa2a70a0ab573_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
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
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "@Twig/Exception/exception.rdf.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.rdf.twig");
    }
}
