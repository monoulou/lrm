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
        $__internal_c3e29ccb3a0255e4875fa7bc41d7ba2cb63b7e70cf765ca59dec434d65fa1ee2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3e29ccb3a0255e4875fa7bc41d7ba2cb63b7e70cf765ca59dec434d65fa1ee2->enter($__internal_c3e29ccb3a0255e4875fa7bc41d7ba2cb63b7e70cf765ca59dec434d65fa1ee2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_7735ffdb0522d72a6241176c247516ea4958f16bf3668b5d88c83db583b9edc2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7735ffdb0522d72a6241176c247516ea4958f16bf3668b5d88c83db583b9edc2->enter($__internal_7735ffdb0522d72a6241176c247516ea4958f16bf3668b5d88c83db583b9edc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_c3e29ccb3a0255e4875fa7bc41d7ba2cb63b7e70cf765ca59dec434d65fa1ee2->leave($__internal_c3e29ccb3a0255e4875fa7bc41d7ba2cb63b7e70cf765ca59dec434d65fa1ee2_prof);

        
        $__internal_7735ffdb0522d72a6241176c247516ea4958f16bf3668b5d88c83db583b9edc2->leave($__internal_7735ffdb0522d72a6241176c247516ea4958f16bf3668b5d88c83db583b9edc2_prof);

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
