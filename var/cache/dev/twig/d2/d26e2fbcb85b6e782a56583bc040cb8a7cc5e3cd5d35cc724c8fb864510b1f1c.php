<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_2eed936553e46d4f6f4bfa9770f85249a23826259401105908a34c2ea3a239bc extends Twig_Template
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
        $__internal_9ea5a5886314763d255f2f528f983623c6944b1deee6c7f39dcee17fce852ae0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ea5a5886314763d255f2f528f983623c6944b1deee6c7f39dcee17fce852ae0->enter($__internal_9ea5a5886314763d255f2f528f983623c6944b1deee6c7f39dcee17fce852ae0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_a59a2243c3de76eaf8d3dd1abc7ccf187313e6d89c42f7bf26119919e6e01ec3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a59a2243c3de76eaf8d3dd1abc7ccf187313e6d89c42f7bf26119919e6e01ec3->enter($__internal_a59a2243c3de76eaf8d3dd1abc7ccf187313e6d89c42f7bf26119919e6e01ec3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_9ea5a5886314763d255f2f528f983623c6944b1deee6c7f39dcee17fce852ae0->leave($__internal_9ea5a5886314763d255f2f528f983623c6944b1deee6c7f39dcee17fce852ae0_prof);

        
        $__internal_a59a2243c3de76eaf8d3dd1abc7ccf187313e6d89c42f7bf26119919e6e01ec3->leave($__internal_a59a2243c3de76eaf8d3dd1abc7ccf187313e6d89c42f7bf26119919e6e01ec3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  28 => 2,  25 => 1,);
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
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}
