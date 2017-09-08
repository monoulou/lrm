<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_2066239b004edc309178a88e6d305655aaebd8382c1a37d287d358e34b1943ef extends Twig_Template
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
        $__internal_071b84e1b9584f4d4808311ee5689828459dc0e9c8bcf8581ec51dd9dd1b739c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_071b84e1b9584f4d4808311ee5689828459dc0e9c8bcf8581ec51dd9dd1b739c->enter($__internal_071b84e1b9584f4d4808311ee5689828459dc0e9c8bcf8581ec51dd9dd1b739c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_8aaec70879fa9d29ea7d8b81176a8a1f7e33f3dec5eefa1d332cd5cb6da8b2bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aaec70879fa9d29ea7d8b81176a8a1f7e33f3dec5eefa1d332cd5cb6da8b2bd->enter($__internal_8aaec70879fa9d29ea7d8b81176a8a1f7e33f3dec5eefa1d332cd5cb6da8b2bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_071b84e1b9584f4d4808311ee5689828459dc0e9c8bcf8581ec51dd9dd1b739c->leave($__internal_071b84e1b9584f4d4808311ee5689828459dc0e9c8bcf8581ec51dd9dd1b739c_prof);

        
        $__internal_8aaec70879fa9d29ea7d8b81176a8a1f7e33f3dec5eefa1d332cd5cb6da8b2bd->leave($__internal_8aaec70879fa9d29ea7d8b81176a8a1f7e33f3dec5eefa1d332cd5cb6da8b2bd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
