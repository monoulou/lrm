<?php

/* TwigBundle:Exception:traces.xml.twig */
class __TwigTemplate_ea73b8bc40b78b653f706aedfa55ce7c9647ea4dcbc60dbe6cac4483125bf624 extends Twig_Template
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
        $__internal_3cff96fff8a1e77fa24339e61fecbef6c02aaae3d9aaacfe02270b518b5adc42 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3cff96fff8a1e77fa24339e61fecbef6c02aaae3d9aaacfe02270b518b5adc42->enter($__internal_3cff96fff8a1e77fa24339e61fecbef6c02aaae3d9aaacfe02270b518b5adc42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        $__internal_98731e287a7b9254bc25b4801d26b4073a77724d12f1d9d04a3eb9321f2682f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98731e287a7b9254bc25b4801d26b4073a77724d12f1d9d04a3eb9321f2682f7->enter($__internal_98731e287a7b9254bc25b4801d26b4073a77724d12f1d9d04a3eb9321f2682f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:traces.xml.twig"));

        // line 1
        echo "        <traces>
";
        // line 2
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "trace", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
            // line 3
            echo "            <trace>
";
            // line 4
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "TwigBundle:Exception:traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
            // line 5
            echo "
            </trace>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 8
        echo "        </traces>
";
        
        $__internal_3cff96fff8a1e77fa24339e61fecbef6c02aaae3d9aaacfe02270b518b5adc42->leave($__internal_3cff96fff8a1e77fa24339e61fecbef6c02aaae3d9aaacfe02270b518b5adc42_prof);

        
        $__internal_98731e287a7b9254bc25b4801d26b4073a77724d12f1d9d04a3eb9321f2682f7->leave($__internal_98731e287a7b9254bc25b4801d26b4073a77724d12f1d9d04a3eb9321f2682f7_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 8,  37 => 5,  35 => 4,  32 => 3,  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("        <traces>
{% for trace in exception.trace %}
            <trace>
{% include '@Twig/Exception/trace.txt.twig' with { 'trace': trace } only %}

            </trace>
{% endfor %}
        </traces>
", "TwigBundle:Exception:traces.xml.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/traces.xml.twig");
    }
}
