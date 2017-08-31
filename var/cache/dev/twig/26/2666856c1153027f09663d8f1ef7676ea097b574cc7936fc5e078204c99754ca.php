<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_7b10333c7b5d2abfff740e323177679a5cbe5a7d3053a98cfd1a3babfe986082 extends Twig_Template
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
        $__internal_151838c2c93cfee23ed61a16ff0e9a01c0dc0f3ae03cf3350c51ea9857ca74cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_151838c2c93cfee23ed61a16ff0e9a01c0dc0f3ae03cf3350c51ea9857ca74cb->enter($__internal_151838c2c93cfee23ed61a16ff0e9a01c0dc0f3ae03cf3350c51ea9857ca74cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_11183cc728ed702460bb7bbb5f98ad280e91136419b5cc294387cc9629769753 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11183cc728ed702460bb7bbb5f98ad280e91136419b5cc294387cc9629769753->enter($__internal_11183cc728ed702460bb7bbb5f98ad280e91136419b5cc294387cc9629769753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_151838c2c93cfee23ed61a16ff0e9a01c0dc0f3ae03cf3350c51ea9857ca74cb->leave($__internal_151838c2c93cfee23ed61a16ff0e9a01c0dc0f3ae03cf3350c51ea9857ca74cb_prof);

        
        $__internal_11183cc728ed702460bb7bbb5f98ad280e91136419b5cc294387cc9629769753->leave($__internal_11183cc728ed702460bb7bbb5f98ad280e91136419b5cc294387cc9629769753_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
", "TwigBundle:Exception:exception.json.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}
