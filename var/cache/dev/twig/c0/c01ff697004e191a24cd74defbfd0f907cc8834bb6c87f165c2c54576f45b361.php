<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_d5c95b8338ff241273e1b0d3c1ba65a478045f9260e9f60dc0e2aa41c8ca0cd6 extends Twig_Template
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
        $__internal_757a40ea3e60d7dd7b594487754c7c9f03481349a0640d8126f0b42fc4484f8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_757a40ea3e60d7dd7b594487754c7c9f03481349a0640d8126f0b42fc4484f8f->enter($__internal_757a40ea3e60d7dd7b594487754c7c9f03481349a0640d8126f0b42fc4484f8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_0a4ea8063f91d05940b0571bfa4aa139c696d376d852d654e9b115b34673a2b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4ea8063f91d05940b0571bfa4aa139c696d376d852d654e9b115b34673a2b4->enter($__internal_0a4ea8063f91d05940b0571bfa4aa139c696d376d852d654e9b115b34673a2b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_757a40ea3e60d7dd7b594487754c7c9f03481349a0640d8126f0b42fc4484f8f->leave($__internal_757a40ea3e60d7dd7b594487754c7c9f03481349a0640d8126f0b42fc4484f8f_prof);

        
        $__internal_0a4ea8063f91d05940b0571bfa4aa139c696d376d852d654e9b115b34673a2b4->leave($__internal_0a4ea8063f91d05940b0571bfa4aa139c696d376d852d654e9b115b34673a2b4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
