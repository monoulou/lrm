<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_7ad4830a338c6771600b8ba5ebf6da2c809b877ac9fc5466afee6fb0ed17df50 extends Twig_Template
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
        $__internal_16d18b881757f669ea08287f0db3f8f95ddf9ad321230b0ef9e204e1778095f3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_16d18b881757f669ea08287f0db3f8f95ddf9ad321230b0ef9e204e1778095f3->enter($__internal_16d18b881757f669ea08287f0db3f8f95ddf9ad321230b0ef9e204e1778095f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        $__internal_c10692c71372c20e63bba4fee60f4e4e7915e22bd612c9cbf33aa288e11044b3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c10692c71372c20e63bba4fee60f4e4e7915e22bd612c9cbf33aa288e11044b3->enter($__internal_c10692c71372c20e63bba4fee60f4e4e7915e22bd612c9cbf33aa288e11044b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.txt.twig"));

        // line 1
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()))) {
            // line 2
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.txt.twig", 3)->display(array("trace" => $context["trace"]));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        
        $__internal_16d18b881757f669ea08287f0db3f8f95ddf9ad321230b0ef9e204e1778095f3->leave($__internal_16d18b881757f669ea08287f0db3f8f95ddf9ad321230b0ef9e204e1778095f3_prof);

        
        $__internal_c10692c71372c20e63bba4fee60f4e4e7915e22bd612c9cbf33aa288e11044b3->leave($__internal_c10692c71372c20e63bba4fee60f4e4e7915e22bd612c9cbf33aa288e11044b3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 4,  31 => 3,  27 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if exception.trace|length %}
{% for trace in exception.trace %}
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

{% endfor %}
{% endif %}
", "TwigBundle:Exception:traces.txt.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.txt.twig");
    }
}
