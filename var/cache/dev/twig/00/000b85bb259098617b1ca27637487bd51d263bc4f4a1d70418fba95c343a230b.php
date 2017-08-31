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
        $__internal_c226086a55b5342a5663cc5ac1bca50f9a52ee9e329c9e4c81e6b6e8ef88575d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c226086a55b5342a5663cc5ac1bca50f9a52ee9e329c9e4c81e6b6e8ef88575d->enter($__internal_c226086a55b5342a5663cc5ac1bca50f9a52ee9e329c9e4c81e6b6e8ef88575d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_8e6190a6a0681f9bdde33cdeda931bc9f2233fb270def12b0117817b3efef77b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6190a6a0681f9bdde33cdeda931bc9f2233fb270def12b0117817b3efef77b->enter($__internal_8e6190a6a0681f9bdde33cdeda931bc9f2233fb270def12b0117817b3efef77b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_c226086a55b5342a5663cc5ac1bca50f9a52ee9e329c9e4c81e6b6e8ef88575d->leave($__internal_c226086a55b5342a5663cc5ac1bca50f9a52ee9e329c9e4c81e6b6e8ef88575d_prof);

        
        $__internal_8e6190a6a0681f9bdde33cdeda931bc9f2233fb270def12b0117817b3efef77b->leave($__internal_8e6190a6a0681f9bdde33cdeda931bc9f2233fb270def12b0117817b3efef77b_prof);

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
