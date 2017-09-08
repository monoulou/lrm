<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_5f7b4ce3807b074335ebc71512b746a50d38518c61bdefb62f64f2e205dca5f8 extends Twig_Template
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
        $__internal_57c3265b42d1daaab83641134528468e817814be911afc998e48c4a6bcb9cf18 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c3265b42d1daaab83641134528468e817814be911afc998e48c4a6bcb9cf18->enter($__internal_57c3265b42d1daaab83641134528468e817814be911afc998e48c4a6bcb9cf18_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_390fdc208cb101554c72b0842239a8dfdfb58e5324020d7b781208fd06292885 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_390fdc208cb101554c72b0842239a8dfdfb58e5324020d7b781208fd06292885->enter($__internal_390fdc208cb101554c72b0842239a8dfdfb58e5324020d7b781208fd06292885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_57c3265b42d1daaab83641134528468e817814be911afc998e48c4a6bcb9cf18->leave($__internal_57c3265b42d1daaab83641134528468e817814be911afc998e48c4a6bcb9cf18_prof);

        
        $__internal_390fdc208cb101554c72b0842239a8dfdfb58e5324020d7b781208fd06292885->leave($__internal_390fdc208cb101554c72b0842239a8dfdfb58e5324020d7b781208fd06292885_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
