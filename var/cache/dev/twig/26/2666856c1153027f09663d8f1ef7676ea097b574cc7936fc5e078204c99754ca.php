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
        $__internal_f35f1b2a3fa6e384f66e4d4f9ea1708a9707d6d0bc2b5e416d72689f8836037d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f35f1b2a3fa6e384f66e4d4f9ea1708a9707d6d0bc2b5e416d72689f8836037d->enter($__internal_f35f1b2a3fa6e384f66e4d4f9ea1708a9707d6d0bc2b5e416d72689f8836037d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_ca6fe530fb590fd3a74262e5bc16c6dd959ef35353f611d86e00d94a85cc0678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6fe530fb590fd3a74262e5bc16c6dd959ef35353f611d86e00d94a85cc0678->enter($__internal_ca6fe530fb590fd3a74262e5bc16c6dd959ef35353f611d86e00d94a85cc0678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_f35f1b2a3fa6e384f66e4d4f9ea1708a9707d6d0bc2b5e416d72689f8836037d->leave($__internal_f35f1b2a3fa6e384f66e4d4f9ea1708a9707d6d0bc2b5e416d72689f8836037d_prof);

        
        $__internal_ca6fe530fb590fd3a74262e5bc16c6dd959ef35353f611d86e00d94a85cc0678->leave($__internal_ca6fe530fb590fd3a74262e5bc16c6dd959ef35353f611d86e00d94a85cc0678_prof);

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
