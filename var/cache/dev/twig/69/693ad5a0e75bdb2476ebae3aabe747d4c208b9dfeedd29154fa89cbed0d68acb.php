<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_90e2448aff1aa35e9ef944d1881b6ae323b992990d36805cda6a6cff7a72d2e5 extends Twig_Template
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
        $__internal_cdd5f3ff6148ca329f71aef9a23cae3dc7792981f355b42b59134aca4dd8736c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdd5f3ff6148ca329f71aef9a23cae3dc7792981f355b42b59134aca4dd8736c->enter($__internal_cdd5f3ff6148ca329f71aef9a23cae3dc7792981f355b42b59134aca4dd8736c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_dd5c3aedf963b7943a5956efbd3a26121ef366e85cb18b246dcc27abafa47823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd5c3aedf963b7943a5956efbd3a26121ef366e85cb18b246dcc27abafa47823->enter($__internal_dd5c3aedf963b7943a5956efbd3a26121ef366e85cb18b246dcc27abafa47823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_cdd5f3ff6148ca329f71aef9a23cae3dc7792981f355b42b59134aca4dd8736c->leave($__internal_cdd5f3ff6148ca329f71aef9a23cae3dc7792981f355b42b59134aca4dd8736c_prof);

        
        $__internal_dd5c3aedf963b7943a5956efbd3a26121ef366e85cb18b246dcc27abafa47823->leave($__internal_dd5c3aedf963b7943a5956efbd3a26121ef366e85cb18b246dcc27abafa47823_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
", "TwigBundle:Exception:error.json.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/error.json.twig");
    }
}
