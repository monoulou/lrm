<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_aa04b0ce93a7e7ef9fe4bdab608a67a13fb0f1ab82c4653c36c2a13de7d6153c extends Twig_Template
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
        $__internal_0afe9a553d85901173f1fcd150ac245fe318f9214a720a2c24df94616de1cd63 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0afe9a553d85901173f1fcd150ac245fe318f9214a720a2c24df94616de1cd63->enter($__internal_0afe9a553d85901173f1fcd150ac245fe318f9214a720a2c24df94616de1cd63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        $__internal_f9935bed66cb9baa25e95cc806226be74f6eceb4c847dfadb322973005d8eb68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9935bed66cb9baa25e95cc806226be74f6eceb4c847dfadb322973005d8eb68->enter($__internal_f9935bed66cb9baa25e95cc806226be74f6eceb4c847dfadb322973005d8eb68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_0afe9a553d85901173f1fcd150ac245fe318f9214a720a2c24df94616de1cd63->leave($__internal_0afe9a553d85901173f1fcd150ac245fe318f9214a720a2c24df94616de1cd63_prof);

        
        $__internal_f9935bed66cb9baa25e95cc806226be74f6eceb4c847dfadb322973005d8eb68->leave($__internal_f9935bed66cb9baa25e95cc806226be74f6eceb4c847dfadb322973005d8eb68_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "@Twig/Exception/error.xml.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.xml.twig");
    }
}
