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
        $__internal_8e859de3c84b97caf50a3e96a20beb779ea145941cca4274340b62432cc286c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e859de3c84b97caf50a3e96a20beb779ea145941cca4274340b62432cc286c1->enter($__internal_8e859de3c84b97caf50a3e96a20beb779ea145941cca4274340b62432cc286c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        $__internal_42ca47771cc7292e86e2ae9ff486828fa50429e4198ee2be76d798a2db6f8aa3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42ca47771cc7292e86e2ae9ff486828fa50429e4198ee2be76d798a2db6f8aa3->enter($__internal_42ca47771cc7292e86e2ae9ff486828fa50429e4198ee2be76d798a2db6f8aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_8e859de3c84b97caf50a3e96a20beb779ea145941cca4274340b62432cc286c1->leave($__internal_8e859de3c84b97caf50a3e96a20beb779ea145941cca4274340b62432cc286c1_prof);

        
        $__internal_42ca47771cc7292e86e2ae9ff486828fa50429e4198ee2be76d798a2db6f8aa3->leave($__internal_42ca47771cc7292e86e2ae9ff486828fa50429e4198ee2be76d798a2db6f8aa3_prof);

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
