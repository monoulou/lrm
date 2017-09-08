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
        $__internal_08e852a8282436f04824ea0b5e749beb36617f6fb771012b730601f8ed493d46 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e852a8282436f04824ea0b5e749beb36617f6fb771012b730601f8ed493d46->enter($__internal_08e852a8282436f04824ea0b5e749beb36617f6fb771012b730601f8ed493d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_34c7d8c90986c9200b5ed5b93a5e2ca35658d5b6308e061dc2ffd9bb3f4e213b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34c7d8c90986c9200b5ed5b93a5e2ca35658d5b6308e061dc2ffd9bb3f4e213b->enter($__internal_34c7d8c90986c9200b5ed5b93a5e2ca35658d5b6308e061dc2ffd9bb3f4e213b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_08e852a8282436f04824ea0b5e749beb36617f6fb771012b730601f8ed493d46->leave($__internal_08e852a8282436f04824ea0b5e749beb36617f6fb771012b730601f8ed493d46_prof);

        
        $__internal_34c7d8c90986c9200b5ed5b93a5e2ca35658d5b6308e061dc2ffd9bb3f4e213b->leave($__internal_34c7d8c90986c9200b5ed5b93a5e2ca35658d5b6308e061dc2ffd9bb3f4e213b_prof);

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
