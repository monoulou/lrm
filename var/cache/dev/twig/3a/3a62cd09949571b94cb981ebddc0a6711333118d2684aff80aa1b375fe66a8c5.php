<?php

/* @Twig/Exception/traces.xml.twig */
class __TwigTemplate_7565c1680c36495fb99b5acab59073da6b4ed56c58c06dd4b9b86c8474dddf68 extends Twig_Template
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
        $__internal_93fcf110afcb5cb2048f2c361e6a08d68d011b18a340c97adfc8e16352d950b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_93fcf110afcb5cb2048f2c361e6a08d68d011b18a340c97adfc8e16352d950b0->enter($__internal_93fcf110afcb5cb2048f2c361e6a08d68d011b18a340c97adfc8e16352d950b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

        $__internal_b77e678b5b50b4fd3768d3ed0681d27b9ca74ff309d37f820461d12852d5cb64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b77e678b5b50b4fd3768d3ed0681d27b9ca74ff309d37f820461d12852d5cb64->enter($__internal_b77e678b5b50b4fd3768d3ed0681d27b9ca74ff309d37f820461d12852d5cb64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/traces.xml.twig"));

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
            $this->loadTemplate("@Twig/Exception/trace.txt.twig", "@Twig/Exception/traces.xml.twig", 4)->display(array("trace" => $context["trace"]));
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
        
        $__internal_93fcf110afcb5cb2048f2c361e6a08d68d011b18a340c97adfc8e16352d950b0->leave($__internal_93fcf110afcb5cb2048f2c361e6a08d68d011b18a340c97adfc8e16352d950b0_prof);

        
        $__internal_b77e678b5b50b4fd3768d3ed0681d27b9ca74ff309d37f820461d12852d5cb64->leave($__internal_b77e678b5b50b4fd3768d3ed0681d27b9ca74ff309d37f820461d12852d5cb64_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/traces.xml.twig";
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
", "@Twig/Exception/traces.xml.twig", "C:\\wamp64\\www\\ligne_rh\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\traces.xml.twig");
    }
}
