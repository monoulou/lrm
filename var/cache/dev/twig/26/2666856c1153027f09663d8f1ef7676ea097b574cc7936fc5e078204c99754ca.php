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
        $__internal_79396ffb82b3509b3e5e27f13411a1e0672b7fbff8e50fb91d5f14476d02b814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79396ffb82b3509b3e5e27f13411a1e0672b7fbff8e50fb91d5f14476d02b814->enter($__internal_79396ffb82b3509b3e5e27f13411a1e0672b7fbff8e50fb91d5f14476d02b814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3fee61177893f6318eef606adddd4243044e9cbc29d892f87fcfe0c594fb4b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fee61177893f6318eef606adddd4243044e9cbc29d892f87fcfe0c594fb4b5d->enter($__internal_3fee61177893f6318eef606adddd4243044e9cbc29d892f87fcfe0c594fb4b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_79396ffb82b3509b3e5e27f13411a1e0672b7fbff8e50fb91d5f14476d02b814->leave($__internal_79396ffb82b3509b3e5e27f13411a1e0672b7fbff8e50fb91d5f14476d02b814_prof);

        
        $__internal_3fee61177893f6318eef606adddd4243044e9cbc29d892f87fcfe0c594fb4b5d->leave($__internal_3fee61177893f6318eef606adddd4243044e9cbc29d892f87fcfe0c594fb4b5d_prof);

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
