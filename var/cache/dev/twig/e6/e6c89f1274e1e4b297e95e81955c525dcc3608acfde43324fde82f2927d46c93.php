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
        $__internal_a087f84a67e06abc97f0988176331a60d64411115afaae43daa8e08266ea99e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a087f84a67e06abc97f0988176331a60d64411115afaae43daa8e08266ea99e8->enter($__internal_a087f84a67e06abc97f0988176331a60d64411115afaae43daa8e08266ea99e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_7e53081b5083e46c80331c7d961d034ed33524666560dbaadee4742daca16a1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e53081b5083e46c80331c7d961d034ed33524666560dbaadee4742daca16a1b->enter($__internal_7e53081b5083e46c80331c7d961d034ed33524666560dbaadee4742daca16a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

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
        
        $__internal_a087f84a67e06abc97f0988176331a60d64411115afaae43daa8e08266ea99e8->leave($__internal_a087f84a67e06abc97f0988176331a60d64411115afaae43daa8e08266ea99e8_prof);

        
        $__internal_7e53081b5083e46c80331c7d961d034ed33524666560dbaadee4742daca16a1b->leave($__internal_7e53081b5083e46c80331c7d961d034ed33524666560dbaadee4742daca16a1b_prof);

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
