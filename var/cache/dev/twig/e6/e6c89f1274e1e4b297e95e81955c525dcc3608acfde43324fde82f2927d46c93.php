<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_db6b93687012918cd93b697164788daf1d3d5abbd7309e83c423244af1c82cff extends Twig_Template
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
        $__internal_d779bfa786a208e145801753f365f7ef5454b45c8ea68b3d800d02a2a3084e1e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d779bfa786a208e145801753f365f7ef5454b45c8ea68b3d800d02a2a3084e1e->enter($__internal_d779bfa786a208e145801753f365f7ef5454b45c8ea68b3d800d02a2a3084e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_3fd55fd6fd43f26b9adb44e2af2dfa198cb354f0728d598d0cc6581bb5ef1d16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fd55fd6fd43f26b9adb44e2af2dfa198cb354f0728d598d0cc6581bb5ef1d16->enter($__internal_3fd55fd6fd43f26b9adb44e2af2dfa198cb354f0728d598d0cc6581bb5ef1d16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_d779bfa786a208e145801753f365f7ef5454b45c8ea68b3d800d02a2a3084e1e->leave($__internal_d779bfa786a208e145801753f365f7ef5454b45c8ea68b3d800d02a2a3084e1e_prof);

        
        $__internal_3fd55fd6fd43f26b9adb44e2af2dfa198cb354f0728d598d0cc6581bb5ef1d16->leave($__internal_3fd55fd6fd43f26b9adb44e2af2dfa198cb354f0728d598d0cc6581bb5ef1d16_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}
